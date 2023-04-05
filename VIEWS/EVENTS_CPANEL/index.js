
function openWindowToAddEvent() {
    $('windowToAddEvent').style.display = "block";
    $('eventCPanel').style.filter = "blur(2px)";
    $('footer').style.filter = "blur(2px)";
    $('body').style.overflowY = "hidden";
}

function closeWindowToAddEvent() {
    $('windowToAddEvent').style.display = "none";
    $('eventCPanel').style.filter = "blur(0px)";
    $('footer').style.filter = "blur(0px)";
    $('body').style.overflowY = "scroll";
}