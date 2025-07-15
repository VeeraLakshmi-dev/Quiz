<!-- layouts/app.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Quiz App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    @if(session('message'))
        <div class="alert alert-success text-center mt-3">
            {{ session('message') }}
        </div>
    @endif

    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>
    
     <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    @stack('scripts')
</body>
</html>
