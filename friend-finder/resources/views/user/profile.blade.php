@extends('../navbar')
@section('title')
    :: Profile ::
@endsection

@section('main_content')
    {{-- main content --}}
    <div class="container">

        <!-- Timeline ===== -->
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
                                <li><a href="/profile" class="active">Timeline</a></li>
                                <li><a href="/about">About</a></li>
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

                        <!-- Post Create Box -->
                        <div class="create-post">
                            <form method="post" enctype="multipart/form-data">
                                <table>
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <img src="{{ asset('upload/' . $user->profile_pic) }}" alt=""
                                                    class="profile-photo-md" />
                                                <textarea name="post" id="exampleTextarea" cols="30" rows="1"
                                                    class="form-control" placeholder="Write what you wish"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="tools">
                                                <input type="submit" name="Post" value="Post" class="btn btn-primary" />
                                            </div>
                                        </div>
                                    </div>
                                </table>
                            </form>
                        </div><!-- Post Create Box End-->

                        <div class="post-date hidden-xs hidden-sm">
                            <h5>Reccomendations</h5>
                            @foreach ($rand as $r)
                                <div class="col-md-3">
                                    <div class="profile-info">
                                        <img src="{{ asset('upload/' . $r->profile_pic) }}" alt=""
                                            class="img-responsive profile-photo" />
                                        <h3>{{ $r->name }}</h3>
                                        <button class="btn btn-primary">Send Request</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="post-date hidden-xs hidden-sm">
                            <h5>.</h5>
                            <p class="text-grey">.</p>
                        </div>
                        @foreach ($post as $p)
                            <div class="post-content">
                                <div class="post-container">
                                    <img src="{{ asset('upload/' . $user->profile_pic) }}" alt="user"
                                        class="profile-photo-md pull-left" />
                                    <div class="post-detail">
                                        <div class="user-info">
                                            <h5>{{ $user->name }}<span class="following">{{ $followers }}
                                                    followers</span></h5>
                                        </div>
                                        <div class="reaction">
                                            <a class="btn text-green"><i class="icon ion-thumbsup"></i>
                                                {{ $p->react }}</a>
                                            <a class="btn text-red"><i class="fa fa-comment"></i> {{ $p->comment }}</a>
                                            <a class="btn text-red"><i class="fa fa-share"></i> {{ $p->share }}</a>
                                        </div>
                                        <div class="line-divider"></div>
                                        <div class="post-text">
                                            <p>{{ $p->post }}<i class="em em-anguished"></i> <i
                                                    class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                        </div>
                                        <div class="line-divider"></div>
                                        <div class="post-comment">
                                            <img src="{{ asset('upload/' . $user->profile_pic) }}" alt=""
                                                class="profile-photo-sm" />
                                            <input type="text" class="form-control" placeholder="Post a comment">
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        <!-- Post Content start -->
                        {{-- <div class="post-content">
                            <img src="images/post-images/12.jpg" alt="post-image" class="img-responsive post-image" />
                            <div class="post-container">
                                <img src="images/users/user-1.jpg" alt="user" class="profile-photo-md pull-left" />
                                <div class="post-detail">
                                    <div class="user-info">
                                        <h5><a href="timeline.html" class="profile-link">Sarah Cruiz</a> <span
                                                class="following">following</span></h5>
                                    </div>
                                    <div class="reaction">
                                        <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                    </div>
                                    <div class="line-divider"></div>
                                    <div class="post-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut
                                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                            exercitation ullamco laboris
                                            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                            in voluptate velit
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt
                                            in culpa qui officia deserunt mollit anim id est laborum. <i
                                                class="em em-anguished"></i> <i class="em em-anguished"></i> <i
                                                class="em em-anguished"></i></p>
                                    </div>
                                    <div class="line-divider"></div>
                                    <div class="post-comment">
                                        <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                        <p><a href="timeline.html" class="profile-link">Diana </a><i
                                                class="em em-laughing"></i> Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                            labore et dolore
                                            magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                    </div>
                                    <div class="post-comment">
                                        <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                        <p><a href="timeline.html" class="profile-link">John</a> Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad
                                            minim veniam, quis nostrud </p>
                                    </div>
                                    <div class="post-comment">
                                        <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                        <input type="text" class="form-control" placeholder="Post a comment">
                                    </div>
                                </div>
                            </div> --}}
                        <!-- Post Content end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
