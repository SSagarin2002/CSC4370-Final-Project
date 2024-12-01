// Add client-side form validation and interactivity here

// Validate forms before submission
document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('form');

    forms.forEach(form => {
        form.addEventListener('submit', function (e) {
            let isValid = true;
            const inputs = form.querySelectorAll('input, textarea');

            inputs.forEach(input => {
                if (input.hasAttribute('required') && !input.value.trim()) {
                    isValid = false;
                    input.classList.add('error');
                    alert(`Please fill out the ${input.getAttribute('name')} field.`);
                } else {
                    input.classList.remove('error');
                }
            });

            if (!isValid) {
                e.preventDefault(); // Prevent form submission
            }
        });
    });
});

// Optional: Add a confirmation prompt before deleting content
const deleteLinks = document.querySelectorAll('a[href*="delete.php"]');

deleteLinks.forEach(link => {
    link.addEventListener('click', function (e) {
        if (!confirm("Are you sure you want to delete this item?")) {
            e.preventDefault(); // Prevent navigation to delete action
        }
    });
});