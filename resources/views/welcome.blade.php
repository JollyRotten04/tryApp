<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            /* position: relative; */
            background-color: pink;
            overflow-y: hidden;
        }

        #mainLabel{
            font-size: clamp(2.5vh, 3.5vh, 3.5vh);
            position: absolute;
            /* color: white; */
            left: 50%;
            transform: translate(-50%);
            top: 5%;
            font-weight: 600;
            text-align: center;
            font-family: "Gill Sans", "Helvetica Neue", Helvetica, Arial;
        }

        #gore1{
            position: absolute;
            left: 5%;
            top: 5%;
            height: 20vh;
            width: 20vh;
        }

        #gore2{
            position: absolute;
            right: 14%;
            top: 8%;
            height: 20vh;
            width: 20vh;
        }

        #gore3{
            position: absolute;
            left: 20%;
            top: 52%;
            height: 20vh;
            width: 20vh;
        }

        #gore4{
            position: absolute;
            left: 66%;
            top: 43%;
            height: 20vh;
            width: 20vh;
        }
    </style>
    <title>My Website</title>
</head>
<body>
    <p id="mainLabel">Welcome to my cutsie tootsie webpage!!!</p>
    @include('Component1');
    @include('Component2');
    @include('Component3');
    @include('Component4');
    <img id="gore5" src="{{ asset('images/gore.png') }}" alt="">
</body>
</html>