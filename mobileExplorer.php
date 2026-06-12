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
    <link rel="stylesheet" href="styleMobile.css">
    <title>Portfolio</title>
</head>
<body>
    <?php
        include("navMobileDeux.php");
    ?>
    <div id="fondExplorer">
<div class="demiZone" id="zoneAffichage">
            <?php   
                // On rend l'affichage principal dynamique !
                $req = $bdd->prepare("SELECT * FROM works WHERE category = ? ORDER BY id ASC LIMIT 1");
                $req->execute([$id]);
                while($don = $req->fetch())
                {
                    // L'ID mobileApercu est conservé pour que ton JS mobile s'y retrouve
                    echo "<img src='images/".$don['cover']."' id='mobileApercu' />";
                }
                $req->closeCursor();
            ?>
        </div>
        <div class="demiZone" id="zoneIcones">
<div id="zoneIconesCentrage">
                <?php
                    $req = $bdd->prepare("SELECT * FROM works WHERE category = ? ORDER BY id ASC");
                    $req->execute([$id]);
                    while($don = $req->fetch())
                    {
                        echo "<a href='#' class='iconesExplorer'>";
                            echo "<img src='images/".$don['cover']."' class='miniaExplorer' />";
                        echo "</a>";
                    }
                    $req->closeCursor();
                ?>
            </div>
        </div>
    </div>
</body>
<script src="javascript/imageMobile.js"></script>
</html>