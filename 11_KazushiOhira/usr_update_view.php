<?php
session_start();

include("functions.php");

// SSIDチェック
chkSsid();

//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
    $id = $_GET["id"];
    echo $id;

//1.  DB接続します
$pdo = db_con();
  
  //２．データ登録SQL作成
  $stmt = $pdo->prepare("SELECT * FROM gs_user_table where id=:id");
  $stmt->bindValue(':id',$id, PDO::PARAM_INT);
  $status = $stmt->execute();
  
  //３．データ表示
  $view="";
  if($status==false){
    //execute（SQL実行時にエラーがある場合）
    error_db_info($stmt);
  }else{
    //Selectデータの数だけ自動でループしてくれる
        $row = $stmt->fetch();
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
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
<form method="post" action="usr_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザデータ更新</legend>
     <label>ユーザ名：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>ログインID：<input type="text" name="lid" value="<?=$row["lid"]?>"></label><br>
     <label>ログインPW：<input type="text" name="lpw" value="<?=$row["lpw"]?>"></label><br>
     <label>管理フラグ：<input type="text" name="kanri_flg" size="1" value="<?=$row["kanri_flg"]?>"></label><br>
     <label>使用フラグ：<input type="text" name="life_flg" size="1" value="<?=$row["life_flg"]?>"></label><br>
     <input type="submit" value="送信">
     <input hidden name="id" value="<?=$id?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>

