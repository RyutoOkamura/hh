<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"content="width=device-width, initial-scale=1">
<meta name="description" content="検索結果でサイト名の下に表示される「サイトの説明文」">
<link rel="apple-touch-icon" sizes="180x180" href="アップルタッチ用のファビコン(相対パスOK）.png">
<link rel="icon" type="image/png" sizes="32x32" href="32サイズのファビコン画像(相対パスOK）.png">
<link rel="icon" type="image/png" sizes="16x16" href="16サイズのファビコン画像(相対パスOK）.png">
<link rel="manifest" href="PWA化のためのマニフェストファイル.webmanifest">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="msapplication-TileColor" content="Windowsピン留めのテーマカラーを設定→#ffffff">
<meta name="theme-color" content="theme-colorを設定→#ffffff">
<meta name="msapplication-TileImage" content="Windowsピン留め時の画像(絶対パス）.png" />
<meta property="og:description" content="GG Haunt">
<meta property="og:title" content="Good Grief Haunt">
<meta property="og:image" content="SNSでシェアされたときに表示する画像※かならず絶対パスを記載（相対パス不可）https://....../img/icons/logo.png">
<meta property="og:image:width" content="画像の幅px">
<meta property="og:image:height" content="画像の高さpx">
<meta property="og:type" content="urlがトップページの場合→website、トップページ以外の場合→article">
<meta property="og:url" content="https://........">
<title>Document</title>
<link rel="stylesheet"  href="../css/style.css">
<link rel="stylesheet" href="../css/reset.css">
<link href="{{ asset('css/popup.css') }}" rel="stylesheet">
<script src="{{ asset('js/popup.js') }}"></script>
<script src="{{ asset('js/jquery.js') }}"></script>
<script>
  $(function () {
      setTimeout(function () {
        $('.start p').fadeIn(1600);
      }, 500); //0.5秒後にロゴをフェードイン!
      setTimeout(function () {
        $('.start').fadeOut(2000);
      }, 3000); //3.0秒後にロゴ含め真っ白背景をフェードアウト！
    });
</script>
</head>

<body>

  <div class="popup" id="js-popup">
    <div class="popup-inner">
      <div class="close-btn" id="js-close-btn"><i class="fa fa-times"></i></div>
      <a href="#">
        <img src="{{ asset('img/artist.jpg') }}" alt="アーティスト写真">
        <img src="{{ asset('img/message.jpg') }}" alt="メッセージ">
      </a>
    </div>
    <div class="black-background" id="js-black-bg"></div>
  </div>

  <div class="container">
    <div class="logo-wrapper">
      <img class="penlogo" src="img/penlogo.png" alt="">
      <img class="so-ta" src="img/so-ta-top.png" alt="">
      <img class="logo" src="img/logo-cork.jpg" alt="GG-LOGO">
    </div>
    <h2 class="title__text">Candid Photography</h2>

    <section class="vintalight" id="vintalight">
      <script type="text/javascript">
        for (var i = 1; i <= 12; i++) {
          document.write(' <figure class="vintalight__container"><img class="pushpin" src="img/pushpin.png" alt=""><div class="vintalight__photo"><img class="vintalight__img" alt="BTS 00' + i + '" src="img/backphoto/' + i + '.jpg"></div><figcaption class="vintalight__caption"><h3 class="vintalight__text">BTS 00' + i + '</h3></figcaption></figure>');
        }
      </script>
      <script type="text/javascript">
        for (var i = 13; i <= 24; i++) {
          document.write(' <figure class="vintalight__container"><img class="pushpin" src="img/pushpin.png" alt=""><div class="vintalight__photo"><img class="vintalight__img" alt="BTS 00' + i + '" src="img/backphoto/' + i + '.jpg"></div><figcaption class="vintalight__caption"><h3 class="vintalight__text">BTS 00' + i + '</h3></figcaption></figure>');
        }
      </script>
      <script type="text/javascript">
        for (var i = 25; i <= 36; i++) {
          document.write(' <figure class="vintalight__container"><img class="pushpin" src="img/pushpin.png" alt=""><div class="vintalight__photo"><img class="vintalight__img" alt="BTS 00' + i + '" src="img/backphoto/' + i + '.jpg"></div><figcaption class="vintalight__caption"><h3 class="vintalight__text">BTS 00' + i + '</h3></figcaption></figure>');
        }
      </script>
      <script type="text/javascript">
        for (var i = 37; i <= 48; i++) {
          document.write(' <figure class="vintalight__container"><img class="pushpin" src="img/pushpin.png" alt=""><div class="vintalight__photo"><img class="vintalight__img" alt="BTS 00' + i + '" src="img/backphoto/' + i + '.jpg"></div><figcaption class="vintalight__caption"><h3 class="vintalight__text">BTS 00' + i + '</h3></figcaption></figure>');
        }
      </script>
      <script type="text/javascript">
        for (var i = 49; i <= 60; i++) {
          document.write(' <figure class="vintalight__container"><img class="pushpin" src="img/pushpin.png" alt=""><div class="vintalight__photo"><img class="vintalight__img" alt="BTS 00' + i + '" src="img/backphoto/' + i + '.jpg"></div><figcaption class="vintalight__caption"><h3 class="vintalight__text">BTS 00' + i + '</h3></figcaption></figure>');
        }
      </script>
      <script type="text/javascript">
        for (var i = 61; i <= 72; i++) {
          document.write(' <figure class="vintalight__container"><img class="pushpin" src="img/pushpin.png" alt=""><div class="vintalight__photo"><img class="vintalight__img" alt="BTS 00' + i + '" src="img/backphoto/' + i + '.jpg"></div><figcaption class="vintalight__caption"><h3 class="vintalight__text">BTS 00' + i + '</h3></figcaption></figure>');
        }
      </script>
      <script type="text/javascript">
        for (var i = 73; i <= 84; i++) {
          document.write(' <figure class="vintalight__container"><img class="pushpin" src="img/pushpin.png" alt=""><div class="vintalight__photo"><img class="vintalight__img" alt="BTS 00' + i + '" src="img/backphoto/' + i + '.jpg"></div><figcaption class="vintalight__caption"><h3 class="vintalight__text">BTS 00' + i + '</h3></figcaption></figure>');
        }
      </script>
      <script type="text/javascript">
        for (var i = 85; i <= 96; i++) {
          document.write(' <figure class="vintalight__container"><img class="pushpin" src="img/pushpin.png" alt=""><div class="vintalight__photo"><img class="vintalight__img" alt="BTS 00' + i + '" src="img/backphoto/' + i + '.jpg"></div><figcaption class="vintalight__caption"><h3 class="vintalight__text">BTS 00' + i + '</h3></figcaption></figure>');
        }
      </script>
      <script type="text/javascript">
        for (var i = 97; i <= 100; i++) {
          document.write(' <figure class="vintalight__container"><img class="pushpin" src="img/pushpin.png" alt=""><div class="vintalight__photo"><img class="vintalight__img" alt="BTS 00' + i + '" src="img/backphoto/' + i + '.jpg"></div><figcaption class="vintalight__caption"><h3 class="vintalight__text">BTS 00' + i + '</h3></figcaption></figure>');
        }
      </script>
    </section>

    <!-- <section class="vintalight" id="vintalight">

      <figure class="vintalight__container">
        <img class="pushpin" src="img/pushpin.png" alt="">
        <div class="vintalight__photo"><img class="vintalight__img" src="img/backphoto/1.jpg" alt="Title(Sample)"></div>
        <figcaption class="vintalight__caption">
          <h3 class="vintalight__text">Title(Sample)</h3>
        </figcaption>
      </figure>

    </section> -->

    <div class="footer">
      <div class="footer-inner">
        <figure class="footer-vintalight__container">
          <div class="under-sheet">
            <img class="pushpin" src="img/pushpin.png" alt="">
            <div class="card">
              <div class="photo"></div>
              <ul>
                <li class="photoby">All photos were taken by</li>
                <li><b class="mei">Mei Okabe</b></li>
              </ul>
              <div class="social-media-banner">
                <a href="https://twitter.com/chanmei_camera"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/chanmei_camera/"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </figure>
      </div>
    </div>

    <div class="copy-right">
      <p class="vintalight__text"><span>&copy;</span> 2022 Good Grief</p>
    </div>

  </div>
  <script src="../js/script.js"></script>

  <!-- アクセス時の動的要素 -->
  <div class="start">
    <div class="over-white">
      <p></p>
    </div>
  </div>
</body>

</html>