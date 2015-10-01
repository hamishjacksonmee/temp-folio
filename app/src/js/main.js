$(function() {


  function showNextSlide() {
    var $slides = $('.image-holder'),
        $activeSlidesForward = $('.image-holder.forward.active'),
        $activeSlidesReverse = $('.image-holder.reverse.active'),
        $slidesToShowForward = $('.image-holder.forward.slide-2'),
        $slidesToShowReverse = $('.image-holder.reverse.slide-2');

    TweenLite.fromTo( $activeSlidesReverse, 0.3, {
      x: 0,
      opacity: 1
    }, {
      x: -50,
      opacity: 0
    });
    TweenLite.fromTo( $activeSlidesForward, 0.3, {
      x: 0,
      opacity: 1
    }, {
      x: 50,
      opacity: 0
    });


    TweenLite.fromTo( $slidesToShow, 0.3, {
      x: -50,
      opacity: 0
    }, {
      x: 0,
      opacity: 1
    });

  }

  function showPreviousSlide() {

  }


  function circleEffect() {

    var windowW = $(window).innerWidth(),
        windowH = $(window).innerHeight(),
        $fxWrapper = $('.effect-wrap'),
        $outerCircle = $('.outer-circle'),
        $middleCircle = $('.middle-circle'),
        $innerCircle = $('.inner-circle'),
        $imageHolders = $('.image-holder');

    $fxWrapper.css({
      'height': windowH,
      'width': windowW
    });

    $outerCircle.css({
      'height': windowW*0.8,
      'width' : windowW*0.8
    });
    $middleCircle.css({
      'height': windowW*0.6,
      'width' : windowW*0.6
    });
    $innerCircle.css({
      'height': windowW*0.4,
      'width' : windowW*0.4
    });

    if( windowW > windowH ){
      $imageHolders.css({
        'background-size': windowW + 'px' + ' ' + 'auto'
      });
    } else {
      $imageHolders.css({
        'background-size': 'auto' + ' ' + windowH + 'px'
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

  $('.slider-next').click(function() {
    showNextSlide();
  });

  $(window).on('resize', function(){
    setDimensions();
  });




});