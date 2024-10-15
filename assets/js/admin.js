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


    document.getElementById('btn-ajouter').addEventListener('click', async function() {
        AddImg()
        console.log("Upload Incoming")
    })

    async function AddImg() {
        const fileInput = document.getElementById('image-upload');
        const formData = new FormData();
        
        if (fileInput.files.length > 0) {
            formData.append('image', fileInput.files[0]); // Append the image file
        }
    
        try {
            const response = await fetch('process_image.php', {
                method: 'POST',
                body: formData,
            });
    
            const result = await response.text(); // Get the response as text
            console.log('Success:', result); // Log the result from PHP
        } catch (error) {
            console.error('Error:', error); // Log any errors
        }
    }
    
}
