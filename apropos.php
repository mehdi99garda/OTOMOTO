<!DOCTYPE html>
<html lang="en">
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
            font-family: 'Open Sans', sans-serif;
            font-size: 15px;
        }
        .bg-trans
        {
            background-color: rgba(22, 22, 22, 0.5);
        }
        .hover:hover{background-color: orangered;}
        #fr{float: right; margin-top: 20px; margin-bottom: 30px;}
        
        .generale2{
            background-image: url('views/pics/bgabout.jpg');
            background-repeat: no-repeat;
            max-width: 1170px;
            background-repeat: no-repeat !important;
            background-size: 65% auto !important;
            padding: 1.30rem;
            text-align: justify;
            margin-top: 50px;
        }
        .generale{height: 500px;}
        
        .container{margin-left: 100px;}
        .mt{
            margin-top: 50px;
            margin-left: 20px;
            padding-top: 20px;
            padding-left: 20px;
            padding-bottom: 50px;
        }
        .w-70{width: 70%;}
    </style>
</head>
<body>
       
    <?php include('views/navbar.php'); ?>
    <div class="generale mx-auto">
        <div class="generale2 text-light container mx-auto">
            <div class="mx-auto mt">
                <h1>À PROPOS D'<span style="color: orangered;">OTOMOTO</span></h1>
                <div class="w-70 mx-auto">
                    <p>Otomoto c’est une équipe de passionnés et d'experts de la moto (Scooter, Cross, GT, Custom, Off-road, Sport). Nous veillons au quotidien à vous offrir l'équipement le plus adapté à votre moto, à votre besoin et à votre morphologie.</p>
                    <p>Tous nos produits répondent aux exigences extrêmes de sécurité et de qualité (normes CE) à des prix défiant toute concurrence.</p>
                    <p>Venez découvrir nos voyages premium avec Otomoto Adventure: Motos bien équipées Assistance technique et mécanique. Assurances, Hébergement et Restauration haut de gamme....</p>
                </div>
            </div>
            <img src="views/pics/apropos.png" id="fr">
        </div>
    </div>

<?php include("views/footer.php"); ?>