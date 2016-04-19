/**
 * Created by Marie on 19/04/2016.
 */
// BOUTONS DE PARTAGE RESEAUX SOCIAUX
$(window).scroll(function(){
    if ($(this).scrollTop() > 50) { //niveau d'apparution au scroll
        $('#menu').fadeIn(300); // vitesse d'apparution
    } else {
        $('#menu').fadeOut(300); // vitesse de disparution
    }
});