@extends('layout.app')

@section('title', 'イベント検索')

@section('content')
<div class="container">
  <div id="id-event-search" class="mt-3"></div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/event-search.js') }}"></script>
@endsection