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
    $('.gallery-slider').slick({
        asNavFor: '.thumbnail-slider',
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
        nextArrow: '<i class="fa fa-angle-right slick-next"></i>'
    });
    $('.thumbnail-slider').slick({
        asNavFor: '.gallery-slider',
        slidesToShow: 7,
        slidesToScroll: 1,
        arrows: true,
        centerPadding: '20px',
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
        nextArrow: '<i class="fa fa-angle-right slick-next"></i>'
    });
});