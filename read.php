<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>連絡掲示板</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body style="width: 880px;height: 400px;">

<?php
$data = file_get_contents("data/data.txt");
$data = explode("\n", $data);

for ($i = 0; $i < count($data) - 1; $i++) {
    $entry = explode(",", $data[$i]);
?>
    <div class="data-block" style="background-color: #fbfadd;border: 3px solid #FFFDCC;
    width: 200px;text-align: center;line-height: 7px; margin: 10px;padding: left 10px;">
        <p class="output-data">作業日: <?php echo $entry[0]; ?></p>
        <p class="output-data">作業先: <?php echo $entry[1]; ?></p>
        <p class="output-data">入退出: <?php echo $entry[2]; ?></p>
    </div>
<?php
}
?>

    <ul>
        <li><a class="button" href="input.php">登録画面に戻る</a></li>
    </ul>
    
</body>
</html>
