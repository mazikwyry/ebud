
	$(document).ready(function(){
		
		$(window).bind('scroll',function(e){ 
		    parallaxScroll();
		});

		$(".sub-trigger").hover(function(){ 
		    $(".sub-menu").stop(true,true).slideDown();
		},function(){
			//$(".sub-menu").stop(true,true).slideToggle();
		});

		$("header").hover(function(){ 
		   // $(".sub-menu").stop(true,true).slideToggle();
		},function(){
			$(".sub-menu").stop(true,true).slideUp();
		});
		 
		function parallaxScroll(){
		    var scrolled = $(window).scrollTop();
		    $('body').css("background-position", "center "+(0-(scrolled*.15))+'px');
		    // if(scrolled>389){
		    // 	$(".choise").addClass("fixed");
		    // }else{
		    // 	$(".choise").removeClass("fixed");
		    // }
		}

	});