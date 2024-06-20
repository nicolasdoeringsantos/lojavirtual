<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja virtual</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-dark {
            background-color: #343a40;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px 0;
        }
        .product-card {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 10px;
            margin: 10px;
            text-align: center;
            width: 200px;
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Loja virtual</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Registrar</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="product-list">
        @foreach($products as $product)
            <div class="product-card">
                <h5>{{ $product->name }}</h5>
                <p>{{ $product->description }}</p>
                <p>R$ {{ number_format($product->price, 2, ',', '.') }}</p>
            </div>
        @endforeach
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
