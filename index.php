<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>
</head>
<body>
<div id="pc">
    <nav id="navpc">
        <div id="zonenav">
            <div id="fondnav"></div>
            <a href="" id="home">
                <img src="logos/nes.svg" alt="" id="logohome">
            </a>  
            <div id="zoneboutonsnav">

                <a class="bouton" id="boutonpixel">
                    <img src="logos/pixel.svg" alt="">

                </a>
                <a class="bouton" id="boutonvector">

                </a>
                <a class="bouton" id="boutonvideo">

                </a>
                <a class="bouton" id="boutonmep">

                </a>
                <a class="bouton" id="boutonfigma">

                </a>
                <a class="bouton" id="boutoncode">

                </a>
            </div>
        </div>
        <div id="infonavbox">
            <div id="infonav">
                <div id="infonavtop">
                    <!-- <img class="icone infonavtopitem" id="son" src="logos/icones/son.svg" alt="">
                    <img class="icone infonavtopitem" id="wifi" src="logos/icones/wifi.svg" alt=""> -->
                    <!-- <div id="liveheure" class="infonavtopitem"> -->
                        <span id="minute">41</span>
                        <span id="deuxpoints">:</span>
                        <span id="heure">09</span>
                    <!-- </div> -->
                    
                </div>
                <div id="infonavbot">
                    <span id="annee">00</span>
                    <span>/</span>
                    <span id="mois">00</span>
                    <span>/</span>
                    <span id="jour">00</span>
                    <!-- <script>
                        var date = new date();
                        console.log(date.getDate(),'/',date.getMonth(),'/', date.getYear());
                    </script> -->
                </div>
            </div>
        </div>
    </nav>
    <script src="javascript/horloge.js"></script>
</div>
<div id="mobile">
    <nav id="navmobile">
        <div id="navmhaut">
            <a href="" class="presmobile">
                <img src="logos/contact.svg" alt="">
                <p>Contact</p>
            </a>
            <a href="" class="presmobile">
                <img src="logos/cv.svg" alt="">
                <p>Télécharger CV</p>
            </a>
            <a href="" class="presmobile">
                <img src="logos/pres.svg" alt="">
                <p>Présentation</p>
            </a>
        </div>
        <div id="navmbas">
            
        </div>

    </nav>
</div>
</body>
</html>