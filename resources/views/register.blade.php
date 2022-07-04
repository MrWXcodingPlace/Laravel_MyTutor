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
            .register-form{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 50px 0;
            }
            .register-header, .register-content{
                width: 70%;
            }
            .w3-row-padding{
                padding-bottom: 10px;
            }
            textarea{
                resize: none;
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

        <!-- Register form -->
        <div class="register-form">
            <header class="register-header w3-container w3-blue-gray w3-padding">
                <h1>Register Form</h1>
            </header>
            <div class="register-content w3-card w3-white w3-padding">
                <form action="{{ route('register.post') }}" method="post" accept-charset="UTF-8">
                    {{csrf_field()}}
                    <div class="w3-row-padding">
                        <div class="w3-col s12">
                            <label for="name">Full name</label>
                            <input type="text" class="w3-input w3-round w3-border" name="name">
                            
                            @if ($errors->has('name'))
                                <span class="w3-red">{{ $errors->first('name') }}</span>
                            @endif
                        </div> 
                    </div>

                    <div class="w3-row-padding">
                        <div class="w3-half">
                            <label for="email">Email</label>
                            <input type="email" class="w3-input w3-round w3-border" name="email">
                            
                            @if ($errors->has('email'))
                                <span class="w3-red">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="w3-half">
                            <label for="phone">Phone number</label>
                            <input type="text" class="w3-input w3-round w3-border" name="phone">
                            
                            @if ($errors->has('phone'))
                                <span class="w3-red">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="w3-row-padding">
                        <div class="w3-col s12">
                            <label for="address">Mailing address</label>
                            <textarea class="w3-input w3-round w3-border" rows="4" name="address"></textarea>
    
                            @if ($errors->has('address'))
                                <span class="w3-red">{{ $errors->first('address') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="w3-row-padding">
                        <div class="w3-half">
                            <label for="state">State</label>
                            <select class="w3-select w3-border" name="state">
                                <option value="" disabled selected>Choose your state</option>
                                <option value="Johor">Johor</option>
                                <option value="Keah">Kedah</option>
                                <option value="Kelantan">Kelantan</option>
                                <option value="Malacca">Malacca</option>
                                <option value="Negeri Sembilan">Negeri Sembilan</option>
                                <option value="Pahang">Pahang</option>
                                <option value="Penang">Penang</option>
                                <option value="Perak">Perak</option>
                                <option value="Perlis">Perlis</option>
                                <option value="Sabah">Sabah</option>
                                <option value="Sarawak">Sarawak</option>
                                <option value="Selangor">Selangor</option>
                                <option value="Terengganu">Terengganu</option>
                            </select>
                        </div>
                        @if ($errors->has('state'))
                            <span class="w3-red">{{ $errors->first('state') }}</span>
                        @endif

                        <div class="w3-half">
                            <label for="password">Passowrd</label>
                            <input type="password" class="w3-input w3-round w3-border" name="password">
                            
                            @if ($errors->has('password'))
                                <span class="w3-red">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="w3-row">
                        <button class="w3-button w3-blue-gray w3-round w3-right" value="submit">Register</button>
                    </div>
                    <p style="text-align:center">
                        Already have an account ? <a href="{{ url('login') }}">Login Here</a>
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
