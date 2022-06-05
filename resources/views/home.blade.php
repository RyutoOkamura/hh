<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/popup.css') }}" rel="stylesheet">
        <script src="{{ asset('js/popup.js') }}"></script>

    </head>
    <body class="antialiased">
        <div class="popup" id="js-popup">
          <div class="popup-inner">
            <div class="close-btn" id="js-close-btn"><i class="fas fa-times"></i></div>
            <a href="#"><img src="{{ asset('img/logo_black.png') }}" alt="ポップアップ画像"></a>
          </div>
          <div class="black-background" id="js-black-bg"></div>
        </div>
    </body>
</html>
