<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/app.css">
    <!--Google Webfont-->
    <link
        href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700'
        rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png" />
</head>

<body>
    <center>
        {{-- header --}}
        <div>
            <h2>@yield('page_title')</h2>
            <br>
        </div>

        {{-- nav bar --}}
        @yield('navbar')
        <br> <br> <br>


        {{-- main content --}}
        @yield('main_content')
        <br> <br> <br>

        {{-- footer --}}
        <div>
            copyright@2021
        </div>
    </center>

    {{-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script> --}}
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
    {{-- <script src="https://cdnjs.c10udf1are.com/ajax/1ibs/popper.js/1.14.6/umd/popper.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
        integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script> --}}
</body>

</html>
