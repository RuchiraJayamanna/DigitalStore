@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Category</h2>

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

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Category Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-cancel" onclick="window.location='{{ route('categories.index') }}';">Cancel</button>
    </form>
</div>
@endsection


