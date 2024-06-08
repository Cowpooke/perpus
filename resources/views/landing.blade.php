{{--<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustal</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

              <a class="navbar-brand" href="{{route('dashboard')}}">PERPUSTAL</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
              <a class="navbar-brand" href="/login">Login</a>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
      </nav>
    </header>
    <div class="container">
               
    </div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>--}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustal</title>
    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        body {
            
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            background: rgb(226,250,255);
            background: linear-gradient(90deg, rgba(226,250,255,1) 0%, rgba(253,247,254,1) 43%, rgba(255,254,245,1) 76%);
            height: 100vh;
            margin: 0;
        }

        .nav-item-right {
            margin-left: auto;
            display: flex;
        }

        .nav-item-right .nav-link {
            margin-left: 10px;
        }

        .centered-container {
            display: flex;
            height: 80vh;
            justify-content: flex-start;
            align-items: center;
            text-align: left;
            padding-left: 10%;
        }

        .nav-tabs {
            background: rgb(178,241,255);
            background: linear-gradient(90deg, rgba(178,241,255,1) 0%, rgba(164,233,249,1) 42%, rgba(185,235,245,1) 76%);
        }
        
    </style>
</head>

<body>
    <header>
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Perpustal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Feature</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Contact</a>
                </li>
                <div class="nav-item-right">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Sign up</a>
                    </li>
                </div>
            </ul>
        </div>
    </header>
    <div class="centered-container">
        <h1>
            <b>
            Takut Kehabisan buku?<br>
            Booking dari mana saja<br>
            dengan PerpusTal
            </b>
            
        </h1>
    </div>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>