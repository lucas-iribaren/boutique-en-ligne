console.log("Le fichier JavaScript est chargé");

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded');
    const table = document.querySelector('.product-table');
    
    if (!table) {
        console.error('Table not found');
        return;
    }

    console.log('Table found:', table);

    table.addEventListener('click', function(e) {
        console.log('Table clicked', e.target);
        const target = e.target;
        const row = target.closest('tr');

        if (target.classList.contains('btn-edit')) {
            console.log('Edit button clicked');
            enableEditing(row);
        } else if (target.classList.contains('btn-save')) {
            console.log('Save button clicked');
            saveChanges(row);
        } else if (target.classList.contains('btn-cancel')) {
            console.log('Cancel button clicked');
            cancelEditing(row);
        }
    });

    function enableEditing(row) {
        row.querySelectorAll('.editable').forEach(cell => {
            const value = cell.textContent.trim();
            cell.innerHTML = `<input type="text" value="${value}">`;
        });
        row.querySelector('.btn-edit').style.display = 'none';
        row.querySelector('.btn-save').style.display = 'inline-block';
        row.querySelector('.btn-cancel').style.display = 'inline-block';
    }

    function cancelEditing(row) {
        row.querySelectorAll('.editable').forEach(cell => {
            const input = cell.querySelector('input');
            cell.textContent = input.defaultValue;
        });
        row.querySelector('.btn-edit').style.display = 'inline-block';
        row.querySelector('.btn-save').style.display = 'none';
        row.querySelector('.btn-cancel').style.display = 'none';
    }

    function saveChanges(row) {
        const productId = row.dataset.productId;
        const updatedData = {};

        row.querySelectorAll('.editable').forEach(cell => {
            const field = cell.dataset.field;
            const input = cell.querySelector('input');
            updatedData[field] = input.value;
            cell.textContent = input.value;
        }); 
    }
});
