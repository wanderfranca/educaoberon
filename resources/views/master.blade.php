<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/css/bootstrap.css','resources/css/tailwind.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>

    <div class="class container-fluid">
        @yield('content')
    </div>


</body>
</html>
