<?php
require_once('connexion.php');
$request=$db->query('select*from category');
$categories=$request->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <?php foreach($categories as $key => $value): ?>
<tr>
    <td> <?php  echo  $value?></td>
</tr>
        <?php  endforeach;?>
        </table>
</body>
</html>