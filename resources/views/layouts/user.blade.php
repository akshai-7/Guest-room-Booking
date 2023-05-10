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
    `
</head>

<body>
    <nav id="navBar" class="navbar-white">
        <a href="#">
            <img src="images/logo-red.png" class="logo">
        </a>
        {{-- <a href="/" class="register-btn">Log Out</a> --}}
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Open Modal</button> --}}
        <button type="button" id="show-button">Show Content</button>
        <button id="popup-button">Open Popup</button>


        <div id="content" style="display:none;">
            <p>Content that will be shown when the button is clicked.</p>
        </div>
    </nav>
    @yield('content')
    <script>
        $(document).ready(function() {
            $("#show-button").click(function() {
                $("#content").show();
            });
        });


        $(document).ready(function() {
            $("#popup-button").click(function() {
                window.open("popup.html", "Popup", "width=500,height=500");
            });
        });
    </script>
</body>


</html>
