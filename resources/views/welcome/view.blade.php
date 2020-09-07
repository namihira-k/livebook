@extends('layout.app')

@section('title', 'Live Share')

@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <span class="display-4"><strong>Live Share</strong></span>
    <p class="lead">ライブの状況や感想を共有しよう！</p>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h5><i class="fa fa-music mr-1"></i>近々開催するライブ</h5>
      <div id="id-event-list" class="mt-3"></div>
    </div>
    <div class="col-md-4">
      <h6><i class="fa fa-star mr-1"></i>ランキング（コメント数）</h6>
      <div id="id-ranking-event" class="my-3"></div>
      <h6><i class="fa fa-comment mr-1"></i>投稿コメント</h6>
      <div id="id-comment-list" class="mt-3"></div>
    </div>
  </div>
</div>
@endsection
