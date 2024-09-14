<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="mainContainer">
        <div id="header"><p>List of vacant rooms: </p></div>

        <div class="innerContainer">
            @include('layout1');
        </div>
    </div>

    @include('layout2');

    @include('layout3');
</body>
</html>