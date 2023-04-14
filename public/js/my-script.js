function previewImgNewsflash () {
    const imgNewsflash = document.querySelector('#imgNewsflash');
    const imgNewsLabel = document.querySelector('.custom-file-label');
    const imgNewsPreview = document.querySelector('.img-preview');

    imgNewsLabel.textContent = imgNewsflash.files[0].name;

    const fileImgNews = new FileReader();
    fileImgNews.readAsDataURL(imgNewsflash.files[0]);

    fileImgNews.onload = function (e) {
        imgNewsPreview.src = e.target.result;
    }
}

function previewImgPodcast () {
    const imgPodcast = document.querySelector('#imgPodcast');
    const imgPodcastLabel = document.querySelector('.custom-file-label');
    const imgPodcastPreview = document.querySelector('.img-preview');

    imgPodcastLabel.textContent = imgPodcast.files[0].name;

    const fileImgPodcast = new FileReader();
    fileImgPodcast.readAsDataURL(imgPodcast.files[0]);

    fileImgPodcast.onload = function (e) {
        imgPodcastPreview.src = e.target.result;
    }
}

function previewImgUser () {
    const imgUser = document.querySelector('#imgUser');
    const imgUserLabel = document.querySelector('.custom-file-label');
    const imgUserPreview = document.querySelector('.img-preview');

    imgUserLabel.textContent = imgUser.files[0].name;

    const fileImgUser = new FileReader();
    fileImgUser.readAsDataURL(imgUser.files[0]);

    fileImgUser.onload = function (e) {
        imgUserPreview.src = e.target.result;
    }
}