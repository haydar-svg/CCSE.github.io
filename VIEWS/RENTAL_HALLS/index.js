function $(id) {
    return document.getElementById(id);
}

function seePictures() {
    $('seePictureWindow').style.display = "block";
    $('body').style.overflowY = "hidden";

}

function hiddePictures() {
    $('seePictureWindow').style.display = "none";
    $('body').style.overflowY = "scroll";
}

function openTimeWindow(event) {
    event.stopPropagation();
    $('reservationDateProcess').style.display = "block";
    $('nav').style.filter = "blur(2px)";
    $('landingPage').style.filter = "blur(2px)";
    $('servicesTitle').style.filter = "blur(2px)";
    $('services').style.filter = "blur(2px)";
    $('rentalHalls').style.filter = "blur(2px)";
    $('events').style.filter = "blur(2px)";
    $('referencesTitle').style.filter = "blur(2px)";
    $('eventsTitle').style.filter = "blur(2px)";
    $('references').style.filter = "blur(2px)";
    $('footer').style.filter = "blur(2px)";
    $('body').style.overflowY = "hidden";
}

function closeTimeWindow(event) {
    event.stopPropagation();
    $('reservationDateProcess').style.display = "none";
    $('landingPage').style.filter = "blur(0px)";
    $('servicesTitle').style.filter = "blur(0px)";
    $('services').style.filter = "blur(0px)";
    $('rentalHalls').style.filter = "blur(0px)";
    $('events').style.filter = "blur(0px)";
    $('referencesTitle').style.filter = "blur(0px)";
    $('eventsTitle').style.filter = "blur(0px)";
    $('references').style.filter = "blur(0px)";
    $('footer').style.filter = "blur(0px)";
    $('nav').removeAttribute('style');
    $('body').style.overflowY = "scroll";
}

function openReservationProcess(event) {
    event.stopPropagation();
    $('reservationDateProcess').style.display = "none";
    $('completeReservationProcessContainer').style.display = "block";
}

function closeReservationProcess(event) {
    event.stopPropagation();
    $('completeReservationProcessContainer').style.display = "none";
    $('landingPage').style.filter = "blur(0px)";
    $('servicesTitle').style.filter = "blur(0px)";
    $('services').style.filter = "blur(0px)";
    $('rentalHalls').style.filter = "blur(0px)";
    $('references').style.filter = "blur(0px)";
    $('referencesTitle').style.filter = "blur(0px)";
    $('eventsTitle').style.filter = "blur(0px)";
    $('events').style.filter = "blur(0px)";
    $('footer').style.filter = "blur(0px)";
    $('nav').removeAttribute('style');
    $('body').style.overflowY = "scroll";

}

function setDateStart(event) {
    $('startDateContainer').innerHTML = event.value;
}

function setDateEnd(event) {
    $('endDateContainer').innerHTML = event.value;
}

function equipementDetail() {
    $('rentalHalls').style.backgroundImage = "linear-gradient(#00000088, #00000088), url(./PUBLIC/IMAGES/rentalHalls/84a206.png)";
    $('rentalHalls').innerHTML = `
<div class="blockTitle">
    Location de salles
</div>
<div class="seePictures" onclick="seePictures()">
    <div class="pictureContainer" id="pictureContainer">
        <span>
            voir les images
        </span>
        <img src="./PUBLIC/IMAGES/rentalHalls/camera.svg" alt="picture" id="cameraIcon">
    </div>
</div>
<div class="elementContainer">
    <div class="serviceTitle">
        DES ÉQUIPEMENTS VARIÉS
        <p>
            Nous disposons de salles équipées et adaptées pour répondre à vos besoins, que vous soyez une entreprise, une association ou un particulier </p>
        <button class="takeDate" onclick="openTimeWindow(event)">
            réservation
        </button>
    </div>
    <div class="equipementDetails">
        <img src="./PUBLIC/IMAGES/rentalHalls/tools.svg" alt="Desc icon" class="dtailIcon">
        <p class="detailTitle">
            DES ÉQUIPEMENTS VARIÉS
        </p>
        <p class="detailElement">
            <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> matériels audiovisuel
        </p>
        <p class="detailElement">
            <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> vidéo projecteur
        </p>
        <p class="detailElement">
            <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> téléviseur
        </p>
        <p class="detailElement">
            <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> matériel informatique
        </p>
        <p class="detailElement">
            <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon">accès wifi haut débit
        </p>
        <p class="detailElement">
            <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> tableau
        </p>
        <p class="detailElement">
            <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> 5 à 50 personnes
        </p>
        <div class="explore" onclick="breakDetail()">
            <img src="./PUBLIC/IMAGES/rentalHalls/chevronSale.svg" alt="see more">
        </div>
    </div>
</div>
    `;
}

function breakDetail() {
    $('rentalHalls').style.backgroundImage = "linear-gradient(#00000088, #00000088), url(./PUBLIC/IMAGES/rentalHalls/pc.jpeg)";
    $('rentalHalls').innerHTML = `
    <div class="blockTitle">
        Location de salles
    </div>
    <div class="seePictures" onclick="seePictures()">
        <div class="pictureContainer" id="pictureContainer">
            <span>
                voir les images
            </span>
            <img src="./PUBLIC/IMAGES/rentalHalls/camera.svg" alt="picture" id="cameraIcon">
        </div>
    </div>
    <div class="elementContainer">
        <div class="serviceTitle">
            DIFFÉRENTES BOISSONS
            <p>
                Nous proposons également une formule pause-café pour
                permettre à vos participants de se détendre et de se restaurer
                entre les sessions de travail.
                Cette formule est adaptée à tous les goûts et répond à vos
                besoins en matière de nourriture et de boissons    
            </p>
            <button class="takeDate" onclick="openTimeWindow(event)">
                réservation
            </button>
        </div>
        <div class="equipementDetails">
            <img src="./PUBLIC/IMAGES/rentalHalls/coffee.svg" alt="Desc icon" class="dtailIcon">
            <p class="detailTitle">
                DIFFÉRENTES BOISSONS
            </p>
            <p class="detailElement">
                <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon">
                Boissons chaudes(Café,Thé,Chocolat chaud,Café au lait,etc.)
            </p>
            <p class="detailElement">
                <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> 
                Boissons Froides(Jus de fruits ( au choix ),Eau,soda,etc.)
            </p>
            <p class="detailElement">
                <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> 
                Petits pains (croissants, chocolatines, etc.)
            </p>
            <p class="detailElement">
                <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> 
                Viennoiseries (pains suisse, brioches, etc.)
            </p>
            <p class="detailElement">
                <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon">
                Gâteaux Marocains
            </p>
            <p class="detailElement">
                <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> 
                Des petits salés
            </p>
            <p class="detailElement">
                <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> 
                Biscuits (sablés, cookies, etc.)
            </p>
            <div class="explore" onclick="priceDetail()">
                <img src="./PUBLIC/IMAGES/rentalHalls/chevronSale.svg" alt="see more">
            </div>
        </div>
    </div>
    `;
}

function priceDetail() {
    $('rentalHalls').style.backgroundImage = "linear-gradient(#00000066, #00000066), url(./PUBLIC/IMAGES/rentalHalls/price.jpeg)";
    $('rentalHalls').innerHTML = `
<div class="blockTitle">
    Location de salles
</div>
<div class="seePictures" onclick="seePictures()">
    <div class="pictureContainer" id="pictureContainer">
        <span>
            voir les images
        </span>
        <img src="./PUBLIC/IMAGES/rentalHalls/camera.svg" alt="picture" id="cameraIcon">
    </div>
</div>
<div class="elementContainer">
    <div class="serviceTitle">
        DES TARIFS TRÈS ATTRACTIFS
        <p>
            Nous sommes également en mesure de personnaliser notre
            formule en fonction de vos besoins et de votre budget.
        </p>
        <button class="takeDate" onclick="openTimeWindow(event)">
            réservation
        </button>
    </div>
    <div class="equipementDetails">
        <img src="./PUBLIC/IMAGES/rentalHalls/goodPrice.svg" alt="Desc icon" class="dtailIcon">
        <p class="detailTitle">
            DES TARIFS TRÈS ATTRACTIFS
        </p>
        <p class="detailElement">
            <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon">
            devis instantané sur simple appel
        </p>
        <p class="detailElement">
            <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> 
            reservation à la journée, la semaine ou au mois
        </p>
        <p class="detailElement">
            <img src="./PUBLIC/IMAGES/rentalHalls/check.svg" alt="check icon"> 
            tarifs dégressifs en fonction de la durée de location
        </p>
        <div class="explore" onclick="equipementDetail()">
            <img src="./PUBLIC/IMAGES/rentalHalls/chevronSale.svg" alt="see more">
        </div>
    </div>
</div>
    `;
}