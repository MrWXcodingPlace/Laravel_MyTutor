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
            textarea {
                resize: none;
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
              <a href="{{ url('mainpage') }}" class="w3-bar-item w3-button">My Tutor</a>
              
              <!-- Right-sided navbar links. Hide them on small screens -->
              <div class="w3-right w3-hide-small">
                <a href="{{ route('logout') }}" class="w3-bar-item w3-button">Logout</a>
              </div>
            </div>
        </nav>

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-64 w3-blue-grey">
            <h1 class="w3-xxxlarge"><b>My Tutor</b></h1>
            <p>Get your favorite product in your prices</p>
        </header>

        <section>
            <h2 class="w3-center">Main Page</h2>
            <!-- Modal button -->
            <div>
                <button class="w3-button w3-blue-grey w3-round w3-right" onclick="document.getElementById('newsubject').style.display= 'block';return false;">
                    New Subject
                </button>
            </div>
            <br><br>
           <!-- Display data -->
           <div class="w3-padding">
                <table class="w3-table w3-striped w3-bordered">
                <thead class="w3-blue-grey">
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price (RM) </th>      
                    <th>Learning Hours</th>
                </thead>
                @foreach ($subjectItems as $subjectItem)
                <tr>
                    <!-- <td>{{ $loop->iteration }}</td> -->
                    <td>{{ $subjectItem->id}}</td>
                    <td>{{ $subjectItem->subject_title}}</td>
                    <td>{{ $subjectItem->subject_description}}</td>
                    <td>{{ $subjectItem->subject_price}}</td>
                    <td>{{ $subjectItem->subject_learningHours}}</td>
                </tr>
                @endforeach
                </table>
            </div>
        </section>

        <!-- Pop out add product modal -->
        <div id="newsubject" class="w3-modal w3-animate-opacity">
            <div class="w3-modal-content w3-round" style="width:500px">
                <header class="w3-row w3-blue-grey"> <span onclick="document.getElementById('newsubject').style.display='none'" class="w3-button w3-display-topright w3-small">&times;</span>
                    <h4 class="w3-margin-left">New Subject Form</h4>
                </header>
                
                <div class="w3-padding">
                <form action="{{ route('createSubject') }}" method="post">
                    {{csrf_field()}}
                    <div class="w3-row-padding">
                        <div class="w3-col s12">
                            <label for="sbj_title">Title</label>
                            <input class="w3-input w3-round w3-border" type="text" name="sbj_title">
                        </div>
                    </div>
                    <div class="w3-row-padding">
                        <div class="w3-col s12">
                            <label for="sbj_descr">Description</label>
                            <textarea class="w3-input w3-border w3-round" name="sbj_descr" rows="4" cols="50"></textarea>
                        </div>
                    </div>                 
                    <div class="w3-row-padding">
                        <div class="w3-half">
                            <label for="sbj_price">Price</label>
                            <input class="w3-input w3-round w3-border" type="number" min="0" step="any" name="sbj_price">
                        </div>
                        <div class="w3-half">
                            <label for="sbj_learnHours">Learning hours</label>
                            <input class="w3-input w3-round w3-border" type="number" min="0" step="1" name="sbj_learnHours">
                        </div>
                    </div>
                    <br />
                    <button class="w3-button w3-blue-grey w3-round" type="submit">Register Subject</button>
                </form>
                </div>
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
</html>
