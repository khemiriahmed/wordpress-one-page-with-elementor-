jQuery(document).ready(function($) {
  
  //alert('Bonjour');

   //If Scroll Fixed top
   $(window).scroll(function() {
    var height = $(window).scrollTop();

    if (height > 500) {
        $('.ast-primary-header-bar').addClass('header-fixed');
    } else {
        $('.ast-primary-header-bar').removeClass('header-fixed');
    }

});


})