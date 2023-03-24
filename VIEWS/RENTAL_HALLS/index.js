function $(id) {
    return document.getElementById(id);
}

function seePictures(element) {
    element.style.animationName = 'showPictures';
    $('cameraIcon').setAttribute('src', '../../PUBLIC/IMAGES/close.svg')
    element.setAttribute('onclick', 'hidePictures(this)')
    $('pictureContainer').classList.add('closeDesign');
    $('pictureContainer').firstElementChild.innerHTML = '';
}

function hidePictures(element) {
    element.style.animationName = '';
    $('cameraIcon').setAttribute('src', '../../PUBLIC/IMAGES/camera.svg')
    element.setAttribute('onclick', 'seePictures(this)')
    $('pictureContainer').classList.remove('closeDesign');
    $('pictureContainer').firstElementChild.innerHTML = 'see pictures';

}

function openTimeWindow() {
    $('reservation').style.display = "block";
    $('rentalHalls').style.filter = "blur(2px)";
}

function closeTimeWindow() {
    $('reservation').style.display = "none";
    $('rentalHalls').style.filter = "blur(0px)";
}

function setDateStart(event) {
    $('startDateContainer').innerHTML = event.value;
}

function setDateEnd(event) {
    $('endDateContainer').innerHTML = event.value;
}