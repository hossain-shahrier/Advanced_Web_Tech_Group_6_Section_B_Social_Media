@extends('../navbar')
@section('title')
    :: Chat Box ::
@endsection

@section('main_content')
    <div class="app">
        <header>
            <h1>Messenger</h1>
            <input type="text" name="username" id="username" value="{{ $username }}" placeholder="Enter a username">
        </header>
        <div id="messages"></div>
        <form id="message_form">
            <input type="text" name="message" id="message_input" placeholder="write your message">
            <button type="submit" id="message_send">Send</button>
        </form>
    </div>
    <script src="./js/app.js"></script>
@endsection
