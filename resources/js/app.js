require('./bootstrap');

import Alpine from 'alpinejs';
window.$ = window.jQuery = require('jquery');
require('./slick.min-1.8.1');

window.Alpine = Alpine;

Alpine.start();

jQuery(window).scroll(function () {
    const scroll = jQuery(window).scrollTop();
    if (scroll >= 50) {
        jQuery('.sticky-header').addClass('sticky-header-active');
    }
    else {
        jQuery('.sticky-header').removeClass('sticky-header-active');
    }
});

jQuery(document).ready(function ($) {
    $('.slider-test').slick();
});