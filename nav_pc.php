    <nav id="navpc">
        <div id="zonenav">
            <div id="fondnav"></div>
            <a href="index.php" id="home">
                <img src="logos/nes.svg" alt="" id="logohome">
            </a>  
            <div id="zoneboutonsnav">
                <?php
                $req = $bdd->query("SELECT * FROM categories ORDER BY id ASC");
                while($don = $req->fetch())
                {
                    echo "<a href='fileExplorer.php?cat=".$don['id']."' class='bouton'>";
                        echo "<img src='images/".$don['image']."' class='img-fluid' />";
                        echo "<h3>".$don['name']."
                        </h3>";
                    echo "</a>";
                }
                $req->closeCursor();
            ?>
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
        <script src="javascript/horloge.js"></script>
    </nav>