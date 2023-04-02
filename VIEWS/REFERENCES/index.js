function changeImages(event) {
    var source = event.getAttribute("src")
    var newsource = event.getAttribute("name")
    event.setAttribute('src', newsource)
    event.setAttribute('name', source)
}

function scrollToLeft() {
    $('scroll').scrollLeft = $('scroll').scrollLeft - 200;
}

function scrollToRight() {
    $('scroll').scrollLeft = $('scroll').scrollLeft + 200;
}