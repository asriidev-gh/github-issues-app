<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Issues</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <!-- Use Vite to include JS -->
    @vite('resources/js/app.js')
</body>
</html>
