// On s'assure que tout l'espace-temps de la page est bien chargé avant d'agir
document.addEventListener("DOMContentLoaded", function() {
    
    // 1. On verrouille les cibles principales (les éléments affichés en grand)
    const ecranPrincipal = document.getElementById('imgApercu');
    // On utilise querySelector pour cibler spécifiquement les textes dans la zone d'affichage
    const titrePrincipal = document.querySelector('.zoneAffichageExplorer .nomImg');
    const descPrincipale = document.querySelector('.zoneAffichageExplorer .descImg');

    // 2. On rassemble tous les liens qui englobent tes miniatures
    const liensMiniatures = document.querySelectorAll('.boutonMinia');

    // 3. On organise l'action collective et solidaire
    liensMiniatures.forEach(lien => {
        
        lien.addEventListener('click', function(evenement) {
            // VERROUILLAGE D'URGENCE : On bloque le rafraîchissement de la page !
            evenement.preventDefault();

            // On va chercher les éléments enfants (image, titre, description) dans le lien cliqué
            const imageCliquee = this.querySelector('.miniaExplorer');
            const titreClique = this.querySelector('.nomImg');
            const descCliquee = this.querySelector('.descImg');

            // On transfère l'information spatio-temporelle vers l'écran principal
            if (imageCliquee) {
                ecranPrincipal.src = imageCliquee.src;
            }
            if (titreClique && titrePrincipal) {
                // innerHTML permet de conserver les éventuelles balises HTML dans ta description
                titrePrincipal.innerHTML = titreClique.innerHTML;
            }
            if (descCliquee && descPrincipale) {
                descPrincipale.innerHTML = descCliquee.innerHTML;
            }
        });
    });
});