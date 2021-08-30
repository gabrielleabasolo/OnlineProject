<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="bg-gray-200">
    <div class="flex-row-reverse">
    </div>
    @yield('content')

    <div class="absolute grid justify-center w-full bg-gray-800">
            <form action="" class="flex flex-col self-center ">
                <label for="Contact me" class="text-lg text-white">Contact me</label>
                <input type="text" id="fname" placeholder="First Name" class="flex-1 my-2">
                <input type="text" id="lname" placeholder="last Name"class="flex-1 my-2">
                <input type="text" id="Email" placeholder="Email" class="flex-1 my-2">
                <textarea class="flex-initial my-2" name="message" id="message" cols="30" rows="10" placeholder="Enter Message here..."></textarea>
            </form>
    </div>
</body>
</html>