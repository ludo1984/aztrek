$(document).ready(function() {

  //Responssive menu
  $('.burger').sidr({
    source: '#nav-principale',
    displace: false,
    name: 'sidr-main',
  });

  $('body').click(function() {
    $.sidr('close', 'sidr-main');
  });


});
