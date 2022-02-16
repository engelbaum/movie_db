<?php
require_once('connexion.php');
//print_r($_POST);
//print_r($db);
if (!isset($_POST['nom']) or empty($_POST['nom'])) {
    echo 'le nom est obligé';
    exit;
}
$name=$_POST['nom'];
$db->query ('insert into category (name) values ("'.$name.'")');
