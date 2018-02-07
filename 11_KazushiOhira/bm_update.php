<?php
session_start();

include("functions.php");
//入力チェック(受信確認処理追加)
if(
  !isset($_POST["id"]) || $_POST["id"]=="" ||
  !isset($_POST["title"]) || $_POST["title"]=="" ||
  !isset($_POST["url"]) || $_POST["url"]=="" ||
  !isset($_POST["com"]) || $_POST["com"]==""
){
  exit('ParamError');
}

//1. POSTデータ取得
$id = $_POST["id"];
$title = $_POST["title"];
$url = $_POST["url"];
$com = $_POST["com"];

//2. DB接続します(エラー処理追加)
$pdo =  db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("update gs_bm_table set title=:title,url=:url,com=:com where id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':com', $com, PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  error_db_info($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: bm_select.php");
  exit;
}

?>
