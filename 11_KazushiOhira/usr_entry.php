<?php
session_start();

include("functions.php");

// SSIDチェック
chkSsid();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="usr_select.php">データ一覧へ</a></div>
  </nav>
</header>
<!-- Head[End] -->
<div><?=$_SESSION["name"]?>さん、こんにちは</div>

<!-- Main[Start] -->
<form method="post" action="usr_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザ新規登録</legend>
     <label>ユーザ名：<input type="text" name="name"></label><br>
     <label>ログインID：<input type="text" name="lid"></label><br>
     <label>ログインPW：<input type="text" name="lpw"></label><br>
     <label>管理フラグ：<input type="text" name="lpw" size="1"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
