$(function () {

  $('.hamburger, .menu a').click(function () {
    var humIcon = $('.hamburger img').attr('src');
    var viewIcon = (humIcon === (path + '/img/hamburger-btn.svg')) ? (path + '/img/close-hamburger-btn.svg') : (path + '/img/hamburger-btn.svg');

    $('.hamburger img').attr('src', viewIcon);
    $('.menu').slideToggle();
    $('.menu-bg').fadeToggle();

  });

  $('.carousel').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    fade: true,
    infinite: true,
    arrows: false,
    dots: true,
    dotsClass: "carousel-nav",
  });

  $('.voice-carousel').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    fade: true,
    infinite: true,
    arrows: false,
    dots: false,
  });

  $(window).on('scroll resize load', function() {
    var scroll = $(window).scrollTop();
    
    if(scroll > 150) {
      console.log('スクロール');
      $('.page-up').fadeIn();
    } else {
      $('.page-up').fadeOut();
    }
  });

  $('.page-up').click(function() {
    $('body,html').animate({scrollTop: 0}, 600);
  });

});