<?php

$objpdo = new PDO('mysql:host=localhost;dbname=otomoto','root','');
$pdostat = $objpdo->prepare('SELECT * FROM voyages ');
$isok=$pdostat->execute();

$voyages=$pdostat->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>OTOMOTO Marrakech</title>
    <style>
        .logo
        {
            width: 120px;
            height: 80px;
            top: 0;
            margin-left: 50px;
            margin-top: 5px;
        }
        body{
            background-color: black;
        }
        .bg-trans
        {
            background-color: rgba(22, 22, 22, 0.5);
        }
        .hover:hover{background-color: orangered;}
        .bg-black{background-color: black;}
        #img{
            width: 100%;
            height: 300px;
        }
        .container{
            width: 80%;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
    
<?php include('views/navbar.php'); ?>

        <?php foreach ($voyages as $voyage) {?>
            <div class="container mt-5 mb-5">
                <h2 class="text-light"><?= $voyage['titre'] ?></h2>
                <h4 class="text-danger"><?= $voyage['description'] ?></h4>
                <img src="<?= $voyage['image'] ?>" id="img">
            </div>
        <?php } ?>

<?php include("views/footer.php"); ?>