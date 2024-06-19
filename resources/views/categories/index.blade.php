@extends('layouts.app')

@section('title', 'Digital Store - Categories')

@section('content')
<div class="container">
    <h2>Categories</h2>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="row mb-3">
        <div class="col-md-6">
            <a class="btn btn-success" href="{{ route('categories.create') }}">Create New Category</a>
        </div>
        <div class="col-md-6 text-right">
            <a class="btn btn-info" href="{{ route('categories.downloadPDF') }}">Download Category List</a>
        </div>
    </div>

    @if ($categories->isEmpty())
        <p>No Categories Available</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
