// On s'assure que tout l'espace-temps de la page est bien chargé avant d'agir
document.addEventListener("DOMContentLoaded", function() {
    
    // 1. On verrouille la cible principale
    const ecranPrincipal = document.getElementById('mobileApercu');

    // 2. On rassemble tous les liens qui englobent tes miniatures
    const liensMiniatures = document.querySelectorAll('.iconesExplorer');

    // 3. On organise l'action collective
    liensMiniatures.forEach(lien => {
        
        lien.addEventListener('click', function(evenement) {
            // VERROUILLAGE D'URGENCE : On bloque le rafraîchissement de la page !
            evenement.preventDefault();

            // On va chercher l'image enfant qui se trouve spécifiquement dans le lien cliqué
            const imageCliquee = this.querySelector('.miniaExplorer');

            // On copie la source de la petite image pour l'injecter dans l'écran principal
            if (imageCliquee) {
                ecranPrincipal.src = imageCliquee.src;
            }
        });
    });
});