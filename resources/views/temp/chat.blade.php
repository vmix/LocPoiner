@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chatroom</h1>
        <chat-message></chat-message>
        <chat-log></chat-log>
        <chat-composer></chat-composer>
    </div>
@endsection