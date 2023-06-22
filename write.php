<?php
$date = $_POST["date"];
$place = $_POST["place"];
$select = $_POST["select"];

// 1行にまとめる
$entry = $date . "," . $place . "," . $select . "\n";

// ファイルに書き込み
file_put_contents("data/data.txt", $entry, FILE_APPEND);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="center">
        <h1>作業予定の登録完了</h1>

        <ul>
            <li><a class="button" href="input.php">登録画面に戻る</a></li>
            <li><a class="button" href="read.php">確認する</a></li>
        </ul>
    </div>
</body>

</html>