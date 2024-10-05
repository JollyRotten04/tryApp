<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Terms and Conditions</title>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function navigateTo(link) {
                window.location.href = link;
            }

            document.getElementById('profileButton').addEventListener('click', function() {
                navigateTo('{{ url('/') }}'); 
            });
        });
    </script>
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
    <main>
    <br><h1 style="text-align: center; color: rgb(181, 99, 117); font-size: 30px; margin-top: 20px; margin-bottom: 15px;">TERMS AND CONDITIONS</h1> 
    <h2> Reservations and Bookings</h2>
            <ul style="text-align: center">
                <li>All reservations are subject to availability.</li>
                <li>A valid payment method is required at the time of booking.</li>
                <li>Guests must provide accurate personal information during the booking process. Lucxaellin Hotel is not responsible for any issues arising from incorrect details.</li>
                <li>Special requests are subject to availability and may incur additional charges.</li>
            </ul>
            
            <h2> Check-In and Check-Out</h2>
            <ul style="text-align: center">
                <li><strong>Check-In Time:</strong> 2:00 PM</li>
                <li><strong>Check-Out Time:</strong> 12:00 PM (noon)</li>
                <li>Early check-in and late check-out are available upon request and may incur additional charges, depending on availability.</li>
                <li>A valid government-issued photo ID and credit card are required upon check-in.</li>
            </ul>
            
            <h2> Cancellations and Modifications</h2>
            <ul style="text-align: center">
                <li>Cancellations or modifications to reservations must be made within the timeframe specified at the time of booking.</li>
                <li>Cancellations made after the free cancellation period may result in a cancellation fee equivalent to one night's stay.</li>
                <li>No-shows will be charged the full reservation amount.</li>
            </ul>
            
            <h2> Payment</h2>
            <ul style="text-align: center">
                <li>Full payment for the stay must be settled upon check-out unless pre-payment is required at the time of booking.</li>
                <li>Additional charges incurred during the stay (e.g., room service, minibar, etc.) must be paid at check-out.</li>
                <li>Lucxaellin Hotel accepts major credit cards, debit cards, and cash payments.</li>
            </ul>
            
            <h2> Damage and Liability</h2>
            <ul style="text-align: center">
                <li>Guests are responsible for any damage caused to the hotel property during their stay.</li>
                <li>Lucxaellin Hotel reserves the right to charge guests for the cost of repairing or replacing damaged items.</li>
                <li>The hotel is not responsible for loss, theft, or damage to guests' personal belongings. Safe deposit boxes are available in rooms for guest use.</li>
            </ul>
            
            <h2> Guest Conduct</h2>
            <ul style="text-align: center">
                <li>Guests are expected to behave respectfully towards other guests, staff, and hotel property.</li>
                <li>Lucxaellin Hotel reserves the right to refuse service or evict guests who engage in inappropriate or disruptive behavior without refund.</li>
            </ul>
            
            <h2> No Smoking Policy</h2>
            <p style="text-align: center">Lucxaellin Hotel is a non-smoking establishment. Smoking in designated non-smoking areas will result in a cleaning fee.</p>
            
            <h2> Pets</h2>
            <p style="text-align: center"> Pets are not allowed unless otherwise specified in your reservation. If pets are allowed, guests must adhere to the hotel's pet policy, including any additional charges.</p>
            
            <h2> Health and Safety</h2>
            <p style="text-align: center">Lucxaellin Hotel adheres to all local health and safety regulations. Guests are required to follow safety protocols and respect any temporary measures implemented for their well-being.</p>
            
            <h2> Use of Facilities</h2>
            <p style="text-align: center">Hotel facilities, such as the pool, gym, and restaurant, are available for guest use. Some facilities may require reservations. The hotel reserves the right to restrict access to certain areas for maintenance or safety reasons.</p>
            
            <h2> Privacy Policy</h2>
            <p style="text-align: center">Lucxaellin Hotel is committed to protecting your privacy. Personal information collected during your stay or booking will be used in accordance with our privacy policy.</p>
            
            <h2> Governing Law</h2>
            <p style="text-align: center">These terms and conditions are governed by the laws of [Your Jurisdiction]. Any disputes arising from these terms shall be subject to the exclusive jurisdiction of the courts of [Your Jurisdiction].</p>
            
            <h2> Changes to Terms</h2>
            <p style="text-align: center">Lucxaellin Hotel reserves the right to modify these terms and conditions at any time. Changes will be posted on our website and apply to future bookings.</p>
            <br> <br> <br>
    </main>
</body>
</html>