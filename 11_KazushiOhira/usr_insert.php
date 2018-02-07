<?php
include("functions.php");
//入力チェック(受信確認処理追加)
// if(
//   !isset($_POST["name"]) || $_POST["name"]=="" ||
//   !isset($_POST["lid"]) || $_POST["lid"]=="" ||
//   !isset($_POST["lpw"]) || $_POST["lpw"]=="" ||
//   !isset($_POST["kanri_flg"]) || $_POST["kanri_flg"]=="" 
//   ){
//   exit('ParamError');
// }

//1. POSTデータ取得
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = '$_POST["kanri_flg"]';

//2. DB接続します(エラー処理追加)
$pdo = db_con();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_user_table(id, name, lid, lpw, kanri_flg,life_flg)VALUES(NULL, :a1, :a2, :a3, :a4, 0)");
$stmt->bindValue(':a1', $name,PDO::PARAM_STR);
$stmt->bindValue(':a2', $lid,PDO::PARAM_STR);
$stmt->bindValue(':a3', $lpw,PDO::PARAM_STR);
$stmt->bindValue(':a4', $kanri_flg ,PDO::PARAM_INT);

$status = $stmt->execute();

if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  error_db_info($stmt);
}else{
  //５．index.phpへリダイレクト
  header("Location: usr_entry.php");
  exit;
}
?>
