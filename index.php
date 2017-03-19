<?php
for( $i = 0 ; $i <= 10; $i++){
  echo $i . '</br>';
}
?>
<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset="utf8" />
  <title>atom plugin test</title>
</head>
<body>
  <p>jqueryの練習</p>
  </p>
<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  <script>
  //$(document).ready(function(){
  $(function(){
    //セレクタ:処理対象となるDOM要素を指定するための記法
    //メソッド：処理
    //メソッドチェーン
    $('p').css('color','red').hide('slow');
  });
  </script>
</body>
</html>
