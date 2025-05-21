<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark py-3">
    <div class="container d-flex justify-content-between">
        <span class="navbar-brand fw-bold">Zaryan</span>
        <span class="text-light">Sistem Manajemen Data Barang</span>
    </div>
</nav>

<!-- Main Content -->
<div class="container mt-4 flex-grow-1">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm rounded-4">
        <div class="card-body">
            @yield('content')
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-light text-center text-muted py-3 mt-auto">
    <small>&copy; {{ date('Y') }} Zaryan. Manajemen Informatika 2024A.</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
