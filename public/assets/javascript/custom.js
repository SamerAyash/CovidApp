
$(function(){
  'use strict';

  $(window).on('resize', function(){
$('.back-content img').width($(' form.welcome ').outerWidth());
$('.back-content img').height($(' form.welcome ').outerHeight());
var bottom = $('header.welcome h1').offset().top + $('header.welcome h1').outerHeight(true);
$('.back-content img').offset({top: bottom});
});
$('.back-content img').width($(' form.welcome ').outerWidth());
$('.back-content img').height($(' form.welcome ').outerHeight());
var bottom = $('header.welcome h1').offset().top + $('header.welcome h1').outerHeight(true);
$('.back-content img').offset({top: bottom});
});
