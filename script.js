// Validation basique du formulaire de contact
document.querySelector('.contact-form').addEventListener('submit', function(event) {
    const emailField = document.querySelector('input[name="email"]');
    const messageField = document.querySelector('textarea[name="message"]');
    
    if (!emailField.value || !messageField.value) {
        alert("Veuillez remplir tous les champs.");
        event.preventDefault();
    }
});
