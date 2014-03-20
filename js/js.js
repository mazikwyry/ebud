
	$(document).ready(function(){
		
		$(window).bind('scroll',function(e){ 
		    parallaxScroll();
		});
		$('.backstretch img').css("top", '0px');
		parallaxScroll();

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
		    $('.backstretch img').css("top", (0-(scrolled*.15))+'px');
		}

		$("body").on("click", ".back_button", function(){
			$(".show-project").stop(true,true).slideUp();
		});

		$('.special_link').click(function(){
		    $('html, body').animate({
		        scrollTop: $( $.attr(this, 'rel') ).offset().top - 68
		    }, 500);
		    return false;
		});

		if($("#name").val() != "" && $("#email").val() != "" && $("#message").val() != "")
			$(".captcha").show();
		$("form input, form textarea").keyup(function(){
			if($("#name").val() != "" && $("#email").val() != "" && $("#message").val() != "")
				$(".captcha").slideDown();
		});

		$('.work').click(function(){
			$(this).children(".work-desc").slideToggle();
		});

		$('.rent-el').click(function(){
			if($(this).find(".rent-desc").css("display")=="none"){
				$('.rent-el').find(".rent-desc").slideUp();
				$(this).find(".rent-desc").slideToggle();
			}
		});

		$(".big-info").css("min-height",(($(window).height()-68)/2)+"px");

	});