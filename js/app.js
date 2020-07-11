//Responsive menu with jQuery
jQuery('document').ready(function ($) {
    var menuBTN = $('.menu-icon'),
        menu = $('.navegation ul');

    menuBTN.click(function () {

        if (menu.hasClass('show')) {
            menu.removeClass('show');
        } else {
            menu.addClass('show');
        }
    });

});