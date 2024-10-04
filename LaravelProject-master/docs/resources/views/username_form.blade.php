<!DOCTYPE html>
<html>
<head>
    <title>Enter Your Username</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-image: url('../images/background.jpg');
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #f7d2d6;
            padding: 70px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            text-align: center;
            max-width: 400px;
            width: 120%;
        }

        h1 {
            color: #333;
            font-size: 32px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        h2 {
            color: #555;
            font-size: 18px;
            margin-bottom: 30px;
            font-weight: 300;
        }

        label {
            font-size: 16px;
            color: #333;
        }

        input[type="text"] {
            padding: 12px;
            font-size: 16px;
            width: 100%;
            border: 2px solid #ccc;
            border-radius: 8px;
            margin-top: 10px;
            margin-bottom: 5px;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #ce717c;
        }

        .info {
            font-size: 14px;
            color: #ce717c;
            margin-bottom: 20px;
            font-weight: 300;
        }

        button {
            background-color: #ce717c;
            color: rgb(57, 57, 57);
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 20px;
        }

        button:hover {
            background-color: #e08c96;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Enter Your Username</h1>
        <h2>Username only accepts alphabetic characters (a-z, A-Z)</h2>
        <form action="{{ url('/user') }}" method="GET">
            @csrf
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="{{ request('username') }}" pattern="[a-zA-Z]+" title="Please enter only alphabetic characters.">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
