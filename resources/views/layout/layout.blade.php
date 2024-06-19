 <!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Laravel</title>
    <!-- Add your CSS here -->
    
</head>
<body class="bg-primary">
    @include('partials.navbar')
   
    
    <div class="container">
        @yield('content')
    </div>
    @include('partials.footer')
    <!-- Add your JS here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
