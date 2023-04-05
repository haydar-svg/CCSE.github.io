function openReservInfo() {
    $('windowForReservationInfo').style.display = "block";
    $('title').style.filter = "blur(2px)";
    $('tableCotainer').style.filter = "blur(2px)";
    $('footer').style.filter = "blur(2px)";
    $('body').style.overflowY = "hidden";
}

function closeReservInfo() {
    $('windowForReservationInfo').style.display = "none";
    $('title').style.filter = "blur(0px)";
    $('tableCotainer').style.filter = "blur(0px)";
    $('footer').style.filter = "blur(0px)";
    $('body').style.overflowY = "scroll";
}