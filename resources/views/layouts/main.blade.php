<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel = "icon" href = "{{url('/assets/Logo-MarinaFF.png')}}" type = "image/x-icon">
    <title>Marina Food</title>
</head>
<body>
    <style>
        body{
            font-family: 'Poppins'
        }
    </style>

    @include('partials.navbar')

    <div class="container mt-4 relative">
        @yield('container')
    </div>

    @include('partials.footer')


</body>
</html>