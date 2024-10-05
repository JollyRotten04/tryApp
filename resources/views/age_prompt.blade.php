<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffd0d3; 
            color: #ce717c; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        .container {
            background-color: #F3BABA; 
            color: brown;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }
        h1 {
            margin-bottom: 10px;
            font-size: 2rem;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 15px 0;
            border: 2px solid #004d40;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            background-color: #a03c4e; 
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1.1rem;
            border-radius: 5px;
            width: 100%;
        }
        button:hover {
            background-color: #ffd0d3; 
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome to Lucxaellin Hotel!</h1>
    <p>Book now! Verify your age first.</p>
    <div class="mainContainerAgeCheck">
        <form action="{{ route('set.age') }}" method="POST">
            @csrf
            <label for="age">Please enter your age:</label>
            <input type="number" name="age" id="age" required>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>