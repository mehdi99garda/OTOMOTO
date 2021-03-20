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
        }
        .bg-trans
        {
            background-color: rgba(22, 22, 22, 0.5);
        }
        .hover:hover{background-color: orangered;}
        
    </style>
</head>
<body>
    <?php include('views/navbar.php'); ?>
        <div class="row">
            <div class="col-sm-6">
                <div class="container bg-trans w-75 mx-auto text-light mt-5 mb-5 pb-3 pt-3">
                <center><h2>CONTACTEZ-NOUS</h2></center>
                    <form>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Sujet</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                        <option>Service Client</option>
                        <option>Webmaster</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Adresse e-mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Document joint (optionnel)</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment pouvons-nous aider ?"></textarea>
                    </div>
                    <input type="button" class="btn btn-outline-danger w-100" value="ENVOYER">
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <footer class="bg-trans w-75 mx-auto text-light mt-5 mb-5">
                    <div class="googlemaps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3395.713400754718!2d-8.040510784391824!3d31.669059881320724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdafec0d02abc7af%3A0xffdd25edac8d5832!2sOTOMOTO+Showroom!5e0!3m2!1sfr!2sma!4v1544803796545" id="geolocalisation" frameborder="0" width="100%" height="450"  allowfullscreen></iframe>
                    </div>
                </footer>
            </div>
        </div>
        
        

<?php include("views/footer.php"); ?>