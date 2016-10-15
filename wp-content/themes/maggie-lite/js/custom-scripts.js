/**
* Custom js for Maggie Lite
* 
*/

jQuery(document).ready(function($){

    $('.search-icon i.fa-search').click(function() {
        $('.search-icon .ed-search').toggleClass('active');
    });

    $('.ed-search i.fa-close').click(function() {
        $('.search-icon .ed-search').removeClass('active');
    });

    $('.nav-toggle > .fa').click(function() {
        $('.nav-wrapper .menu').slideToggle('slow');
        $(this).parent('.nav-wrapper').toggleClass('active');
    });

    $('.nav-wrapper .sub-toggle').click(function() {
        $(this).parent('.menu-item-has-children').children('ul.sub-menu').first().slideToggle('1000');
        $(this).children('.fa-angle-right').first().toggleClass('fa-angle-down');
    });

    new WOW().init();

// hide #back-top first
$("#back-top").hide();

// fade in #back-top
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#back-top').fadeIn();
        } else {
            $('#back-top').fadeOut();
        }
    });

    // scroll body to 0px on click
    $('#back-top').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
});


$(".wdgt-slide").bxSlider({
    controls:true,
    pager:true,
    auto:true
});

// Widget tabbed
$('.maggie-lite-cat-tabs').each(function(){
    $(this).find('.cat-tab:first').addClass('active');
});

$('.maggie-lite-tabbed-wrapper').each(function(){
    $(this).find('.maggie-lite-tabbed-section:first').show();
});

$('#maggie-lite-widget-tabbed li a').click(function(event) {
    var tabId = $(this).attr('id');
    $('.maggie-lite-tabbed-section').hide();
    $('#section-'+tabId).show();
    $('.cat-tab').removeClass('active');
    $(this).parent('li').addClass('active');
});

var winwidth = $(window).width();
if(winwidth >= 1097){var mslide = 4; slidew = 260;}
else if(winwidth <= 1096 && winwidth >= 801){var mslide = 3; slidew = 220;}
else if(winwidth <= 800 && winwidth >= 541){var mslide = 2; slidew = 220;}
else if(winwidth <= 540 && winwidth >= 320){var mslide = 1; slidew = 300;}

$('.second-block-wrapper .block-post-wrapper').bxSlider({
    controls:true,
    pager:false,
    auto:false,
    minSlides:mslide,
    maxSlides:mslide,
    moveSlides:1,
    slideWidth:slidew,
    slideMargin:20
});

});