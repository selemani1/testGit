$('gallary-grid').on(function(){
    $('.gallary_grid_img').on('mouseover',function(){
    $('.img-fluid').removeClass('highlighted');
    $(this).text('.show_on_hover_mouse').css({"background":"#000000"});
});
});
// Show or hide the sticky footer button
$(window).scroll(function() {
	if ($(this).scrollTop() > 200) 
		{
			$('#back-to-top').fadeIn(200);
		} else {
			$('#back-to-top').fadeOut(200);
	}
});
// Animate the scroll to top when the stick footer button is clicked
$('#back-to-top').click(function(event) {
	event.preventDefault();
	$('html, body').animate({scrollTop: 0}, 600);
})
// Animate the scroll bar to contacts section
$('a[href^="#contact"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top - 75}, 1000, function(){});
  }
}) // end on

// Animate the scroll bar to home section
$('a[href^="#home"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top}, 1000);
  }
}) // end on
// Animate the scroll bar to About services
$('a[href^="#about"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top - 75}, 1000, function(){});
  }
}) // end on
// Animate the scroll bar to services section
$('a[href^="#services"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top - 75}, 1000, function(){});
  }
}) // end on
// Animate the scroll bar to services section
$('a[href^="#team"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top - 75}, 1000, function(){});
  }
}) // end on
// Animate the scroll bar to services section
$('a[href^="#gallary"]').on('click', function(event){
	var target = $($(this).attr('href'));
	if(target.length) {
	event.preventDefault();
	$('html, body').animate({
	scrollTop: target.offset().top - 75}, 1000, function(){});
  }
}) // end on
	

	
	