@extends('layout')

@section('navbar')
    {{-- nav bar --}}
    <nav>
        <!-- Header
                                                                                            ================================================= -->
        <header id="header">
            <nav class="navbar navbar-default navbar-fixed-top menu">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/home"><img src="images/logo.png" alt="logo" /></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right main-menu">
                            <li class="dropdown"><a href="/home">Home</a></li>
                            <li class="dropdown"><a href="/message">Message</a> </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false">Profile <span><img
                                            src="images/down-arrow.png" alt="" /></span></a>
                                <ul class="dropdown-menu login">
                                    <li><a href="/profile">Profile</a></li>
                                    <li><a href="/about">About</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="/contact">Contact</a></li>
                            <li class="dropdown"><a href="/logout">Logout</a></li>
                        </ul>
                        <form class="navbar-form navbar-right hidden-sm">
                            <div class="form-group">
                                <i class="icon ion-android-search"></i>
                                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
                            </div>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
        </header>
        <!--Header End-->
        <br>
    </nav>
@endsection
