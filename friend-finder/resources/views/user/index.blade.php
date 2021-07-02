@extends('../navbar')
@section('title')
    :: Home page ::
@endsection

{{-- @section('page_title')
    -- Home page --
@endsection --}}

@section('main_content')
    {{-- main content --}}
    <div>
        <h1 style="color:black;">Welcome {{ $user->name }}</h1>
        <img src="{{ asset('upload/' . $user->profile_pic) }}" height="100px" width="100px" />
        <h2><a href="/exportdata">Export your data</a></h2>
    </div>
@endsection
