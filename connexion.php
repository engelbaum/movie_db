<?php
$user = 'root';
$pass = '';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=movie_db', $user, $pass);
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
