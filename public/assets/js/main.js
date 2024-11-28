// Sélectionner tous les boutons ayant la classe 'toggle-btn'
let toggleButtons = document.querySelectorAll('.toggle-btn');

// Parcourir chaque bouton et ajouter un événement 'click'
toggleButtons.forEach((button) => {
    button.addEventListener('click', () => {
        // Sélectionner l'élément précédent du bouton (la réponse)
        let answer = button.previousElementSibling;
        
        // Si la réponse est cachée ou n'a pas de style défini, on l'affiche
        if (answer.style.display === 'none' || !answer.style.display) {
            answer.style.display = 'block';  // Afficher la réponse
            button.textContent = 'Cacher la réponse';  // Changer le texte du bouton
        } else {
            // Sinon, on cache la réponse
            answer.style.display = 'none';  // Cacher la réponse
            button.textContent = 'Afficher la réponse';  // Changer le texte du bouton
        }
    });
});
