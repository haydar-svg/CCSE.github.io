function scrollToLeftEvent() {
    $('scrollEvents').scrollLeft = $('scrollEvents').scrollLeft - 100;
}

function scrollToRightEvent() {
    $('scrollEvents').scrollLeft = $('scrollEvents').scrollLeft + 100;
}


function openEventDetails() {
    $('eventDetailsContainer').style.display = "block";
    $('body').style.overflowY = "hidden";

}

function closeEventDetails() {
    $('eventDetailsContainer').style.display = "none";
    $('body').style.overflowY = "scroll";
}