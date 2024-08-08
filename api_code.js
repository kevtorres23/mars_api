const apiKey = 'DEMO_KEY';

function getMarsImages() {
    const sol = document.getElementById('sol').value;
    const url = `https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=${sol}&api_key=${apiKey}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            const imagesDiv = document.getElementById('images');
            imagesDiv.innerHTML = '';
            data.photos.forEach(photo => {
                const imageContainer = document.createElement('div');
                imageContainer.className = 'image-container';
                const img = document.createElement('img');
                img.src = photo.img_src;
                imageContainer.appendChild(img);
                imagesDiv.appendChild(imageContainer);
            });
        })
        .catch(error => console.error('Error:', error));
}