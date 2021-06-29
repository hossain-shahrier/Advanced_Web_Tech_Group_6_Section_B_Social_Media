@extends('../navbar')
@section('title')
    :: About ::
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
                            <table class="table table-success table-striped">
                                <img src="{{ asset('upload/' . $user->profile_pic) }}" height="200px" width="200px" />
                                <tr>
                                    <td class="p-3 mb-2 bg-primary text-white">Name : </td>
                                    <td class="p-3 mb-2 bg-primary text-white">{{ $user->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 mb-2 bg-primary text-white">Username : </td>
                                    <td class="p-3 mb-2 bg-primary text-white">{{ $user->username }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 mb-2 bg-primary text-white">Email : </td>
                                    <td class="p-3 mb-2 bg-primary text-white">{{ $user->email }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 mb-2 bg-primary text-white">Phone : </td>
                                    <td class="p-3 mb-2 bg-primary text-white">{{ $user->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 mb-2 bg-primary text-white">Gender : </td>
                                    <td class="p-3 mb-2 bg-primary text-white">{{ $user->gender }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 mb-2 bg-primary text-white">Type : </td>
                                    <td class="p-3 mb-2 bg-primary text-white">{{ $user->type }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 mb-2 bg-primary text-white">Status : </td>
                                    <td class="p-3 mb-2 bg-primary text-white">{{ $user->status }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 mb-2 bg-primary text-white">Varification : </td>
                                    <td class="p-3 mb-2 bg-primary text-white">{{ $user->varification }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 mb-2 bg-primary text-white">Job Status</td> : </td>
                                    <td class="p-3 mb-2 bg-primary text-white">{{ $user->job_status }}</td>
                                </tr>
                            </table>
                            <a href="/edit" class="w-100 p-3" style="background-color: #eee;">Edit Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
