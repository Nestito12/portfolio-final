<?php 
    require "config/connexion.php";
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
</body>
<script src="javascript/imageMobile.js"></script>
</html>