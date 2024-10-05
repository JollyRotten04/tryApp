<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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