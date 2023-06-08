//Header top parent//Sticky Menu
$(window).load(function() {
  var $container = $('.grid');
  //Mansonary
    $container.masonry({
    itemSelector: '.grid-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
  });
  // layout Masonry after each image loads
  $('.grid').imagesLoaded( function() {
    $container.masonry();
  });
    $main_header = $(".main_header").outerHeight();
    $top_bar = $(".topbar_wrap").outerHeight();
    $logo_navigation = $(".logo_navigation").outerHeight();
    $window_height = $(window).outerHeight();
      var mnn = $(".top_header");
      mnssi = "logo_navigation_fixed";
      $(window).scroll(function() {
          if ($(this).scrollTop() > ($top_bar)) {
              mnn.addClass(mnssi);
              //$('.banner_slider, .page_banner_top').css('margin-top',$logo_navigation);
              //$('#cssmenu>ul').css('height',$logo_navigation_scroll_height);
          }  else {
              mnn.removeClass(mnssi);
              //$('.banner_slider, .page_banner_top').css('margin-top','0');
              //$('#cssmenu>ul').css('height',$logo_navigation_withoutscroll_height);
          }
      });

		})
$(function() {
  $('[data-toggle="tooltip"]').tooltip();

	$('.equal_height').matchHeight();
	$('.inner_equal_height').matchHeight();
	$('.equal_height_heading').matchHeight();
	$('.equal_height_desc').matchHeight();

	// Css Menu
	$("#cssmenu li ul").parent().addClass("has-sub");

	//PHOTO GALLERY Slider
	$('.blog_section .owl-carousel').owlCarousel({
				autoplay:true,
				autoplayHoverPause:true,
		    loop:true,
		    margin:30,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        550:{
		            items:2
		        },
		        992:{
		            items:3
		        }
		    }
		})
		$('.banner_slider .owl-carousel, .client_testimonial_slider .owl-carousel').owlCarousel({
				autoplay:true,
				autoplayHoverPause:true,
		    loop:true,
		    margin:0,
				items:1,
		    responsiveClass:true
		})
		$('.our_gallery_slider .owl-carousel').owlCarousel({
				autoplay:true,
				autoplayHoverPause:true,
		    loop:false,
		    margin:0,
				nav:true,
		    responsiveClass:true,
				responsive:{
					0:{
							items:1
					},
					500:{
							items:2
					},
		        992:{
		            items:4
		        }
		    }
		})


		//wow.js adding class
				$("section").addClass("wow fadeIn");

		//wow.js
		wow = new WOW({
		    boxClass: 'wow', // default
		    animateClass: 'animated', // default
		    offset: 0, // default
		    mobile: false, // default
		    live: true // default
		})
		wow.init();


	});
  //Scroll To Top
  $(document).ready(function() {

      // Hide the toTop button when the page loads.
      $("#toTop").css("display", "none");

      // This function runs every time the user scrolls the page.
      $(window).scroll(function() {

          // Check weather the user has scrolled down (if "scrollTop()"" is more than 100)
          if ($(window).scrollTop() > 100) {

              // If it's more than or equal to 0, show the toTop button.
              console.log("is more");
              $("#toTop").fadeIn("slow");
          } else {
              // If it's less than 0 (at the top), hide the toTop button.
              console.log("is less");
              $("#toTop").fadeOut("slow");

          }
      });

      // When the user clicks the toTop button, we want the page to scroll to the top.
      $("#toTop").click(function() {

          // Disable the default behaviour when a user clicks an empty anchor link.
          // (The page jumps to the top instead of // animating)
          event.preventDefault();

          // Animate the scrolling motion.
          $("html, body").animate({
              scrollTop: 0
          }, "slow");

      });

  });
  
  $(document).ready(function() {
   $('#btn_submit').prop('disabled', false);
});
