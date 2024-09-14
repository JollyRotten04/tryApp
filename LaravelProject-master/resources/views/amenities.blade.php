<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Education</title>
</head>
<body>
    <header>
    <section id="about">
        <nav class="right-aligned-nav">
        <div class="menu-items">
        <a href="{{ route('homepage') }}" class="nav-button">HOME</a>
        <a href="{{ route('aboutus') }}" class="nav-button">ABOUT US</a>
        <a href="{{ route('content') }}" class="nav-button">CONTENT</a>
        <a href="{{ route('contactus') }}" class="nav-button">CONTACT US</a>
        </div>
        </nav>
    </section>
    </header>
    <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 40px; margin-top: 50px; margin-bottom: 20px;">AMENITIES</h1>
    <h2 class="subtitle"> ~ Indulge in our amenities for a stay filled with relaxation and luxury ~</h2> 
    <table class="table3">
    <tr>
        <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/pool.jpg') }}" alt="Pool" width="300" height="300"></a></th>
        <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/gym.jpg') }}" alt="Gym" width="300" height="300"></a></th>
        <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/spa.jpg') }}" alt="Spa" width="300" height="300"></a></th>
        <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/bar.jpg') }}" alt="Bar" width="300" height="300"></a></th>
    </tr>
    <tr>
        <td style="font-size: 20px;"><b>POOL</b></td>
        <td style="font-size: 20px;"><b>GYM</b></td>
        <td style="font-size: 20px;"><b>SPA</b></td>
        <td style="font-size: 20px;"><b>BAR</b></td>
    </tr>
</table>
</body>
</html>
