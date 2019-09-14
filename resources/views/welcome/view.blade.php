@extends('layout.app')

@section('title', 'Live Share')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <span class="display-4">Live Share</span>
        <p class="lead">ライブ参加の準備をしよう！状況を共有しよう！</p>
    </div>
</div>

<div class="container">
    <div id="id-event-list" class="mt-3"></div>
</div>

@endsection
