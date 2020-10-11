<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$actor = $_POST['actor'];

$str = '名前：' . $name .' '. 'Email：' . $mail .' '. '好きな女優：' . $actor;

$file =fopen('./data/data.txt','a');
fwrite($file,$str."\n");
fclose($file);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>フォームの記入が完了しました</h1>
    <a href="index.php">戻る</a>
    <a href="index_final.php">結果を見る</a>
</body>
</html>