$( document ).ready(function() {

	console.log("Merlim CoreBook - Knowledge Shire ~ https://github.com/Piulres/merlimcorebook");


	// Isotope

	$('.isotope-grid').isotope({
	  itemSelector: '.isotope-grid-item',
	  masonry: {
	    isFitWidth: true
	  }
	});

	// init Isotope
	var $grid = $('.isotope-grid').isotope({
	  itemSelector: '.isotope-grid-item'
	});

	// store filter for each group
	var filters = {};

	$('.filters').on( 'click', '.button', function() {
	  var $this = $(this);
	  // get group key
	  var $buttonGroup = $this.parents('.button-group');
	  var filterGroup = $buttonGroup.attr('data-filter-group');
	  // set filter for group
	  filters[ filterGroup ] = $this.attr('data-filter');
	  // combine filters
	  var filterValue = concatValues( filters );
	  // set filter for Isotope
	  $grid.isotope({ filter: filterValue });
	});

	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});
	  
	// flatten object by concatting values
	function concatValues( obj ) {
	  var value = '';
	  for ( var prop in obj ) {
	    value += obj[ prop ];
	  }
	  return value;
	}


	// /////////////////////////////////////////////// //


	// Arrow ScrollToTop

	$(".scrolltop").click(function() {
	  $("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});


	// /////////////////////////////////////////////// //

	

	// Theme Color Ajust

	$(function() {
		var $c = $('.navbar-inverse').css("background-color");
		var $d = $('.navbar-brand').css("color");
		$("footer").css("background-color", $c);
		$("footer a").css("color", $d);
		$("footer p").css("color", $d);
		$("body").prognroll({
			height:10,        //Progress bar height
			color: $c, //Progress bar background color
			custom:false     //If you make it true, you can add your custom div and see it's scroll progress on the page    
		});

	});

	
	// /////////////////////////////////////////////// //

	
	var width = $(window).width();
    if( width >= 959 ) {

    	// Change BG Blend

    	function changeColor(curNumber){
	    curNumber++;

		    if(curNumber > 7){
		        curNumber = 1;
		    }

		    // document.body.setAttribute('class', 'color' + curNumber);
		    $('body').toggleClass('color' + curNumber);
		    setTimeout(function(){changeColor(curNumber)}, 5000);

		}

		changeColor(0);

		// Post Img Align

        $('.wp-post-image').each(function(){
	        var theWidth = $(this).width();
	        var theWidth = theWidth + 50;
	        $(this).css("width", theWidth);
	        $(this).css("height", theWidth);
	    });

	    // Animation onReveal

	    window.sr = ScrollReveal({ duration: 2000 });
		// sr.reveal('nav', { opacity: 0 });
		sr.reveal('.trick', { delay: 50, easing: 'ease-in-out' });
		sr.reveal('.post-trick', 300 );
		sr.reveal('.post', 1000 );

    } else {

    	$('.wp-post-image').each(function(){
	        var theWidth = $(this).width();
	        $(this).css("width", theWidth);
	        $(this).css("height", theWidth);
	    });

    }
	
	// /////////////////////////////////////////////// //
    

});