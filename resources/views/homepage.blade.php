<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Homepage</title>
    <style>
        #emailButton, #phoneButton, #facebookButton, #instagramButton {
            display: none;
        }

        .image-button {
            background: none;
            border: none;
            cursor: pointer;
        }
        h1 {
            color: white;
            font-size: 25px;
            font-weight: 700;
        }
    </style>
</head>
<body>
<header>
    <section id="about">
        <nav class="navbar">
            <h1 class="welcome-text">Welcome!</h1>
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

    <div class="Main">
        <img class="profile" src="{{ asset('images/hotel.jpg') }}" alt="Profile Image" width="500" height="500">
        <p class="SmallIntro"><br><br><br><br>| Experience through Elegance |</p>
        <p class="Name"><b>LUCXAELLIN HOTEL</b></p>
        <p class="Description">Book your dream getaway!<br></p>
        <p class="Description2">
            "Where elegance meets comfort in the heart of luxury. At Lucxaellin Hotel, we redefine your stay with exceptional service, modern amenities, and a serene atmosphere designed for relaxation. Whether you’re here for business, leisure, or a special occasion, our personalized touch ensures an unforgettable experience. Indulge in the finest hospitality and let Lucxaellin Hotel be your haven away from home." <br> 
            &nbsp; &nbsp; <br><br><br>
        </p>

        <button class="button a" id="ResumeButton" role="button" 
        style="margin-left: 7.5cm;">
        <a href="{{ url('resume') }}" 
        style="color: white; text-decoration: none; font-size: 16px; display: inline-block; text-align: center;">Terms and Condition</a>
        </button>

        <button class="button" id="contactsButton" role="button" style="margin-left: 45px;">Show Contacts</button>

        <button id="emailButton" class="image-button" onclick="alert('Email button clicked')">
            <img src="{{ asset('images/Gmail.png') }}" alt="Email Icon" width="30" height="30">
        </button>
        <button id="phoneButton" class="image-button" onclick="alert('Phone button clicked')">
            <img src="{{ asset('images/Phone.png') }}" alt="Phone Icon" width="30" height="30">
        </button>
        <button id="facebookButton" class="image-button" onclick="alert('Facebook button clicked')">
            <img src="{{ asset('images/Facebook.png') }}" alt="Facebook Icon" width="30" height="30">
        </button>
        <button id="instagramButton" class="image-button" onclick="alert('Instagram button clicked')">
            <img src="{{ asset('images/Instagram.webp') }}" alt="Instagram Icon" width="30" height="30">
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function navigateTo(link) {
                window.location.href = link;
            }

            function toggleContactButtons() {
                var emailButton = document.getElementById('emailButton');
                var phoneButton = document.getElementById('phoneButton');
                var facebookButton = document.getElementById('facebookButton');
                var instagramButton = document.getElementById('instagramButton');

                var isHidden = emailButton.style.display === 'none';

                emailButton.style.display = isHidden ? 'block' : 'none';
                phoneButton.style.display = isHidden ? 'block' : 'none';
                facebookButton.style.display = isHidden ? 'block' : 'none';
                instagramButton.style.display = isHidden ? 'block' : 'none';

                var contactsButtonText = document.getElementById('contactsButton');
                contactsButtonText.innerHTML = isHidden ? 'Hide Contacts' : 'Show Contacts';
            }

            document.getElementById('contactsButton').addEventListener('click', toggleContactButtons);

            document.getElementById('aboutMeButton').addEventListener('click', function() {
                navigateTo('{{ url('aboutme') }}');
            });

            document.getElementById('personalInfoButton').addEventListener('click', function() {
                navigateTo('{{ url('personal-information') }}');
            });

            document.getElementById('ResumeButton').addEventListener('click', function() {
                navigateTo('{{ url('resume') }}');
            });
        });
    </script>
</body>
</html>
