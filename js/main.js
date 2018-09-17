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
	//debugger;
	//.style.transform = "translateX("+hmm+"px)";
	//debugger;
	$('#hamburger').click(function (e) {
		$('#hamburger').toggleClass('open');
		$('#topMeny').toggleClass('open');
		// body...
	})
	/*centerTitle();
	var tom = undefined;
	$(window).on('resize', function () {
		if(tom !== undefined){
			clearTimeout(tom)
		}
		tom = setTimeout(function () {
			centerTitle();
			clearTimeout(tom)

			
		}, 2000);

		
	})*/



	function centerTitle() {
	// body...
		var halfDoc= ($(document).width());
		var imgOff = ($('.main-header .karnamn img').offset().left + $('.main-header .karnamn img').outerWidth()/2);
		console.log("Window = " + halfDoc +", Img = "+imgOff);
		var imageOffset = ($(document).width()/2) - ($('.main-header .karnamn img').offset().left + $('.main-header .karnamn img').outerWidth()/2);
		$('.main-header div.karnamn div')[0].style.transform = "translateX("+imageOffset * 1+"px)";
	// $('.main-header div.karnamn div')[0].style.width = "calc( 100% - "+imageOffset+"px)";
	}
});
