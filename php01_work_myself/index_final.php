<?php
$openFile = fopen('./data/data.txt','r');

function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>回答内容</th>
        </tr>
        <?php while($str = fgets($openFile)){
            ?>
            <tr>
                <td><?=h($str)?></td>
            </tr>
            <?php
            }
            ?>
    </table>
    <a href="index.php">記入に戻る</a>
</body>
</html>

<?php
fclose($openFile);
?>