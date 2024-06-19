$(document).ready(function(){
    $(".hamburger").click(function(){

      $(this).toggleClass("is-active");
      $('header .container-full-width').toggleClass('fixed');
      $('.logo').toggleClass("slideLogo");
      $('#megamenu').toggleClass("open");
    });
  });