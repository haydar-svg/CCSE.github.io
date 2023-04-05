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
    <link rel="stylesheet" href="../VIEWS/RESERVATION_CPANEL//index.css">
    <script src="../VIEWS/RESERVATION_CPANEL/index.js"></script>
    <title>réservations</title>
</head>

<body id="body">
    <p class="title" id="title">
        réservations
    </p>
    <div class="tableCotainer" id="tableCotainer">
        <div class="tableHead">
            <div>Client</div>
            <div>durée</div>
            <div>le début</div>
            <div>la fin</div>
            <div>Période</div>
            <div></div>
        </div>
        <div class="infoLine">
            <div class="name">mostafa haydar</div>
            <div><span class="number">40</span><span class="dayText">jour</span></div>
            <div class="startDateTable">03/05/2022</div>
            <div class="endDateTable">03/06/2022</div>
            <div class="timeAtDay">morning</div>
            <div>
                <button class="moreInfoButton" onclick="openReservInfo(event)"> Plus...</button>
                <button class="deleteButton">
                    <img src="../PUBLIC/IMAGES/adminPages/delete.svg" alt="delete icon">
                </button>
            </div>
        </div>
    </div>
    <footer id="footer">Tous les droits sont réservés</footer>
    <div class="completeReservationProcessContainer" id="windowForReservationInfo">
        <div class="justForScrolling">
            <div class="completeReservationProcess" id="completeReservationProcess">
                <div class="closeCompleteReservationProcess" onclick="closeReservInfo(event)">
                    <img src="../PUBLIC/IMAGES/rentalHalls/close.svg" alt="close window">
                </div>
                <div class="reservationDateTitle">
                    Informations sur la durée
                </div>
                <div class="clientPhoneNumber">
                    <img src="../PUBLIC/IMAGES/rentalHalls/phone.svg" alt="phone icon">
                    <input type="text" name="clientPhoneNumber" id="clientPhoneNumber" class="clientPhoneNumber" placeholder="telephone">
                </div>
                <div class="date">
                    <div class="startDate">
                        <img src="../PUBLIC/IMAGES/rentalHalls/date.svg" alt="date icon">
                        <p id="startDateContainer">le début</p>
                    </div>
                    <div class="endDate">
                        <img src="../PUBLIC/IMAGES/rentalHalls/date.svg" alt="date icon">
                        <p id="endDateContainer">la fin</p>
                    </div>
                </div>
                <div id="period" class="period">
                    <label for="period2">
                <input type="radio" name="period" id="period2" checked>
                <span>journée totale</span>
            </label>
                    <label for="period1">
                <input type="radio" name="period" id="period1">
                <span>demi journée</span>
            </label>
                </div>
                <div class="completeReservationTitle">
                    Informations sur la réservation
                </div>
                <label for="numberOfPeople" class="completeProcessLabel">
                    nomber de personnes
                </label>
                <div class="inputContainer">
                    <div class="iconContainer">
                        <img src="../PUBLIC/IMAGES/rentalHalls/groups_FILL0_wght400_GRAD0_opsz48.svg" alt="input icon">
                    </div>
                    <input type="text" id="numberOfPeople" class="completeProcessInput">
                </div>
                <label for="breakCoffee" class="completeProcessLabel">
                    pouses  inclus ou non
                </label>
                <div class="inputContainer">
                    <div class="iconContainer">
                        <img src="../PUBLIC/IMAGES/rentalHalls/coffee.svg" alt="input icon">
                    </div>
                    <input type="text" id="numberOfPeople" class="completeProcessInput">
                </div>

                <label for="equipements" class="completeProcessLabel">
                    equipements
                </label>
                <div class="inputContainer">
                    <div class="iconContainer">
                        <img src="../PUBLIC/IMAGES/rentalHalls/featureTools.svg" alt="input icon">
                    </div>
                    <input type="text" id="numberOfPeople" class="completeProcessInput">
                </div>
                <label for="equipements" class="completeProcessLabel">
                    coordones
                </label>
                <div class="inputContainer">
                    <div class="iconContainer">
                        <img src="../PUBLIC/IMAGES/rentalHalls/badge_FILL0_wght400_GRAD0_opsz48.svg" alt="input icon">
                    </div>
                    <input type="text" id="numberOfPeople" class="completeProcessInput">
                </div>
                <label for="numberOfPeople" class="completeProcessLabel">
                    objet de location
                </label>
                <div class="inputContainer">
                    <div class="iconContainer">
                        <img src="../PUBLIC/IMAGES/rentalHalls/emoji_objects_FILL0_wght400_GRAD0_opsz48.svg" alt="input icon">
                    </div>
                    <input type="text" id="numberOfPeople" class="completeProcessInput">
                </div>
                <div class="divForSpace"></div>
            </div>
        </div>
    </div>
</body>

</html>