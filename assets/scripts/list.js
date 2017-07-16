console.log('IN LIST.JS');

$(document).ready(function(){
    console.log("smooth scrolling a \n\n\n\n\n wasdfdsayayyayayayay \n\n\n\n\n \n\n\n\n\n wasdfdsayayyayayayay \n\n\n\n\n \n\n\n\n\n wasdfdsayayyayayayay \n\n\n\n\n \n\n\n\n\n wasdfdsayayyayayayay \n\n\n\n\n");

  //Setup Smooth Scrolling: 
     //From https://stackoverflow.com/a/7717572/722738
  $(document).on('click', 'a', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
  });
  
  $(".list-item").each(function(){
    $(this).on('inview', function(event, isInView) {
      var name = this.getAttribute('name');
      event.stopPropagation();
      if (isInView) {
        //Element is now visible in the viewport:
        console.log('IS INVIEW', name, $("#nav-mobile #nav-" + name  ) );
        $("#nav-mobile #nav-" + name  ).addClass("active").find('.collapsible-body').slideToggle('show');
      } else {
        console.log('------------------------out of view', name);
        //Element has gone out of viewport:
        $("#nav-mobile #nav-" + name ).removeClass("active").find('.collapsible-body').slideToggle('show');
      }
    });
  });
  
  if( $(window).width() < 993) {
    $('#nav-mobile .collapsible-body a').click(function(){
      $('.button-collapse').sideNav('hide');
    });
  }
  

});
