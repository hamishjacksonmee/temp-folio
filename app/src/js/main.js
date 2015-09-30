$(function() {



function circleEffect() {
  var windowW = $(window).innerWidth(),
      windowH = $(window).innerHeight(),
      $fxWrapper = $('.effect-wrap'),
      $outerCircleWrap = $('.outer-circle-wrap'),
      $outerCircleImage = $('.outer-circle-image');

  $fxWrapper.css({
    'height': windowH,
    'width': windowW
  });

  $outerCircleImage.css({
    'height': windowH,
    'width': windowW
  });

  if( windowW > windowH ){
    $outerCircleWrap.css({
      'width' : windowW - 100,
      'height': windowW - 100
    });
  } else if( windowW > 1280 ){
    $outerCircleWrap.css({
      'width' : windowW - 300,
      'height': windowW - 300
    });
  } else {
    $outerCircleWrap.css({
      'width': $outerCircleWrap.height()
    });
  }


}




function setDimensions() {

  var windowW = $(window).innerWidth(),
      windowH = $(window).innerHeight();

  circleEffect();

  $('.container').css({
    'height': windowH,
    'width': windowW
  });

}



// ----------------- Events & initialize functions

var $body = $('body');

// Init Functions

setDimensions();
circleEffect();

// Events

$('.intro').click(function() {
  $body.toggleClass('open');
});

$(window).on('resize', function(){
  setDimensions();
});




});