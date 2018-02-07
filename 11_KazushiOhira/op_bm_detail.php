<?php
include("functions.php");
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
    $id = $_GET["id"];
    echo $id;

//1.  DB接続します
$pdo = db_con();
  
  //２．データ登録SQL作成
  $stmt = $pdo->prepare("SELECT * FROM gs_bm_table where id=:id");
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
    <div class="navbar-header"><a class="navbar-brand" href="op_bm_select.php">データ一覧へ</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="bm_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマークデータ詳細</legend>
     <label>書籍名：<?=$row["title"]?></label><br>
     <label>URL：<?=$row["url"]?></label><br>
     <label><?=$row["com"]?></label><br>
     <input hidden name="id" value="<?=$id?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>

