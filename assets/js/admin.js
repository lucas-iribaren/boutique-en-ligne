window.onload = function(){
    console.log('test')

    document.getElementById('clickable-image').addEventListener('click', function () {
        document.getElementById('image-upload').click();
    });

    document.getElementById('image-upload').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('clickable-image').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });



   async function AddDb(){
    const formData = new FormData();

    fetch('admin-sub-category.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.text())
    .then(data => {
        console.log('Response from server:', data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
   }
   
console.log('test')
}
