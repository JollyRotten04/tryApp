<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Content</title>
    <style>
        #profileButton, #aboutMeButton, #personalInfoButton {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            margin: 10px;
        }

        #profileButton:hover, #aboutMeButton:hover, #personalInfoButton:hover {
            background-color: #0056b3;
        }

        .table2 {
            width: 100%;
            border-collapse: collapse;
        }

        .table2 th, .table2 td {
            padding: 10px;
            text-align: center;
        }

        .table2 th {
            font-size: 18px;
        }

        .table2 img {
            width: 100%;
        }

        .hobbiespictures {
            max-width: 310px;
        }

    </style>
</head>
<body>
<header>
    <section id="about">
        <nav class="right-aligned-nav">
        <div class="nav-links">
                <a href="{{ url('homepage') }}" class="nav-button">HOME</a>
                <a href="{{ url('about') }}" class="nav-button">ABOUT US</a>
                <a href="{{ url('content') }}" class="nav-button">CONTENT</a>
                <a href="{{ url('contactus') }}" class="nav-button">CONTACT US</a>
                <a href="{{ url('Layout')}}" class="nav-button">ROOMS</a>
            </div>
        </nav>
    </section>
</header>

    <section id="personal-info">
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 45px; margin-top: 25px;">CONTENT</h1> <br>
        <h2 style="text-align: center; color: rgb(76, 75, 75); font-size: 20px; margin-top: 5px; margin-bottom: 20px;"> ~ Indulge in Unforgettable Experiences at Lucxaellin Hotel – Where Every Avail Unveils a New Level of Luxury and Comfort ~</h2> <br>

        <table class="table2">
            <tr>
                <th><a href="{{ url('room_suites') }}"><img class="hobbiespictures" src="{{ asset('images/rooms.jpg') }}" alt="Education"></a></th>
                <th><a href="{{ url('room_featured') }}"><img class="hobbiespictures" src="{{ asset('images/features.jpg') }}" alt="Relationship"></a></th>
                <th><a href="{{ url('amenities') }}"><img class="hobbiespictures" src="{{ asset('images/amenities.jpg') }}" alt="Hobbies"></a></th>
            </tr>
            <tr style="margin-top: 5px;">
                <td style="font-size: 18px;"><b>ROOM & SUITES</b></td>
                <td style="font-size: 18px;"><b>ROOM FEATURED</b></td>
                <td style="font-size: 18px;"><b>AMENITIES</b></td>
            </tr>
        </table>
    </section>
    
    <footer class="footer">
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
