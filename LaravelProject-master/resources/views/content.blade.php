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
        <div class="menu-items">
        <a href="{{ route('homepage') }}" class="nav-button">HOME</a>
        <a href="{{ route('aboutus') }}" class="nav-button">ABOUT US</a>
        <a href="{{ route('content') }}" class="nav-button">CONTENT</a>
        <a href="{{ route('contactus') }}" class="nav-button">CONTACT US</a>
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
</body>
</html>
