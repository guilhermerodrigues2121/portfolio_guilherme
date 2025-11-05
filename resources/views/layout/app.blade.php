<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="UTF-8">

    <!-- Page Title -->
    <title>Guilherme Rodrigues</title>

    <!-- Meta Tags -->
    <meta name="description" content="Portfolio pessoal do guilherme rodrigues">
    <meta name="keywords" content="guilherme_rodrigues, resume, portfolio, personal page, cv, template, one page, responsive, html5, css3, creative, clean,jovem aprendiz,">
    <meta name="author" content="guilherme_rodrigues">

    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Favicon & Icons Start -->
    <link rel="icon" href="{{ asset("assets/img/favicon/favicon.ico") }}" sizes="any">
    <link rel="icon" href="{{ asset("assets/img/favicon/icon.svg") }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset("assets/img/favicon/apple-touch-icon.png") }}">
    <link rel="manifest" href="{{ asset("assets/img/favicon/manifest.webmanifest") }}">
    <!-- Template Favicon & Icons End -->

    <!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="Guilherme Rodrigues">
    <meta property="og:description" content="Guilherme Rodrigues">
    <meta property="og:url" content="Guilherme Rodrigues">

    <!-- Facebook Metadata End -->

    <!-- Template Styles Start -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/loaders/loader.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/plugins.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/main.css") }}">
    <!-- Template Styles End -->

    <!-- Custom Browser Color Start -->
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#FAF7F6">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#161616">
    <meta name="msapplication-navbutton-color" content="#161616">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Custom Browser Color End -->
     
  </head>

  <body>
    @include("nav.nav")
    @include("nav.header")
    @yield("content")
<!-- To Top Button Start -->
    <a href="#0" id="to-top" class="btn btn-to-top slide-up anim-no-delay">
      <i class="ph ph-arrow-up"></i>
    </a>
    <!-- To Top Button End -->

    <!-- Load Scripts Start -->
    <script src="{{ asset("assets/js/libs.min.js") }}"></script>
    <script src="{{ asset("assets/js/app.js") }}"></script>
    <!-- Load Scripts End -->

    
    
    
  </body>

</html>