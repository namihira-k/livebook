<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Live Share</title>

  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/vnd.microsoft.icon">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

</head>

<body>
  <div id="id-header"></div>

  <div class="container-fluid">
    <div id="id-event-list" class="mt-3"></div>
  </div>

  <div id="id-footer"></div>

  <script src="{{ asset('js/header.js') }}"></script>
  <script src="{{ asset('js/footer.js') }}"></script>

  <script src="{{ asset('js/event-list.js') }}"></script>
</body>

</html>