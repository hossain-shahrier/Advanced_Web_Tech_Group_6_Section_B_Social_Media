<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Edit</title>
    <style>
        header {
            height: 7.5rem;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1);
            margin-bottom: 5px;
        }

        .wrap {
            position: relative;
            height: 100%;
            max-width: 1450px;
            margin: 0 auto;

        }

        .logo {
            width: 30px;
            position: relative;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        img {
            display: block;
            width: 100%;
        }

        html {
            font-size: 10px;
        }

        html,
        body,
        #root,
        .App {
            height: 100%;
        }

        *,
        ::before,
        ::after {
            padding: 0;
            margin: 0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            font-weight: 400;
            line-height: 1;
        }

        a {
            text-decoration: none;
        }

        a,
        a:hover {
            -webkit-transition: all .4s ease-in-out;
            -moz-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .main {
            width: 100%;
            height: calc(100% - 6.5rem);
            max-width: 1450px;
            padding: 0 10px;
            margin: 0 auto;
        }

        .title {
            float: right;
            position: relative;
            top: 30%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .hero {
            background-color: #4E3A7C;
            height: 35px;
            color: whitesmoke;
        }

        .hero a {
            float: right;
            color: whitesmoke;
            position: relative;
            top: 18%;
            margin-right: 40px;
        }

        .hero a:hover {
            color: #211835;
        }

        .sidebar {
            position: absolute;
            width: 15%;
            height: 100%;
            background: #312450;
            align-items: center;
            display: flex;
            -moz-box-shadow: 0px 10px 5px 4px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0px 10px 5px 4px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 10px 5px 6px rgba(0, 0, 0, 0.1);
        }

        .sidebar a {
            color: whitesmoke;
            margin: 50px;
            display: flex;
            justify-content: space-evenly;
        }

        .sidebar a:hover {
            color: #211835;
        }



        .container {
            margin-top: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        th,
        td {
            padding: 35px;
        }



        input {
            border: 2px solid #763A7C;
            border-radius: 10px;
            padding: 10px;
        }

        .submit {
            color: whitesmoke;
            border-radius: 50px;
            border-style: none;
            background-color: #763A7C;
        }

        .submit:hover {
            background-color: #5B2E5F;
        }

        .error {
            padding-bottom: 2px;
            margin-left: 100px;
        }
    </style>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <header class="header">
        <div class="wrap">
            <div class="logo">
                Logo
            </div>
            <div class="title">
                Welcome back, {{session('username')}}
            </div>
        </div>
    </header>
    <div class="hero">
        <a href="/logout">Logout</a>
    </div>
    <aside class="sidebar">
        <nav class="nav">
            <ul>
                <li><a href="/admin/home">Users</a></li>
                <li><a href="/admin/businesses">Businesses</a></li>
                <li><a href="/admin/communities">Communities</a></li>
                <li><a href="/admin/privacy">Privacy policy</a></li>
            </ul>
        </nav>
    </aside>
    <section class="content">

        <div class="container">

            <form method="post">
                @csrf
                <table>

                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="{{$user['username']}}"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="{{$user['password']}}"></td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input type="name" name="name" value="{{$user['name']}}"></td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td><input type="text" name="type" value="{{$user['type']}}"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input class="submit" type="submit" name="update" value="Update"></td>

                    </tr>

                </table>
                {{session('msg')}}

                @foreach ($errors->all() as $err)
                <div class="error">{{$err}} </div> <br>
                @endforeach
            </form>

        </div>

    </section>
</body>

</html>