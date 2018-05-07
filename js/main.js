jQuery(document).ready(function ($) {
	  $('.readmore').click(function(e) {
	  	  	console.log("hej")
	  	  	readmore();
	  });
	  window.addEventListener('scroll', fixedMenu);
	var headerHeight = $(".main-header").height()
	  function fixedMenu (e) {
	  	if(window.scrollY > headerHeight){
	  		$('#topMeny')[0].classList.add("fixed");
	  		window.removeEventListener('scroll', fixedMenu);
	  		window.addEventListener('scroll', staticMenu);
	  	}
	  }
	  function staticMenu(e) {
		var headerHeight = $(".main-header").height()
	  	//if($( "body" ).hasClass( "home" )){

	  	if(window.scrollY < headerHeight){
	  		$('#topMeny')[0].classList.remove("fixed");
			window.addEventListener('scroll', fixedMenu);
	  	}
	  }

	var imageOffset = ($(document).width()/2) - ($('.main-header .karnamn img').offset().left + $('.main-header .karnamn img').outerWidth()/2);
	$('.main-header a.karnamn div')[0].style.transform = "translateX("+imageOffset+"px)";
	//debugger;
	//.style.transform = "translateX("+hmm+"px)";
	//debugger;
	$('#hamburger').click(function (e) {
		$('#hamburger').toggleClass('open');
		$('#topMeny').toggleClass('open');
		// body...
	})
	});
