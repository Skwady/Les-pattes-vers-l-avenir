document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggleFormButton');
    const form = document.getElementById('formAvis');

    toggleButton.addEventListener('click', () => {
        // Toggle the visibility of the form
        if (form.classList.contains('d-none')) {
            form.classList.remove('d-none');
        } else {
            form.classList.add('d-none');
        }
    });
});