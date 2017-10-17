<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">﻿
    <title>Chatroom</title>
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
<h1>Chatroom</h1>
<div id="app">
    <example></example>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>