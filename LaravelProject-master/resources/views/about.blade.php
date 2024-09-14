<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>About Me</title>
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

    <section id="about">
        <h1 class="title">About Us</h1>
        <br>
        <h2 class="subtitle"> ~ Discover Lucxaellin Hotel - Where Every Stay is a Story Waiting to Unfold ~</h2>
        <br>

        <img class="aboutme" src="{{ asset('images/about.jpg') }}" width="300" height="350" alt="Profile Image">

        <p class="introduction">
        A luxurious oasis where comfort meets elegance in every corner. Nestled in a prime location, Lucxaellin Hotel offers a unique blend of modern sophistication and timeless charm, making it the perfect destination for both leisure and business travelers.
        At Lucxaellin, we pride ourselves on providing an exceptional experience for our guests. From the moment you step through our doors, you will be greeted by warm hospitality, impeccable service, and a commitment to excellence that defines every aspect of our hotel. Whether you're relaxing in one of our beautifully designed rooms or enjoying a fine dining experience at our restaurant, every detail has been carefully crafted to ensure your stay is nothing short of perfect.
        Our mission is to create a serene and memorable atmosphere where every guest feels special. We invite you to unwind in our luxurious amenities, explore the vibrant surroundings, and indulge in a stay that is tailored to your needs. From our state-of-the-art wellness center to our exquisitely landscaped gardens, every aspect of Lucxaellin Hotel is designed to rejuvenate your mind and spirit. Our dedicated staff is always on hand to ensure that your stay exceeds your expectations, making every moment a treasured memory.
        </p>
        <p class="introduction2">
        <br>Lucxaellin Hotel – Experience elegance, embrace tranquility.
        </p>
    </section>
</body>
</html>
