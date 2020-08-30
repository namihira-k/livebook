<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Live Share</title>

  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/vnd.microsoft.icon">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
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
  
  <div class="container mt-3">
    <!-- <div id="id-ads" class="mt-3"></div> -->

    <div>
      <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-1908478661707708"
            data-ad-slot="5869471877"
            data-ad-format="auto"
            data-full-width-responsive="true">
      </ins>
    </div>
  </div>

  <div id="id-footer"></div>

  <script src="{{ mix('js/app.js') }}"></script>
  @yield('script')

  <!-- Google Ads -->
  <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>  

</body>

</html>