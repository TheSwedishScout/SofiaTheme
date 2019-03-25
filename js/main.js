jQuery(document).ready(function ($) {
	$('.readmore').click(function (e) {
		console.log("hej")
		readmore();
	});
	window.addEventListener('scroll', fixedMenu);
	var headerHeight = $("#topMeny").height()
	function fixedMenu(e) {
		if (window.scrollY > headerHeight) {
			$('#topMeny')[0].classList.add("fixed");
			window.removeEventListener('scroll', fixedMenu);
			window.addEventListener('scroll', staticMenu);
		}
	}
	function staticMenu(e) {
		var headerHeight = $("#topMeny").height()
		//if($( "body" ).hasClass( "home" )){

		if (window.scrollY < headerHeight) {
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
	var hidden = [];
	$(".menu-item-has-children").hover(function (e) {
		var ancestor = $(".current-menu-ancestor .sub-menu")
		var current = $(".current-menu-item .sub-menu")
		e

		if (window.outerWidth >= 1362) {
			for (var i = ancestor.length - 1; i >= 0; i--) {
				if (!this.contains(ancestor[i])) {
					hidden.push(ancestor[i])
					ancestor[i].style.height = 0;
				}
			}
			for (var i = current.length - 1; i >= 0; i--) {
				if (!this.contains(current[i])) {
					hidden.push(current[i])
					current[i].style.height = 0;
				}
			}

		}

		/* Stuff to do when the mouse enters the element */
	}, function () {
		for (var i = hidden.length - 1; i >= 0; i--) {
			hidden[i].style.height = "36px";
			hidden.pop()
		}
		/* Stuff to do when the mouse leaves the element */
	});


	// function centerTitle() {
	// // body...
	// 	var halfDoc= ($(document).width());
	// 	var imgOff = ($('.main-header .karnamn img').offset().left + $('.main-header .karnamn img').outerWidth()/2);
	// 	console.log("Window = " + halfDoc +", Img = "+imgOff);
	// 	var imageOffset = ($(document).width()/2) - ($('.main-header .karnamn img').offset().left + $('.main-header .karnamn img').outerWidth()/2);
	// 	$('.main-header div.karnamn div')[0].style.transform = "translateX("+imageOffset * 1+"px)";
	// // $('.main-header div.karnamn div')[0].style.width = "calc( 100% - "+imageOffset+"px)";
	// }
});
