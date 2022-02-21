<?php
if (isset($_GET['id'])) {
    $position=$_GET['id'];
}
require_once('connexion.php');
$query = $db->query('select* from category where id=' . $position);
//$position=$_GET;
//print_r($position);
//exit;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="category_save.php" method="POST">
<div>
    <label >Name</label>
    <input type="text" name="nom" value="" placeholder="placer ici votre nom">
</div>
<div>
    <input type="submit" value="senden">
</div>

    </form>
    
</body>
</html>