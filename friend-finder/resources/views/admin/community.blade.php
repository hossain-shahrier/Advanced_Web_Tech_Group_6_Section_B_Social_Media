<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
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
            position: fixed;
            width: 15%;
            height: 100vh;
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


        /* .content {
            width: 100%;
            float: left;
        } */

        .container {

            margin-top: 50px;
            margin-left: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        th,
        td {
            padding: 20px;
        }

        td a {
            background-color: #763A7C;
            padding: 5px 15px;
            border-radius: 50px;
            color: whitesmoke;
            cursor: pointer;
        }

        td a:hover {
            background-color: #4C2650;
        }

        #search_input {
            padding: 10px;
            border: 2px solid #4C2650;
            border-radius: 20px;
            width: 50%;
        }

        .search {
            margin-top: 40px;
            display: flex;
            align-items: center;
            justify-content: center
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
    <div></div>
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

            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $community)

                <tr>
                    <td class="user">{{$community->id}}</td>
                    <td class="user">{{$community->name}}</td>
                    <td class="user">{{$community->status}}</td>
                    <td><a href="/admin/communities/action/{{$community->id}}">Action</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
</body>

</html>