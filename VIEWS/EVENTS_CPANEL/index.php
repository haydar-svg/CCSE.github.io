<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="ccse">
    <meta name="description" content=" LE CABINET CCSE EST UN CABINET INDÉPENDANT SPÉCIALISÉ DANS LE CONSULTING, LA FORMATION, L’ACCOMPAGNEMENT, L’ASSISTANCE, L’ORIENTATION ET LE DÉVELOPPEMENT DU CAPITAL HUMAIN, DEPUIS 2011.">
    <link rel="icon" href="../PUBLIC/IMAGES/icon.png">
    <link rel="stylesheet" href="../PUBLIC/CSS/Public.css">
    <link rel="stylesheet" href="../PUBLIC/FONT/Oswald/Font.css">
    <script src="../PUBLIC/JS/global.js"></script>
    <link rel="stylesheet" href="../VIEWS/EVENTS_CPANEL/index.css">
    <script src="../VIEWS/EVENTS_CPANEL/index.js"></script>
    <title>
        actualités
    </title>
</head>
<body>
    <div class="eventCPanel" id="eventCPanel">
        <div class="addEventButton" onclick="openWindowToAddEvent()">
            add event
        </div>
        <div class="title">
            actualités
        </div>
        <div class="eventContainer">
            <div class="eventPictureContainer">
                <img src="../PUBLIC/IMAGES/rentalHalls/84a206.png" alt="">
            </div>
            <div class="eventDetails">
                <div class="eventTitle">
                    heelo every one here
                </div>
                <div class="eventDescription">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius odit sint quisquam consequuntur mollitia soluta optio, tempore rem suscipit esse ab velit tenetur, vitae pariatur. At inventore aspernatur exercitationem sequi.
                </div>
                <div class="deleteButtonContainer">
                    <div class="deleteButton">
                        supprimer
                        <img src="../PUBLIC/IMAGES/adminPages/delete.svg" alt="delete icon">
                    </div>
            </div>
            </div>
        </div>
    </div>
    <footer id="footer">Tous les droits sont réservés</footer>
    <div class="completeReservationProcessContainer" id="windowToAddEvent">
        <div class="justForScrolling">
            <div class="completeReservationProcess" id="completeReservationProcess">
                <div class="closeCompleteReservationProcess" onclick="closeWindowToAddEvent()">
                    <img src="../PUBLIC/IMAGES/rentalHalls/close.svg" alt="close window">
                </div>
                <div class="completeReservationTitle">
                    Informations sur la réservation
                </div>
                <label for="numberOfPeople" class="completeProcessLabel">
                    nomber de personnes
                </label>
                <div class="inputContainer">
                    <input type="text" id="numberOfPeople" class="completeProcessInput">
                </div>
                <label for="breakCoffee" class="completeProcessLabel">
                    pouses  inclus ou non
                </label>
                <div class="inputContainer">
                    <textarea name="" id=""></textarea>
                </div>
                <label for="eventImage" class="eventImageLabel">
                    <img src="../PUBLIC/IMAGES/rentalHalls/camera.svg" alt="camera icon">
                    add your picture
                </label>
                <input type="file" name="" id="eventImage" class="fileInput">
                <button class="addButtonToDB">
                    add to db 
                </button>
                <div class="divForSpace"></div>
            </div>
        </div>
    </div>
</body>
</html>