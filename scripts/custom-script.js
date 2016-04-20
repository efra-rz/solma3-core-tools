$(document).ready(function(){
  $(window).scroll(function(){
    var barra = $(window).scrollTop();
    var posicion = barra * 0.05;

    $('.temario').css({
      'background-position': '0 ' + posicion + 'px'
    });
  });
  $(function() {
    jQuery.scrollSpeed(60, 400);
  });

  // $(window).scroll(function(){
  //   var barra = $(window).scrollTop();
  //   var posicion = barra * 0.5;
  //
  //   $('.limon').css({
  //     'background-position': '0 -' + posicion + 'px'
  //   });
  // });
});
