// $(function() {
//   var $postQ = $("._navbar"),
//       $postQPos = $postQ.offset().top + $postQ.height(),
//       $win = $(window);

//   $win.scroll(function() {
//     if ($postQPos > $win.scrollTop() + $win.height()) {
//       // Post form off-screen
//       $('.show_postQuestion').addClass('fixed');
//     } else {
//       $('.show_postQuestion').removeClass('fixed');
//     }
//   }).trigger('scroll'); // trigger the event so it moves into position on page load
// });
$(document).ready(function(){

	var hgl = $('#section').height() - 80;
	$('._navbar').attr('data-offset-top',hgl);

	var lebar = $(window).width();

	(lebar < 600)? 
	$('._navbar').removeAttr('data-spy').removeAttr('data-offset-top'):
	'' ;

	$('._hamburger').click(function(){
		$('nav._navbar').toggleClass('nav_active');
	});	

});