
function setDimensions() {

  var windowW = $(window).innerWidth(),
      windowH = $(window).innerHeight();

  $('.container').css({
    'height': windowH,
    'width': windowW
  });

}



// ----------------- Events & initialize functions

$(function() {

    var $body = $('body');

    // Init Functions

    setDimensions();

    // Events

    $('.enter-fake').click(function() {
      $body.toggleClass('open');
    });

    $(window).on('resize', function(){
        setDimensions();
    });

});