var domain = window.location.pathname;

function navigation() {
    var navigation_links = document.querySelectorAll('a.navigation-link');

    if (domain === '/php/') {
        navigation_links[0].classList.add('aktiv');
    } else if (domain === '') {
        navigation_links[1].classList.add('aktiv');
    }
}

window.addEventListener('load', function() {
    navigation();
})