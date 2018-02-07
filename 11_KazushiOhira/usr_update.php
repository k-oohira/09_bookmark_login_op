<?php
include("functions.php");
//入力チェック(受信確認処理追加)
// if(
//   !isset($_POST["id"]) || $_POST["id"]=="" ||
//   !isset($_POST["name"]) || $_POST["name"]=="" ||
//   !isset($_POST["lid"]) || $_POST["lid"]=="" ||
//   !isset($_POST["lpw"]) || $_POST["lpw"]=="" ||
//   !isset($_POST["kanri_flg"]) || $_POST["kanri_flg"]=="" ||
//   !isset($_POST["life_flg"]) || $_POST["life_flg"]=="" 
// ){
//   exit('ParamError');
// }

//1. POSTデータ取得
$id = $_POST["id"];
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];

//2. DB接続します(エラー処理追加)
$pdo = db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("update gs_user_table set name=:name,lid=:lid,lpw=:lpw,kanri_flg=:kanri_flg,life_flg=:life_flg where id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  error_db_info($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: usr_select.php");
  exit;
}

?>
