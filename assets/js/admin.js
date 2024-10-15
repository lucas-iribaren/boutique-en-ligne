window.onload = function(){

document.getElementById('clickable-image').addEventListener('click', function () {
    document.getElementById('image-upload').click()
});

document.getElementById('image-upload').addEventListener('change', function (event) {
    const file = event.target.files[0]
    if (file) {
        const reader = new FileReader()
        reader.onload = function (e) {
            document.getElementById('clickable-image').src = e.target.result
        };
        reader.readAsDataURL(file)
    }
   })

   async function AddDb(){
    fetch('admin-sub-category', {
        method: 'POST', 
        headers: {
            'Content-Type': 'application/json', 
        },
        body: JSON.stringify(data) 
    })
    .then(response => response.json()) 
    .then(data => {
        console.log('Success:', data); 
    })
    .catch((error) => {
        console.error('Error:', error); 
    });
    }
}
