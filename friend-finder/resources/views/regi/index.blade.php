@extends('../navbar')

@section('navbar')
    <a href="/"> Login</a>
@endsection

@section('title')
    :: Registration ::
@endsection

@section('page_title')
    Registration
@endsection

@section('main_content')
    <form method="post" enctype="multipart/form-data">
        <table>
            @csrf
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="{{ old('name') }}" placeholder="Only alphabet"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" value="{{ old('username') }}" placeholder="alphabet and Number">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{ old('email') }}" placeholder="email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="{{ old('password') }}"
                        placeholder="more than 6 character"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="cpassword" value="{{ old('cpassword') }}"
                        placeholder="more than 6 character"></td>
            </tr>
            <tr>
                <td>Phone No</td>
                <td><input type="text" name="phone" value="{{ old('phone') }}" placeholder="only number"></td>
            </tr>
            <tr>
                <td>Profile Picture</td>
                <td><input type="file" name="profile_pic" value="{{ old('profile_pic') }}"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="gender">
                        <option>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="type">
                        <option>Select User Type</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                        <option value="Business">Business</option>
                        <option value="Job">Job Recuiter</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="regi" value="Create"></td>
            </tr>
        </table>
    </form>
    {{ session('msg') }}
    <br>

    @foreach ($errors->all() as $err)
        {{ $err }} <br>
    @endforeach
@endsection
