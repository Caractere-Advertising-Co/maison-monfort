$(document).ready(function(){
    $(".hamburger").click(function(){

      $(this).toggleClass("is-active");
      $('header .container-full-width').toggleClass('fixed');
      $('.logo').toggleClass("slideLogo");
      $('#megamenu').toggleClass("open");
    });

    // jQuery(document).ready(function($) {
    //   $(".menu-item-has-children").mouseenter(function() {
    //     $(this).find(".sub-menu").css({
    //       transform: "scaleY(1)",
    //       maxHeight: "400",
    //       opacity: "1",
    //       padding: "",
    //       marginLeft: "50px"
    //     });
    //   });
    
    //   $(".menu-item-has-children").mouseleave(function() {
    //     $(this).find(".sub-menu").css({
    //       transform: "scaleY(0)",
    //       height: "0",
    //       opacity: "0",
    //       padding: "0",
    //       marginLeft: "50px"
    //     });
    //   });
    // });
    
  });