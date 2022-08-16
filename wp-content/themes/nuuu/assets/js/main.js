
$('.trading_modes_slider_nav').slick({
  slidesToShow: 2,
  arrows: true,
  asNavFor: '.trading_mode_slider_main',
  slidesToScroll: 2,
  autoplay: true,
//
prevArrow: '<div class="prev"><img src="assets/images/icon/down_arrow1.png"></div>',
nextArrow: '<div class="next"><img src="assets/images/icon/up_arrow1.png"></div>',
    vertical: true,
	//verticalSwiping: true,
	 //centerMode: true,
	//centerPadding: "0px",
	 
});
$('.trading_mode_slider_main').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.trading_modes_slider_nav',
  //vertical: true,
  focusOnSelect: true,
  autoplay: true,
  arrows: false,
  fade: true,
  //centerMode: true,
  //centerMode: false,
//prevArrow: '<div class="prev"><img src="assets/images/icon/down_arrow1.png"></div>',
//nextArrow: '<div class="next"><img src="assets/images/icon/up_arrow1.png"></div>',
//appendArrows: '.slider-navigation',

});


	

$('.screenshot_slider').owlCarousel({
    stagePadding: 200,
    loop:true,
	center: true,
	loop: true,
    responsiveClass: true,
    margin:10,
    nav:false,
	pagination: false,
	dots: false,
	autoplay: true,
	autoplayTimeout: 4000,
    smartSpeed: 400,	
    responsive:{
        0:{
            items:1,
			stagePadding: 90
        },
		480:{
            items:1,
			stagePadding: 120
        },
        600:{
            items:1,
			stagePadding: 160
        },
		
		767:{
        items:1,
			stagePadding: 100
		},
        1000:{
            items:1,
			stagePadding: 160
        }
		,
        1200:{
            items:1,
			stagePadding: 160
        }
				,
        1440:{
            items:1,
			stagePadding: 200
        }
    }
})




$('.offering_list_area').owlCarousel({
    nav:true,
    margin:0,
	autoplay:false,
    loop:false,
    dots:false,
	autoWidth:true,
    smartSpeed:	500,
	/*center: true,*/
	/*animateOut: 'fadeOut',
       animateIn: 'fadeIn',*/
    responsive:{
      0:{
        items:1,
		autoWidth:false,
		margin:0,
		autoplay:true,
		loop:true,
		dots:true,
		nav:false,
      },
	  480:{
        items:1,
		autoWidth:false,
		margin:0,
		autoplay:true,
		loop:true,
		dots:true,
		nav:false,
      },
      600:{
        items:2,
		autoWidth:false,
		autoplay:true,
		loop:true,
		dots:true,
		nav:false,
      },
      767:{
        items:2,
		autoWidth:false,
      },
      991:{
        items:2
      },
      1560:{
        items:3
      },
      1920:{
        items:3
      }
    }
  });

$('.other_product_list_area').owlCarousel({
    nav:true,
    margin:15,
	autoplay:false,
    loop:false,
    dots:false,
	autoWidth:true,
    smartSpeed:	500,
	
	/*animateOut: 'fadeOut',
       animateIn: 'fadeIn',*/
    responsive:{
      0:{
        items:1,
		autoWidth:false,
		margin:0,
		autoplay:true,
		loop:true,
		dots:true,
		nav:false,
		

      },
	  480:{
        items:1,
		autoWidth:false,
		margin:0,
		autoplay:true,
		loop:true,
		dots:true,
		nav:false,

      },
      600:{
        items:2,
		autoWidth:false,
		margin:0,
		autoplay:true,
		loop:true,
		dots:true,
		nav:false,

      },
      767:{
        items:2,
		autoWidth:false,
		margin:0,
      },
      992:{
        items:2
      },
      1560:{
        items:3
      },
      1920:{
        items:3
      }
    }
  });
  
  
  
  
$('.top_banner_slider').owlCarousel({
    nav:false,
    margin:15,
	autoplay:true,
    loop:true,
    dots:true,
    smartSpeed:	500,
	/*animateOut: 'fadeOut',
       animateIn: 'fadeIn',*/
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      767:{
        items:2
      },
      991:{
        items:3
      },
      1200:{
        items:3
      },
      1920:{
        items:3
      }
    }
  });
  
  
  
  
  
 $('.campaign_benifits_slider').owlCarousel({
    nav:false,
    margin:15,
	autoplay:true,
    loop:false,
    dots:false,
	//autoWidth:true,
    smartSpeed:	500,
	
	/*animateOut: 'fadeOut',
       animateIn: 'fadeIn',*/
    responsive:{
      0:{
        items:1,
		margin:5,
		dots:true,
		//autoWidth:false,
      },
	  480:{
        items:1,
		margin:5,
		dots:true,
		//autoWidth:false,
      },
      600:{
        items:2,
		margin:5,
		dots:true,
		//autoWidth:false,
      },
      767:{
        items:3
      },
      1000:{
        items:3
      },
      1560:{
        items:3
      },
      1920:{
        items:3
      }
    }
  });









$('.campaign_user_experience_slider').owlCarousel({
    nav:false,
    margin:0,
	autoplay:false,
    loop:false,
    dots:false,
    smartSpeed:	500,
	
	/*animateOut: 'fadeOut',
       animateIn: 'fadeIn',*/
    responsive:{
      0:{
        items:1,
		dots:true,	
      },
	  480:{
        items:1,
		dots:true,
      },
      600:{
        items:2,
		dots:true,

      },
      767:{
        items:2,
		dots:true,
      },
      1000:{
        items:3
      },
      1560:{
        items:3
      },
      1920:{
        items:3
      }
    }
  });






  

$('.testimonials_slider').owlCarousel({
    nav:false,
    margin:0,
	autoplay:true,
    loop:false,
    dots:true,
    smartSpeed:	500,
	/*animateOut: 'fadeOut',
       animateIn: 'fadeIn',*/
    responsive:{
      0:{
        items:1
      },
      600:{
        items:1
      },
      767:{
        items:1
      },
      1000:{
        items:1
      },
      1560:{
        items:1
      },
      1920:{
        items:1
      }
    }
  });


$('.product_listing_slider').owlCarousel({    
    margin:10,
	autoplay:true,
    loop:true,
    dots:false,
    smartSpeed:	500,
	nav:true,	
    responsive:{
      0:{
        items:2
      },
	  480:{
        items:2
      },
      600:{
        items:3
      },
      767:{
        items:3
      },
      1000:{
        items:4
      },
	  1200:{
        items:6
      },
      1560:{
        items:6
      },
      1920:{
        items:6
      }
    }
  });
  
  
  
  
    
   
  
$('.similar_stock_slider').owlCarousel({
    nav:false,
    margin:15,
	autoplay:true,
    loop:true,
    dots:false,
    smartSpeed:	500,
	autoWidth:true,
	/*animateOut: 'fadeOut',
       animateIn: 'fadeIn',*/
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      767:{
        items:2
      },
      991:{
        items:3
      },
      1200:{
        items:3
      },
      1920:{
        items:3
      }
    }
  });
  
  
  
  
  
  
  
  
  
  

$(document).ready(function () {
	
  $('.find_out_link11').click(function() {
  $('html, body').animate({
    scrollTop: $(".offering_sec11").offset().top
  }, 1000)
})
/*
$('.scrollTo').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
*/

});

/*-------------------------------------
    On Scroll 
    -------------------------------------*/
    /*$(window).on('scroll', function() {

        // Back Top Button
        if ($(window).scrollTop() > 500) {
            $('.scrollup').addClass('back-top');
        } else {
            $('.scrollup').removeClass('back-top');
        }
        // Sticky Header
        if ($('body').hasClass('sticky-header')) {
            var stickyPlaceHolder = $("#rt-sticky-placeholder"),
                menu = $("#header_area"),
                menuH = menu.outerHeight(),
                topHeaderH = $('#header-topbar').outerHeight() || 0,
                middleHeaderH = $('#header-middlebar').outerHeight() || 0,
                targrtScroll = topHeaderH + middleHeaderH;
            if ($(window).scrollTop() > targrtScroll) {
                menu.addClass('cbp-af-header-shrink');
                stickyPlaceHolder.height(menuH);
            } else {
                menu.removeClass('cbp-af-header-shrink');
                stickyPlaceHolder.height(0);
            }
        }
    });
	*/




/*=============================================*/
/*--------------- [_Accordion] ----------------*/
/*=============================================*/
$('.accordion').find('.accordion-header').on('click', function() {
	// Adds Active Class
	$(this).toggleClass('active');
	// Expand or Collapse This Panel
	$(this).next().slideToggle(300, "swing");
	// Hide The Other Panels
	$('.accordion-body').not($(this).next()).slideUp(300, "swing");
	// Removes Active Class From Other Titles
	$('.accordion-header').not($(this)).removeClass('active');
});


 



$('.testimonial_slider').slick({
 slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  arrows: false,
  infinite: true,
  adaptiveHeight: true,
 infinite: true,
  dots: true,  
  autoplaySpeed: 2000,
 
  
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
      
        infinite: true,
        dots: true
      }
    },
	{
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
       
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  
  
  
});




$('.home_page_banner_slider').owlCarousel({
        loop: true,
        nav: false,
        dots:true,
        autoplay: true,
        autoplayTimeout: 5000,
       animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })




jQuery(document).ready(function($) {
  var alterClass = function() {
    var ww = document.body.clientWidth;
    if (ww < 479) {
      
	$( ".header_area" ).addClass( "myClass2" )
	
	$('.header_area#header_area').removeAttr('id');
	
	
	$(window).scroll(function(){
    if ($(this).scrollTop() > 50) {
       $('.menu_header_form').addClass('stick');
    } else {
       $('.menu_header_form').removeClass('stick');
    }
	});
	
	
	
	
    } else if (ww >= 480) {
      
	


    };
  };
  $(window).resize(function(){
    alterClass();
  });
  //Fire it when the page first loads:
  alterClass();
});

$(".search_btn.mobile_search").click(function(){
  $(".top_header_search_area").toggleClass("open");
  	
});

$(".mobile_menu").click(function(){
  $(".top_header_search_area").removeClass("open");  	
});




$(".navbar-toggler").click(function(){
  $(".navbar-collapse").toggleClass("menu-visible");
  $(".menu_overlay").toggleClass("menu-visible");
  //$('body').css('overflow', 'hidden');	
});


 
$(".menu_close_btn").click(function(){
  $(".navbar-collapse").removeClass("menu-visible");
  $(".navbar-collapse").removeClass("show");
  $(".menu_overlay").removeClass("menu-visible");
  //$('body').css('overflow', 'auto');
});



$(".menu_overlay").click(function(){
  $(".menu_overlay").removeClass("menu-visible");
  $(".navbar-collapse").removeClass("show");
  $(".navbar-collapse").removeClass("menu-visible");
  //$('body').css('overflow', 'auto');
});


$(".search_btn.mobile_search").click(function(){
  $(".navbar-collapse").removeClass("show");  	
});



$( ".navigation_area .navigation .navbar-light .navbar-nav li ul" ).find( "li" ) .closest("ul") .parent("li") .addClass( 'dropdown_menu' );

$( ".navigation_area .navigation .navbar-light .navbar-nav li ul li ul" ).find( "li" ) .closest("ul") .parent("li") .addClass( 'dropdown_menu2' );


$(".navigation_area .navigation .navbar-light .navbar-nav li").click(function(){
    $(this).toggleClass("curent1");
	/*$('.navigation_area .navigation .navbar-light .navbar-nav li').not($(this)).removeClass('curent1');*/
	});

$(".navigation_area .navigation .navbar-light .navbar-nav li").click(function(){
  $(this).toggleClass("curent1");
  $('.navigation_area .navigation .navbar-light .navbar-nav li').not($(this)).removeClass('curent1');
});

$(".navigation_area .navigation .navbar-light .navbar-nav li ul li").click(function(){
  $(this).toggleClass("curent2");
  $('.navigation_area .navigation .navbar-light .navbar-nav li').not($(this)).removeClass('curent2');
});






$(".navigation_area .navbar .navbar-nav li").click( function(){
    $(this).toggleClass('curent1');
    $(".navigation_area .navbar .navbar-nav li").not(this).removeClass('curent1');
   
   });
   
   
   
$(".onload_popupinner .close").click(function(){    
  $('.onload_popup').css({'display' : 'none !important'});
});



$(document).ready(function(){
 // Adding addborder class
 $('table').addClass('table');
 
});

$(document).ready(function(){
 // Adding addborder class
 $('.wp-block-table').addClass('table-responsive');
 
});