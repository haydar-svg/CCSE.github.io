
a=true
function DropDwon(event) {
    if (a) {
    event.stopPropagation()
    $('dropDown').style.animationName = 'serviceDropDown';
    $('chevronDropDown').style.animationName = 'chevronAnimationToDown';  
    a=false
    }else{
        DropUp()
    }

}

function DropUp(event) {
    event.stopPropagation()
    $('dropDown').style.animationName = 'serviceDropUp';
    $('chevronDropDown').style.animationName = 'chevronAnimationToUp';
    a=true
}

function openLinksPhone(event) {
    event.stopPropagation()
    $('linksPhoneSize').style.display = 'block';
}

function closeLinksPhone(event) {
    event.stopPropagation()
    $('linksPhoneSize').style.display = 'none';
}