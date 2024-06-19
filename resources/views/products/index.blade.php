@extends('layouts.app')

@section('title', 'Digital Store - Products')

@section('content')
<div class="container">
    <h2>Products</h2>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row mb-3">
        <div class="col-md-6">
            <a class="btn btn-success mb-3" href="{{ route('products.create') }}">Create New Product</a>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn btn-info mb-3 float-right" href="{{ route('products.downloadExcel') }}">Download Product List</a>
        </div>
    </div>
    
    @if ($products->isEmpty())
        <p>No Products Available</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Stocks</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ ++$loop->index }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
