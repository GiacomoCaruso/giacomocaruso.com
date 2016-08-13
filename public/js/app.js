$(document).ready(function() {
  $("#personal").addClass("animated fadeInUp");
  $("#code").addClass("animated fadeInUp");
  $(".tabs").addClass("animated fadeInUp");
  $("#user").addClass("animated fadeIn");
  $("#design").addClass("animated fadeIn");
  $("#responsive").addClass("animated fadeIn");
  $("#seo").addClass("animated fadeIn");
  //$(".principle").addClass("animated slideInUp");
  //$('.parallax').parallax();
});
$.extend($.scrollTo.defaults, {
  duration: 800,
});
$('#navpersonal').click(function() {
  $.scrollTo('#head');
});

$('#navwork').click(function() {
  $.scrollTo('#work');
});

$('#navcontact').click(function() {
  $.scrollTo('#contact');
});

$('#p-contact').click(function() {
  $.scrollTo('#contact');
});

var options = [{
  selector: '.projects',
  offset: 200,
  callback: function() {
    $('.projects').addClass("animated fadeInUp");
  }
}, {
  selector: '.form',
  offset: 200,
  callback: function() {
    $('.form').addClass("animated fadeInUp");
  }
}];
Materialize.scrollFire(options);
