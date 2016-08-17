console.log('IN LIST.JS u');

$(document).ready(function(){
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

