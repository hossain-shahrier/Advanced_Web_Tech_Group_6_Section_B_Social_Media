@extends('../navbar')

@section('navbar')
    <a href="/registration"> Registration</a>
@endsection

@section('title')
    :: Login ::
@endsection

@section('page_title')
    Login
@endsection

@section('main_content')
    <form method="post" enctype="multipart/form-data">
        <table>
            @csrf
            <tr>
                <td>Username :</td>
                <td><input class="form-control" type="text" name="username" value="{{ old('username') }}"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input class="form-control" type="password" name="password" value="{{ old('password') }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Login" value="Login" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    {{ session('msg') }}
@endsection
