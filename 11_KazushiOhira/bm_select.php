<?php
session_start();

include("functions.php");

// SSIDチェック
chkSsid();

//1.  DB接続します

$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  error_db_info($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="bm_update_view.php?id='.$result["id"].'">';
    $view .= $result["title"]."[".$result["time"]."]";
    $view .= '</a>';

    $view .= '　';

    $view .= '<a href="bm_delete.php?id='.$result["id"].'">';
    $view .= '[削除]';
    $view .= '</a>';
    $view .= '</p>';


  }
  var_dump($result["kanri_flg"]);
  $kanri_flg = $result["kanri_flg"];
    
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブックマーク表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="bm_entry.php">ブックマーク登録</a>
    </div>
  </nav>
</header>

<!-- Head[End] -->

<div>
  <a href="bm_entry.php">ブックマーク登録</a>
  |<a href="bm_select.php">ブックマーク表示</a>
  <?php
    if($_SESSION["kanri_flg"] == 1){?>
  |<a href="usr_entry.php">ユーザ登録</a>
  |<a href="usr_select.php">ユーザ表示</a>
  <?php } ?>

</div>

<!-- Main[Start] -->
<div>
  <div><?=$_SESSION["name"]?>さん、こんにちは</div>
    <div class="container jumbotron"><?=$view?></div>
  </div>
</div>

<!-- Main[End] -->

</body>
</html>
