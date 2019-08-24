<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Live Share</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@liveshare_jp" />
  <meta name="twitter:image" content="https://www.namimono.com/liveshare/img/app_logo.jpg" />
  <meta name="twitter:title" content="乃木坂46 真夏の全国ツアー2019 ＜東京＞明治神宮野球場" />
  <meta name="twitter:description" content="準備や参加した体験を共有しよう！" />

</head>

<body>
  <div id="id-header"></div>

  <div class="container-fluid">
    <div id="id-event-info" class="mt-3"></div>
    <div id="id-event-comment-section" class="mt-3"></div>
  </div>

  <div id="id-footer"></div>

  <script src="{{ asset('js/header.js') }}"></script>
  <script src="{{ asset('js/footer.js') }}"></script>

  <script src="{{ asset('js/event-info.js') }}"></script>
  <script src="{{ asset('js/event-comment-section.js') }}"></script>
  <script src="{{ asset('js/event-comment-form.js') }}"></script>
  <script src="{{ asset('js/event-comment-list.js') }}"></script>
  <script src="{{ asset('js/event-comment.js') }}"></script>

</body>

</html>