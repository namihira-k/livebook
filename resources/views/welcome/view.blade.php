@extends('layout.app')

@section('title', 'Live Share')

@section('content')

<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Live Share</h1>
        <p>ライブ参加の準備をしよう！状況を共有しよう！</p>
    </div>
</div>

<div class="container">
    <div id="id-event-list" class="mt-3"></div>
</div>

@endsection
