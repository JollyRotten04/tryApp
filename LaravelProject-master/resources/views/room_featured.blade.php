<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Room Featured</title>
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
    <h1 style="text-align: center; color:rgb(181, 99, 117); font-size: 40px; margin-top: 50px; margin-bottom: 20px;">ROOM FEATURES</h1>
    <h2 class="subtitle"> ~ Experience Unmatched Comfort at Lucxaellin Hotel – Where Every Room Offers a Unique View and Every Feature Enhances Your Stay ~</h2>
    <table class="table3">
    <tr>
        <th><a href="{{ url('contactus') }}" target="_blank"><img class="roomfeatures" src="{{ asset('images/ocean.jpg') }}" alt="Pool" width="300" height="300"></a></th>
        <th><a href="{{ url('contactus') }}" target="_blank"><img class="roomfeatures" src="{{ asset('images/city.jpg') }}" alt="Gym" width="300" height="300"></a></th>
        <th><a href="{{ url('contactus') }}" target="_blank"><img class="roomfeatures" src="{{ asset('images/pool.jpg') }}" alt="Spa" width="300" height="300"></a></th>
        <th><a href="{{ url('contactus') }}" target="_blank"><img class="roomfeatures" src="{{ asset('images/garden.jpg') }}" alt="Bar" width="300" height="300"></a></th>
    </tr>
    <tr>
        <td style="font-size: 15px;"><b>OCEAN VIEW ROOM</b> <br>Panoramic Ocean View, Balcony or Terrace, Luxurious Bedding, Modern Bathroom, Flat-Screen TV, Mini-Bar & Coffee Maker, Climate Control</td>
        <td style="font-size: 15px;"><b>CITY VIEW ROOM</b> <br>Dynamic Cityscape, Comfortable Seating Area, High-Quality Bedding, Stylish Bathroom, Flat-Screen TV, Work Desk</td>
        <td style="font-size: 15px;"><b>POOL VIEW ROOM</b> <br>nviting Pool View, Outdoor Seating, Spacious Bed, Contemporary Bathroom, Entertainment Options, Mini-Bar & Coffee Maker</td>
        <td style="font-size: 15px;"><b>GARDEN VIEW ROOM</b><br>nviting Pool View, Outdoor Seating, Spacious Bed, Contemporary Bathroom, Entertainment Options, Mini-Bar & Coffee Maker</td>
    </tr>
</body>
</html>
