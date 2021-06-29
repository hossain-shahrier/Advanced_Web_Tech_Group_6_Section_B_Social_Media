@extends('../navbar')
@section('title')
    :: Edit ::
@endsection

{{-- @section('page_title')
    -- Home page --
@endsection --}}

@section('main_content')
    {{-- main content --}}
    <div class="container">

        <!-- Timeline -->
        <div class="timeline">
            <div class="timeline-cover">

                <!--Timeline Menu for Large Screens-->
                <div class="timeline-nav-bar hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="profile-info">
                                <img src="{{ asset('upload/' . $user->profile_pic) }}" alt=""
                                    class="img-responsive profile-photo" />
                                <h3>{{ $user->name }}</h3>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <ul class="list-inline profile-menu">
                                <li><a href="/profile">Timeline</a></li>
                                <li><a href="/about" class="active">About</a></li>
                            </ul>
                            <ul class="follow-me list-inline">
                                <li>{{ $followers }} followers </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Timeline Menu for Large Screens End-->
            </div>
            <div id="page-contents">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7">

                        <!-- About -->
                        <div class="about-profile">
                            <form method="post" enctype="multipart/form-data">
                                <table class="table table-success table-striped">
                                    @csrf
                                    <img src="{{ asset('upload/' . $user->profile_pic) }}" height="200px" width="200px" />
                                    <td><input class="form-control" type="file" name="profile_pic"
                                            value="{{ asset('upload/' . $user->profile_pic) }}"></td>
                                    <tr>
                                        <td class="p-3 mb-2 bg-primary text-white">Name : </td>
                                        <td class="p-3 mb-2 bg-primary text-white"><input class="form-control" type="text"
                                                name="name" value="{{ $user->name }}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 mb-2 bg-primary text-white">Username : </td>
                                        <td class="p-3 mb-2 bg-primary text-white"><input class="form-control" type="text"
                                                name="username" value="{{ $user->username }}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 mb-2 bg-primary text-white">Password : </td>
                                        <td class="p-3 mb-2 bg-primary text-white"><input class="form-control"
                                                type="password" name="password" value="{{ $user->password }}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 mb-2 bg-primary text-white">Confirm Password : </td>
                                        <td class="p-3 mb-2 bg-primary text-white"><input class="form-control"
                                                type="password" name="cpassword" value="{{ $user->password }}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 mb-2 bg-primary text-white">Email : </td>
                                        <td class="p-3 mb-2 bg-primary text-white"><input class="form-control" type="text"
                                                name="email" value="{{ $user->email }}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 mb-2 bg-primary text-white">Phone : </td>
                                        <td class="p-3 mb-2 bg-primary text-white"><input class="form-control" type="text"
                                                name="phone" value="{{ $user->phone }}"></td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 mb-2 bg-primary text-white">Gender</td>
                                        <td class="p-3 mb-2 bg-primary text-white">
                                            <select name="gender" class="form-control">
                                                <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="p-3 mb-2 bg-primary text-white">Type</td>
                                        <td class="p-3 mb-2 bg-primary text-white">
                                            <select name="type" class="form-control">
                                                <option value="{{ $user->type }}">{{ $user->type }}</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input type="submit" name="Update" value="Update" class="btn btn-primary"></td>
                                    </tr>
                                </table>
                            </form>
                            {{ session('msg') }}
                            <br>

                            @foreach ($errors->all() as $err)
                                {{ $err }} <br>
                            @endforeach
                            <a href="/about" class="w-100 p-3" style="background-color: #eee;">Back to About</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
