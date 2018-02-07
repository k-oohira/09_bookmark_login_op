<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ブックマーク登録</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <a class="navbar-brand" href="select.php">ブックマーク登録</a></div>
  </nav>
</header>
<!-- Head[End] -->

<div class="container">
    <h1>ブックマーク登録</h1>
    <form action="insert.php" method="post">
        <ul>
            <li class="form-item">
                <label for="title">タイトル</label>
                <input type="text" name="title" id="title" class="uk-input">
            </li>
            <li class="form-item">
                <label for="detail">本文</label>
                <textarea name="detail" id="detail" cols="30" rows="10" class="uk-textarea"></textarea>
            </li>
        </ul>
        <input type="submit" value="送信">
    </form>
</div>
</body>
</html>