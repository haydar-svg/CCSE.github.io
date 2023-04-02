function openMessageWindow() {
    $('sendMessageWindowParrent').style.display = "block";
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

function closeMessageWindow() {
    $('sendMessageWindowParrent').style.display = "none";
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