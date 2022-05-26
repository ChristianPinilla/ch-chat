<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link   rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <style type="text/css">
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center
        }

        body > div{
            height: 80vh;
            width: 70vw
        }

        .main{
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            border: 1px solid rgba(0, 0, 0, .2);
            box-shadow: 0px 3px 5px rgba(0, 0, 0, .3);
        }

        .main > *{
            padding: 2rem
        }
    </style>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>