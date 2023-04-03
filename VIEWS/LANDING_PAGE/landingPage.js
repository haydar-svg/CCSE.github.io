function DropDwon(event) {
    event.stopPropagation()
    $('dropDown').style.animationName = 'serviceDropDown';
    $('chevronDropDown').style.animationName = 'chevronAnimationToDown';
}

function DropUp(event) {
    event.stopPropagation()
    $('dropDown').style.animationName = 'serviceDropUp';
    $('chevronDropDown').style.animationName = 'chevronAnimationToUp';
}

function openLinksPhone(event) {
    event.stopPropagation()
    $('linksPhoneSize').style.display = 'block';
}

function closeLinksPhone(event) {
    event.stopPropagation()
    $('linksPhoneSize').style.display = 'none';
}