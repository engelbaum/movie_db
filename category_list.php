<?php
require_once('connexion.php');
$request = $db->query('select*from category');
$categories = $request->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>

<body>


    <table class="table table-dark">
        <tr>
            <th> Id </th>
            <th> Nom </th>
            <th> Double_Action </th>
            
        </tr>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td> <?php echo $category['id'];  ?></td>
                <td> <?php echo $category['Name'];  ?></td>

                <td>
                    <a href="category_remove.php?id=<?= $category['id'] ?>" class="btn btn-danger">supprimer</a>
                    <a href="category.php?id=<?= $category['id'] ?>" class="btn btn-primary">modifier</a>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>