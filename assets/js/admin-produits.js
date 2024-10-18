document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('input[type="file"]').forEach(input => {
        input.addEventListener('change', function(e) {
            const file = e.target.files[0];
            const productId = this.id.split('-')[1];
            if (file) {
                console.log(`File selected for product ${productId}:`, file.name);
                // Ici, vous pouvez ajouter la logique pour envoyer le fichier au serveur
            }
        });
    });
});
