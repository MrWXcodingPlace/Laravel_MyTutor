<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Tutor</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            img{
                height: 80px;
            }
            section{
                margin: 80px 0;
            }
            .grid-container {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
                justify-content: space-around;
                gap: 10px;
            }
            footer p {
                letter-spacing: 1px;
                color: whitesmoke;
            }
            footer .social-icon a {
                margin: 10px;
            }
            .fa {
                padding: 5px;
                font-size: 15px;
                width: 15px;
                text-align: center;
                text-decoration: none;
            }
            
            @media (max-width: 600px) {
                .grid-container {
                    grid-template-columns: 1fr 1fr;
                }
            }
        </style>
    </head>
    <body>
        <!-- Navigation bar -->
        <nav class="w3-top">
            <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
              <a href="{{ url('/') }}" class="w3-bar-item w3-button">My Tutor</a>
              
              <!-- Right-sided navbar links. Hide them on small screens -->
              <div class="w3-right w3-hide-small">
                <a href="{{ url('login') }}" class="w3-bar-item w3-button">Login</a>
                <a href="{{ url('register') }}" class="w3-bar-item w3-button">Register</a>
              </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-64 w3-blue-grey">
            <h1 class="w3-xxxlarge"><b>My Tutor</b></h1>
            <p>Get your favorite product in your prices</p>
        </header>

        <section style="margin: 80px 20px">
            <h2 class="w3-center">Welcom to My Tutor</h2>
            <p class="w3-center">Rem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididun</p>
            <hr />
            <div class="grid-container">
                <div class="w3-card w3-round w3-center w3-padding-large grid-item">
                    <img src="{{ url('/images/mortarboard.png') }}" alt="school">
                    <h3>Preparing for School</h3>
                    <p>Sit amet, consectetur adipisicing elit,sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                </div>
                <div class="w3-card w3-round w3-center w3-padding-large grid-item">
                    <img src="{{ url('images/target.png') }}" alt="creative">
                    <h3>Love Creativity</h3>
                    <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                </div>
                <div class="w3-card w3-round w3-center w3-padding-large grid-item">
                    <img src="{{ url('images/trophy.png') }}" alt="mental">
                    <h3>Mental Arithmetic</h3>
                    <p>Consectetur adipisicing elit, sed do eiusmod tem t ut labore et dolor por incididunt ut labore et dolore magna</p>
                </div>
                <div class="w3-card w3-round w3-center w3-padding-large grid-item">
                    <img src="{{ url('images/magnifying-glass.png')}}" alt="experiment">
                    <h3>Experimenters Learn</h3>
                    <p>Amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                </div>
            </div>    
        </section>

        <section class="w3-center" style="margin: 80px 20px">
            <img src="{{ url('images/question.png') }}" alt="question">
            <h2>Need help? Let's get in touchs</h2>
            <ul style="list-style-type: none;">
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit ?</li>
                <li>Nesciunt maiores ipsam debitis officia inventore labore est ?</li>
                <li>Repellendus corrupti eius qui iusto velit odio,</li>
                <li>Dolorum nulla veniam fuga aliquam quas laudantium</li>
                <li>Amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</li>
            </ul>           
        </section>
        
        <!-- Footer -->
        <footer class="w3-footer w3-center w3-blue-grey w3-padding-32">
            <p>&copy; 2022 MyTutor Inc. All rights reserved.</p>
            <div class="social-icon">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </footer>
    </body>
</html>