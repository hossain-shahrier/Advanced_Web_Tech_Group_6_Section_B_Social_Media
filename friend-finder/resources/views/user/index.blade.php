@extends('../navbar')
@section('navbar')
    <a href="/logout"> Logout</a>
@endsection
@section('title')
    :: Home page ::
@endsection

@section('page_title')
    -- Home page --
@endsection

@section('main_content')
    {{-- main content --}}
    <div>
        <h1>Welcome home, {{ $name }}</h1>
        <img src="{{ asset('upload/' . $profile_pic) }}" height="100px" width="100px" />
    </div>
@endsection
