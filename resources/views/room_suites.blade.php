<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Room Suites</title>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            function navigateTo(link) {
                window.location.href = link;
            }

            document.getElementById('profileButton').addEventListener('click', function () {
                navigateTo('{{ url('profile') }}');
            });

            document.getElementById('aboutMeButton').addEventListener('click', function () {
                navigateTo('{{ url('aboutme') }}');
            });

            document.getElementById('personalInfoButton').addEventListener('click', function () {
                navigateTo('{{ url('personal-information') }}');
            });
        });
    </script>
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

    <main>
        <h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 40px; margin-top: 35px; margin-bottom: 15px;">LUCXAELLIN ROOM OFFERS</h1>
        <h2 class="subtitle">~ Book your stay with us and experience unparalleled comfort and elegance in every room ~</h2>

        <table class="table4">
            <tr>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/singleroom.jpg') }}" alt="Single" width="300" height="300"></th>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/double_room.jpg') }}" alt="Double" width="300" height="300"></th>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/triple_room.jpg') }}" alt="Triple" width="300" height="300"></th>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/quad_room.jpg') }}" alt="Quad" width="300" height="300"></th>
            </tr>
            <tr>
                <td><b>Single Room</b></td>
                <td><b>Double Room</b></td>
                <td><b>Triple Room</b></td>
                <td><b>Quad Room</b></td>
            </tr>
            <tr>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/king.jpg') }}" alt="King" width="300" height="300"></th>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/queen.jpg') }}" alt="Queen" width="300" height="300"></th>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/holywoodtwin.jpg') }}" alt="HolywoodTwin" width="300" height="300"></th>
                <th><a href="{{ url('contactus') }}" target="_blank"><img class="hobbiespictures" src="{{ asset('images/suite.jpg') }}" alt="Suite" width="300" height="300"></th>
            </tr>
            <tr>
                <td><b>Queen Room</b></td>
                <td><b>King Room</b></td>
                <td><b>Holywood Twin Room</b></td>
                <td><b>Suite</b></td>
            </tr>
        </table>
    </main>
</body>
</html>
