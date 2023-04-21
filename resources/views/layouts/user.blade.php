<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Details Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/3b77119206.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav id="navBar" class="navbar-white">
        <a href="index.html">
            <img src="images/logo-red.png" class="logo">
        </a>
        <ul class="nav-links">
            <li><a href="home">Popular Places</a></li>
            <li><a href="#" class="active">Travel Outside</a></li>
            <li><a href="listing">Online Packages</a></li>
        </ul>
        <a href="#" class="register-btn">Register Now</a>
        <i class="fa-solid fa-bars" onclick="togglebtn()"> </i>
    </nav>
    @yield('content')
    <script>
        var navBar = document.getElementById("navBar");

        function togglebtn() {
            navBar.classList.toggle("hidemenu")
        }
    </script>
</body>

</html>
