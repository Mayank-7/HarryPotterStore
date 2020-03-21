<?php 
require 'includes/common.php';
if (isset($_SESSION['email'])) { header('location: product.php'); }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Harry Potter Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <div id="banner_image">
            <div class="inner-banner-image">
                <center>
                    <div id="banner_content">
                        <h1>Welcome to Harry Potter Store.</h1>
                        <p>Did you grow up attending classes of Potions, Defence Against The Dark Arts, Charms while also playing a seeker for your house in Quidditch?</p>
                        <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </center>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <a href="product.php#Tshirt" class="thumbnail">
                        <img src="img/t3.jpg" alt="Tshirt"/>
                        <div class="caption">
                            <h3>TEES</h3> 
                            <p>Be a proud alumni of Hogwarts school of Witchcraft and Wizardry with this official Harry Potter T-shirt, available online exclusively at The Harry Potter Store. Flaunt your house Gryffindor, Slytherin, Hufflepuff, or Ravenclaw pride on your sleeve!</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="product.php#Bagpacks" class="thumbnail">
                        <img src="img/bag7.jpg" alt="Bagpacks"/>
                        <div class="caption">
                            <h3>Bagpacks</h3> 
                            <p>These backpacks are specially shielded by the same protective spells (Protego Maxima, Fianto Duri, Repello Inimicum) cast by Professor Flitwick, Molly Weasley, and Horace Slughorn before the Battle of Hogwarts.</p>
                        </div>                        
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="product.php#Mugs" class="thumbnail">
                        <img src="img/mug1.jpg" alt="Mugs"/>
                        <div class="caption">
                            <h3>Mugs</h3> 
                            <p>"You might belong in Gryffindor,
Where dwell the brave at heart,
Their daring, nerve and chivalry,
Set Gryffindors apart." 
If you think you deserve to be sorted into Gryffindor by the Sorting Hat, it's time to buy this mug and join Hogwarts.</p>
                        </div>                        
                    </a>                   
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>