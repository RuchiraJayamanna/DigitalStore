<!DOCTYPE html>
<html>
<head>
    <title>Digital Store</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body class="welcome_body">
    <div class="jumbotron text-center">
        <h1 class="display-4">Welcome to Digital Store</h1>
        <p class="lead">Stock Management System</p>
        <hr class="my-4">
        <p class="lead">
            @auth
                <a class="btn btn-primary btn-lg" href="{{ route('categories.index') }}" role="button">Categories</a>
                <a class="btn btn-primary btn-lg" href="{{ route('products.index') }}" role="button">Products</a>
            @else
                <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Login</a>
                <a class="btn btn-primary btn-lg" href="{{ route('register') }} " role="button">Register</a>
            @endauth
        </p>
    </div>
</body>
</html>
