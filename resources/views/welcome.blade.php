<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #E2EAFF; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #E2EAFF;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            max-width: 600px;
            width: 100%;
        }

        h1 {
            color: #333;
            font-size: 40px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        img {
            max-width: 90%;
            height: auto;
            margin-top: 20px;
            border-radius: 12px;
        }

        a {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            text-decoration: none;
            background-color: #007BFF;
            color: white;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 500;
            transition: background-color 0.3s, transform 0.3s;
        }

        a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome!</h1>
        <img src="{{ asset('images/Hi.jpeg') }}" alt="Hi Image" width="500" height="500">
        <p><a href="{{ url('/username_form') }}">LOG OUT</a></p>
    </div>
</body>
</html>
