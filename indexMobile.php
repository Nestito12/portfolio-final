<?php 
    require "config/connexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleMobile.css">
    <title>Document</title>
</head>
<body id="bodyMobile">
    <?php 
        include("navMobileAccueil.php");
    ?>
        <img src="logos/fond/fond.svg" id="logoFond" alt="">
    <div id="accueilMobile">
<?php
            $req = $bdd->query("SELECT * FROM categories ORDER BY id ASC");
            while($don = $req->fetch())
            {
                echo "<a href='mobileExplorer.php?cat=".$don['id']."' class='bouton'>";
                    echo "<img src='images/".$don['image']."' class='logoApp' />";
                    echo "<h3 class='nomApp'>".$don['name']."</h3>";
                echo "</a>";
            }
            $req->closeCursor();
        ?>
    </div>
</body>
<script>
    const limiteTaille = 1024; 
    if (window.innerWidth > limiteTaille) {
        window.location.replace("index.php");
    }
</script>
</html>