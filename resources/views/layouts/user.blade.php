<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Details Page</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/house.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/3b77119206.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
</head>

<body>
    <header id="navBar" class="navbar-white">
        <div class="nav">
            <a href="#">
                <img src="images/logo-red.png" class="logo">
            </a>
            <a><img src="{{ url('images/host.png') }}" id="img-logo" onclick="show('popup1')"></a>
        </div>
    </header>
    <div id="popup1">
        <ul class="mt-3">
            <li class="name">
                <a><img src="{{ url('images/host.png') }}" id="img-logo1"></a>
                <p class="button1"> {{ ucfirst(strtolower(Auth::user()->name)) }}</p>
            </li>
            <li class="mt-4">
                <i class='bx bxl-gmail'></i><a class="button"> {{ Auth::user()->email }}</a>
            </li>
            <li class="mt-4">
                <i class='bx bx-building-house'></i><a href="/createhouse" class="button ">Properties<i
                        class="button__icon fas fa-chevron-right  button"></i></a>
            </li>
            <li class="mt-4">
                <i class='bx bxs-bookmarks'></i><a href="/bookinglist" class="button mt-4">Booking <i
                        class="button__icon fas fa-chevron-right  button"></i></a>
            </li>
            <li class="mt-4">
                <i class="bx bx-log-out"></i><a href="/" class="button">Log Out<i
                        class="button__icon fas fa-chevron-right  button"></i></a>
            </li>
            <hr style="border-top:1px solid rgb(131, 126, 126);">
            <li>
                <p onclick="hide('popup1')" class="button2">close</p>
            </li>
        </ul>
    </div>
    @yield('content')
</body>

</html>
