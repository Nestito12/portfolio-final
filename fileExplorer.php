<?php 
    if(isset($_GET['cat']) && is_numeric($_GET['cat']))
    {
        $id = htmlspecialchars($_GET['cat']);
    }else{
        header("LOCATION:404.php");
        exit();
    }
    require "config/connexion.php";

    $cat = $bdd->prepare("SELECT * FROM categories WHERE id=?");
    $cat->execute([$id]);
    $donCat = $cat->fetch();
    if(!$donCat)
    {
        header("LOCATION:404.php");
        exit();
    }    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="theme-color" content=" #1E90FF">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>
<body>
    <?php
        include("nav_pc.php");
    ?>
    <div class="pc">
        <div id="fondExplorer">
            <div id="centrageExplorer">
                <div class="zoneFichiersExplorer">  
                    <!-- <a href="" class="boutonMinia">
                        <img src="images/Capture d’écran 2026-04-02 à 10.59.55.png" alt="" class="miniaExplorer">
                    </a> -->
                    <?php   
                        $req = $bdd->prepare("SELECT * FROM works WHERE category = ? ORDER BY id ASC");
                        $req->execute([$id]);
                        while($don = $req->fetch())
                        {
                            echo "<a href='fileExplorer.php' class='boutonMinia'>";
                                echo "<img src='images/".$don['cover']."' class='miniaExplorer' />";
                                echo"<h2 class='nomImg invis'>".$don['name']."
                                </h2>";
                                echo"<p class='descImg invis'>".$don['description']."
                                </p>";
                            echo "</a>";
                        }
                        $req->closeCursor();
                    ?>
                </div>
                <div class="zoneAffichageExplorer">
                    <?php   
                        $req = $bdd->prepare("SELECT * FROM works WHERE category = ? ORDER BY id ASC LIMIT 1");
                        $req->execute([$id]);
                        while($don = $req->fetch())
                        {
                            echo "<img src='images/".$don['cover']."' id='imgApercu' />";
                            echo "<h2 class='nomImg'>".$don['name']."</h2>";
                            echo "<p class='descImg'>".$don['description']."</p>";
                        }
                        $req->closeCursor();
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="javascript/imagePc.js"></script>
</html>