<?php 
    require "config/connexion.php";
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
<div class="pc">
    <?php
        include("nav_pc.php");
    ?>
        <input type="checkbox" id="boutonContact" class="checkContact">
        <input type="checkbox" id="boutonPres" class="checkPres">
    <div id="zone-boutons-menu-pc">
        <a href="portfolio/Portfolio-Nesta-De-Wulf.pdf" download="portfolio/Portfolio-Nesta-De-Wulf.pdf" class="bouton-menu-pc">
            <img src="logos/cv.svg" alt="" id="cv-pc">
            <p class="txt-pc">Télécharger CV</p>
        </a>
        <label for="boutonPres" class="bouton-menu-pc">
            <img src="logos/pres.svg" alt="" id="cv-pc">
            <p class="txt-pc">Présentation</p>
        </label>
        <label for="boutonContact" class="bouton-menu-pc">
            <img src="logos/contact.svg" alt="" id="cv-pc">
            <p class="txt-pc">Contact</p>
        </label>
        </div>
        <div id="contact" class="pageContact">
            <ul id="contactConteneur">
                <h2 class="titre" id="contactTitre">Contact</h2>
                <li class="liContact">
                    <label for="name" class="txtContact">Nom :</label>
                    <input type="text" name="user_name" class="inputContact" id="name" placeholder="Votre nom...">
                </li>
                <li class="liContact">
                    <label for="name" class="txtContact">Email :</label>
                    <input type="email" name="user_mail" class="inputContact" id="mail" placeholder="Votre email...">
                </li>
                <li class="liContact" id="liMessage">
                    <label for="msg" class="txtContact">Message :</label>
                    <textarea name="user_message" class="inputContact" id="msg" placeholder="Votre message..."></textarea></textarea>
                </li>
                <div id="zoneBoutonContact">
                    <button type="submit" id="boutonContact">Envoyer</button>
                </div>
            </ul>
        </div>
        <div id="pres" class="pagePres">
            <div id="zonePres">
                <h2 class="titre">Qui suis-je ?</h2>
                <p class="texte">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat beatae eius debitis quaerat nobis omnis voluptatem delectus molestiae ipsa aspernatur. Omnis culpa veniam itaque tempora pariatur similique quas nesciunt iste.</p>
                <h4>Mes Compétences :</h4>
                <div class="zoneSkills">
                <?php 
                $req = $bdd->query("SELECT * FROM skills ORDER BY id ASC");
                while($don = $req->fetch())
                {
                    echo "<div class='skillContour'>";
                        echo "<img src='images/".$don['image']."' class='imgSkill' />";
                        echo "<h5 class='skills'>".$don['nom']."
                        </h5>";
                    echo "</div>";
                }
                $req->closeCursor();
                ?>
                </div>
            </div>
        </div>
</div>
<script>
    const limiteTaille = 1024; 

    // On vérifie la largeur de la fenêtre
    if (window.innerWidth < limiteTaille) {
        // Allons-y ! Redirection vers l'autre fichier PHP
        window.location.replace("indexMobile.php");
    }
</script>
</body>
</html>