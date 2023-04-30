/*Our Team*/
jQuery(document).ready(function () {
  var targets = ['.social-icons > li > a','',];
  var foo = jQuery('.social-icons').val();
  console.log(foo);
  console.log('primus');
  jQuery("#ourteam-slider").owlCarousel({
    items: 4,
    margin: 0,
    dots: false,
    nav: false,
    responsive: {
      1280: {
        items: 4,
      },
      768: {
        items: 3,
      },
      520: {
        items: 2,
      },
      0: {
        items: 1,
      },
    }
  });
  
  jQuery('.single-item').slick({dots: true,
    speed: 500});
  
  jQuery('#mce-EMAIL').val()||"Email";
  height = jQuery('.slotholder').height() * .65;
  jQuery('.homepage-video-iframe').css('width', jQuery('.container').width()+'px');
  jQuery('.homepage-video-iframe').css('height', height+'px');
  jQuery(window).resize(function() {
    height = jQuery('.slotholder').height() * .75;
  jQuery('.homepage-video-iframe').css('width', jQuery('.container').width()+'px');
  jQuery('.homepage-video-iframe').css('height', height+'px');
});
});

