@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Product</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
        </div>

        <div class="form-group">
            <label for="category_id">Category:</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="text" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-cancel" onclick="window.location='{{ route('products.index') }}'">Cancel</button>
    </form>
</div>
@endsection
