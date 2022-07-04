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
            .login-form{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 80vh;
            }
            .login-header, .login-content{
                width: 60%;
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
        </style>
    </head>
    <body>  
        @if (session('save'))
            <script>alert("Success");</script>
        @endif
        @if (session('error'))
            <script>alert("Failed");</script>
        @endif
        
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

        <!-- Login form -->
        <div class="login-form">
            <div class="login-header w3-container w3-blue-gray w3-padding">
                <h1>Login Form</h1>
            </div>
            <div class="login-content w3-card w3-white w3-padding">
                <form action="{{ route('login.post') }}" method="post" accept-charset="UTF-8">
                    {{csrf_field()}}                   
                    <div>
                        <label for="email">Email</label>
                        <input class="w3-input w3-round w3-border" type="email" name="email" >
                        @if ($errors->has('email'))
                            <span class="w3-red">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                   
                    <div>
                        <label for="password">Password</label>
                        <input class="w3-input w3-round w3-border" type="password" name="password"  >
                        @if ($errors->has('password'))
                            <span class="w3-red">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <br />
                    <div class="w3-row">
                        <input type="checkbox" name="remember"> Remember Me
                        <button class="w3-button w3-blue-gray w3-round w3-right" type="submit">Login</button>
                    </div>
                    <p style="text-align: center">
                        New Tutor ? <a href="{{ url('register') }}">Register an account</a>
                    </p>
                </form>
            </div>
        </div>

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
