<?php
require_once('connexion.php');
//print_r($_GET);
//exit;

$id = $_GET['id'] ?? null;


//echo $id;
//delete * FROM movie_db.category where id=$id;

if ($id == null) {
    return header('location: category_list.php');
}
$query = $db->query('delete from category where id=' . $id);


if ($query == false) {
    exit('Une erreur sest produitrveuillez eéessayez plus tard !');
}
if ($query->rowcount === 0) {
    exit('Enregistrement inconnu !!!');
}
return header('location:category_list.php');
