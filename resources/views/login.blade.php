<html>

<head>
  <meta charset="UTF-8">
  <title>ログイン</title>
  <link rel="stylesheet"  href="../css/style.css">
  <link rel="stylesheet" href="../css/reset.css">
  <link href="{{ asset('css/popup.css') }}" rel="stylesheet">
  <script src="{{ asset('js/popup.js') }}"></script>
  <script src="{{ asset('js/jquery.js') }}"></script>
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

  <h1>ログインページ</h1>
  <h2>ログイン</h2>
  <form method="POST" action="">
    @csrf
    <label>ID入力してください</label></br>
    <input type="text" name="id" value=""></br>
    <label>パスワード入力してください</label></br>
    <input type="text" name="pass" value=""></br></br>
    <input type="submit" value="ログイン">
    @csrf
  </form>
  <script src="../js/script.js"></script>

</body>

</html>