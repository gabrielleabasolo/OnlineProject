<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-yellow-100">
    <nav class="p-6 flex justify-between border-black border-2">
        <ul class="flex items-center">
            <li><a href="" class="p-6">  Hello Gabrielle!</a></li>
            <li><a href="" class="p-6">  Dashboard</a></li>
            <li><a href="" class="p-6">  Sections</a></li>
        </ul>
    </nav>
    
    @yield('content')
</body>
</html>