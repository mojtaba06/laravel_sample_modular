<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module TodoUI</title>

    {{-- Laravel Mix - CSS File --}}
    {{-- <link rel="stylesheet" href="{{ mix('css/todoui.css') }}"> --}}
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #4CAF50;
            color: white;
        }

        .content {
            padding: 10px;

        }
    </style>
</head>

<body>

    <div class="topnav">
        @foreach ($navbar as $nav)
        <a href="{{route('admin',[$nav['module'],$nav['method']])}}">{{$nav['name']}}</a>
        @endforeach

    </div>
    <div class="content">
        @yield('content')
    </div>
    {{-- Laravel Mix - JS File --}}
    {{-- <script src="{{ mix('js/todoui.js') }}"></script> --}}
</body>

</html>