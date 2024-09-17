<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <nav class="right-aligned-nav">
                <div class="nav-links">
                    <a href="{{ url('homepage') }}" class="nav-button">HOME</a>
                    <a href="{{ url('about') }}" class="nav-button">ABOUT US</a>
                    <a href="{{ url('content') }}" class="nav-button">CONTENT</a>
                    <a href="{{ url('contactus') }}" class="nav-button">CONTACT US</a>
                    <a href="{{ url('Layout') }}" class="nav-button">ROOMS</a>
                </div>
            </nav>
        </header>

        <div class="mainContainer">
            <div id="header">
                <h1 class="Rooms">List of Room Available</h1>
            </div>

            <div class="innerContainer">
                @include('layout1')
            </div>
        </div>

        @include('layout2')
        @include('layout3')
    </div>

    <footer class="footer-rooms">
    <div class="footer-content">
        <div class="footer-section">
            <p>Our hotel offers a blend of modern amenities and classic elegance, ensuring a memorable stay for all our guests.</p>
            <p>Enjoy our spacious rooms, top-notch facilities, and exceptional service tailored to your needs. Whether you're here for business or leisure,</p>
            <p>Lucxaellin Hotel provides the perfect environment for relaxation and productivity.</p>
        </div>

        <div class="footer-section social-media">
            <h4>Follow Us</h4>
            <a href="https://facebook.com" target="_blank" class="social-icon">Facebook</a>
            <a href="https://twitter.com" target="_blank" class="social-icon">Twitter</a>
            <a href="https://instagram.com" target="_blank" class="social-icon">Instagram</a>
            <a href="https://linkedin.com" target="_blank" class="social-icon">LinkedIn</a>
        </div>

        <div class="footer-section">
            <br><p>&copy; 2024 Lucxaellin Hotel. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
