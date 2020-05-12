<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Live Share</title>

  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/vnd.microsoft.icon">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@liveshare_jp" />
  <meta name="twitter:image" content="https://liveshare.namimono.com/img/app_logo.jpg" />
  <meta name="twitter:title" content="@yield('title')" />
  <meta name="twitter:description" content="参加への準備や当日状況を共有しよう" />

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-33863076-3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-33863076-3');
  </script>

  <!-- Google Ads -->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>

<body>
  <div id="id-header"></div>

  @yield('content')
  
  <div class="container">
    <div id="id-ads" class="mt-3"></div>
  </div>

  <div id="id-footer"></div>

  <script src="{{ asset('js/test.js') }}"></script>

  <script src="{{ asset('js/clock.js') }}"></script>

  <script src="{{ asset('js/header.js') }}"></script>
  <script src="{{ asset('js/footer.js') }}"></script>
  <script src="{{ asset('js/ads.js') }}"></script>
  <script src="{{ asset('js/share-form.js') }}"></script>

  <script src="{{ asset('js/ranking-event.js') }}"></script>

  <script src="{{ asset('js/event-request.js') }}"></script>

  <script src="{{ asset('js/comment-list.js') }}"></script>

  <script src="{{ asset('js/event-info.js') }}"></script>
  <script src="{{ asset('js/event-comment-section.js') }}"></script>
  <script src="{{ asset('js/event-comment-form.js') }}"></script>
  <script src="{{ asset('js/event-comment-list.js') }}"></script>
  <script src="{{ asset('js/event-comment.js') }}"></script>
  <script src="{{ asset('js/event-comment-rating.js') }}"></script>

  @yield('script')

  <!-- Google Ads -->
  <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>

</body>

</html>