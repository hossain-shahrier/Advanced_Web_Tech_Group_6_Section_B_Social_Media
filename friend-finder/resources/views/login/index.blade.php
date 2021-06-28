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
                <td>Username</td>
                <td><input type="text" name="username" value="{{ old('username') }}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="{{ old('password') }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Login" value="Login"></td>
            </tr>
        </table>
    </form>
    {{ session('msg') }}
@endsection
