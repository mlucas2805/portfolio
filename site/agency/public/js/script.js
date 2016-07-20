/**
 * Created by Marie on 19/04/2016.
 */
// BOUTONS DE PARTAGE RESEAUX SOCIAUX
$(window).scroll(function(){
    var windowWidth= $(window).width();
    if (windowWidth > 1100)
    {
        if ($(this).scrollTop() > 50)
        { //niveau d'apparution au scroll
            $('.menu').fadeIn(300); // vitesse d'apparution
        } else
        {
            $('.menu').fadeOut(300); // vitesse de disparution
        }
    }
    else if(windowWidth < 1100)
    {
        $(".menu").hide(".menu");
    }


});

