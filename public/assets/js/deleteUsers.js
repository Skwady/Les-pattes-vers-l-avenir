document.addEventListener('DOMContentLoaded', function() {
    const deleteButtons = document.querySelectorAll('.delete-User');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.getAttribute('data-User-id');

            if (confirm('Êtes-vous sûr de vouloir supprimer cette utilisateur ?')) {
                fetch('/admin/deleteUser', {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({ idUser: userId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert('Utilisateur supprimé avec succès.');
                        location.reload(); // Recharge la page ou rafraîchit la liste des activités
                    } else {
                        alert(data.message || 'Erreur lors de la suppression.');
                    }
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    alert('Une erreur est survenue.');
                });
            }
        });
    });
});
