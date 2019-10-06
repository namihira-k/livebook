@extends('layout.app')

@section('title', 'Live Share')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <span class="display-4"><strong>Live Share</strong></span>
        <p class="lead">ライブ参加の準備をしよう！状況を共有しよう！</p>
    </div>
</div>

<div class="container">
    <h5>近々開催するライブ</h5>
    <div id="id-event-list" class="mt-3"></div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/event-list.js') }}"></script>
@endsection