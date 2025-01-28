// Fonction pour redimensionner un textarea
function resizeTextarea(textarea) {
    textarea.style.height = 'auto'; // Réinitialise la hauteur pour recalculer
    textarea.style.height = textarea.scrollHeight + 'px'; // Ajuste à la hauteur du contenu
}

// Appliquer la fonction au chargement de la page pour tous les textarea
document.addEventListener('DOMContentLoaded', function() {
    const textareas = document.querySelectorAll('textarea');
    textareas.forEach(resizeTextarea); // Redimensionne chaque textarea prérempli
});

// Appliquer la fonction à chaque saisie utilisateur
document.addEventListener('input', function(e) {
    if (e.target.tagName === 'TEXTAREA') {
        resizeTextarea(e.target);
    }
});

