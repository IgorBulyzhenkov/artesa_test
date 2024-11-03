document.addEventListener("DOMContentLoaded", function() {

    const checkboxes = document.querySelectorAll('.category-checkbox');
    const actionButton = document.getElementById('action-button_tree');

    function updateButtonState() {
        const selectedIds = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.id)
            .join(',');

        const url = actionButton.href.split('categories-tree').slice(0, -1).join('');

        if (selectedIds.length > 0) {
            actionButton.classList.remove('hidden');
            actionButton.classList.add('active');
            actionButton.href = `${url}categories-tree/${selectedIds}`;
        } else {
            actionButton.classList.add('hidden');
            actionButton.classList.remove('active');
            actionButton.href = `${url}categories-tree/`;
        }
    }


    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateButtonState);
    });

    updateButtonState();
});
