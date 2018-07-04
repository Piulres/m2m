$( document ).ready(function() {

	console.log("Merlim CoreBook - Knowledge Shire ~ https://github.com/Piulres/merlimcorebook");

	// /////////////////////////////////////////////// //

	
	// Carousel

		$('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:10,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:3,
		            nav:false
		        },
		        1000:{
		            items:5,
		            nav:true,
		            loop:false
		        }
		    }
		})
		
	
	// /////////////////////////////////////////////// //


	// Arrow ScrollToTop

		$(".scrolltop").click(function() {
		  $("html, body").animate({ scrollTop: 0 }, "slow");
		  return false;
		});


	// /////////////////////////////////////////////// //

	
	// Scroll Reveal

	    window.sr = ScrollReveal({ duration: 2000 });
		// sr.reveal('nav', { opacity: 0 });
		sr.reveal('.trick', { delay: 50, easing: 'ease-in-out' });
		sr.reveal('.post-trick', 300 );
		sr.reveal('.post', 1000 );
    
	
	// /////////////////////////////////////////////// //

	
	// Parallax

		$('.parallax-1').parallax({imageSrc: 'wp-content/themes/theme-default/img/parallax-1.jpg'});
		$('.parallax-2').parallax({imageSrc: 'wp-content/themes/theme-default/img/parallax-2.jpg'});

	
	// /////////////////////////////////////////////// //
    

});