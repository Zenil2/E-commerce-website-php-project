<?php
$storename = "Online E-commerce Website";
$categories = [
    "Electonics",
    "Accessories",
    "Clothing",
    "Books"
];

$products = [
    [
    "name" => "Laptop",
    "price" => 55000,
    "category" => "Electronics",
    "images" => "https://placehold.co/600x400?text=Laptop"
    ],
    [
        "name" => "SmartPhone",
        "price" => 25000,
        "category" => "Electronics",
        "images" => "https://placehold.co/600x400?text=SmartPhone"
    ],
    [
        "name" => "Headphones",
        "price" => 2999,
        "category" => "Accessories",
        "images" => "https://placehold.co/600x400?text=Headphones"
    ],
    [
        "name" => "Smart Watch",
        "price" => 4999,
        "category" => "Accessories",
        "images" => "https://placehold.co/600x400?text=Smart+Watch"
    ],
];
?>




<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title><?= $storename ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="Asets/css/style.css">
</head>

<body>
     <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><?= $storename ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">🛒 Cart</a>
                        </li>


                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1 class="text-center">Welcome to our <?=  $storename ?></h1>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>