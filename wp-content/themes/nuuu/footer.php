 <div class="sticky_section_place_main" style=""></div>
 <section class="open_account_floating_sec section_lead_form_green ">
    <div class="open_account_floating_mobile_link_area">
    <a href="https://www.nuuu.com/kyc" class="open_account_floating_mobile_link">Open <span>A FREE</span> Account</a>
    </div>
    <div class="open_account_floating_desktop_form_area">
      <div class="container">   
        <div class="open_account_floating_secinner">
          <div class="row">    
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="offer_form_wrapper_sticky">
                <form action="" role="form" method="post" class="offer_form_wrapper_sticky_form">
                  <div class="row offer_form_wrapper_sticky_form_row">
                    <div class="offer_form_wrapper_sticky_form_column">
                      <div class="offer_text">
                        <p>Open A FREE Account</p>
                      </div>
                    </div>
                    <div class="offer_form_wrapper_sticky_form_column">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name" pattern="[A-Za-z_]{1,50}" required>
                      </div>
                    </div>
                    <div class="offer_form_wrapper_sticky_form_column">
                      <div class="form-group">
                        <input type="number" name="number" class="form-control" placeholder="Mobile Number" onKeyPress="if(this.value.length==10) return false;" pattern="/^-?\d+\.?\d*$/" required>
                      </div>
                    </div>
                    <div class="offer_form_wrapper_sticky_form_column">
                      <div class="home_banner_banner_btn_area">
                        <button value="Submit" type="submit" name="submitbtn" class="theme_btn offer_form_wrapper_sticky_form_btn" ><span class="txt">Start Investing</span></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
 <footer class="footer_area">
    <div class="upper_footer">
      <div class="container">
        <div class="upper_footerinner">
          <div class="row">
            <div class="col-md-8 col-sm-12 col-12">
              <div class="row">
                <div class="col-md-5 col-sm-6 col-12 footer_widget">
                  <div class="footer_blk">
                    <div class="footer_blkinner">
                    	<?php dynamic_sidebar('sidebar-1'); ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 col-sm-6 col-12 footer_widget">
                  <div class="footer_blk">
                    <div class="footer_blkinner">
                    	<div class="usefull_link">
                    	<?php dynamic_sidebar('sidebar-2'); ?>
                    	</div>
                      <!-- <ul class="usefull_link">
                        <li><a href="#">Account Opening</a></li>
                        <li><a href="#">Who we are ?</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Support</a></li>
                      </ul> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
              <div class="footer_blk footer_about_widget">
                <div class="footer_blkinner">
                	<?php dynamic_sidebar('sidebar-3'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="lower_footer">
      <div class="container">
        <div class="lower_footerinner">
          <div class="lower_footer_content">
          	<?php dynamic_sidebar('sidebar-4'); ?>
          </div>
        </div>
      </div>
    </div>
      <div class="copywright_sec">
      <div class="container">
        <div class="copywright_secinner">
    <p>Copyright ©2022, Tecx Labs Private Limited. All rights reserved.</p>
    </div>
      </div>
    </div>
 </footer>

  <!-- Javascript Files -->

  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.3.3/umd/popper.min.js'></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/classie.js"></script> 
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/cbpAnimatedHeader.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <script>


jQuery(document).ready(function(){ 
  $(".carousel").carousel({
    interval: 3000
  });
  });

  //scroll slides on swipe for touch enabled devices
  $(".carousel").on("touchstart", function(event) {
    var yClick = event.originalEvent.touches[0].pageY;
    $(this).one("touchmove", function(event) {
      var yMove = event.originalEvent.touches[0].pageY;
      if (Math.floor(yClick - yMove) > 1) {
        $(".carousel").carousel("next");
      } else if (Math.floor(yClick - yMove) < -1) {
        $(".carousel").carousel("prev");
      }
    });
    $(".carousel").on("touchend", function() {
      $(this).off("touchmove");
    });
  });
	
	
	

</script>
<!-- <script type="text/javascript">
    
  $ (window).ready (function () {
    setTimeout (function () {
      $ ('#modal-subscribe1').modal ("show")
    }, 5000)
  })  
   
</script> -->

<script>

    $(function () {
      var top = $('#sidebar').offset().top - parseFloat($('#sidebar').css('marginTop').replace(/auto/, 0));
      var footTop = $('#sticky_section_place_main').offset().top - parseFloat($('#sticky_section_place_main').css('marginTop').replace(/auto/, 0));

      var maxY = footTop - $('#sidebar').outerHeight();

      $(window).scroll(function (evt) {
        var y = $(this).scrollTop();
        if (y > top) {

          //Quand scroll, ajoute une classe ".fixed" et supprime le Css existant 
          if (y < maxY) {
            $('#sidebar').addClass('fixed').removeAttr('style');
          } else {

            //Quand la sidebar arrive au footer, supprime la classe "fixed" précèdement ajouté
            $('#sidebar').removeClass('fixed').css({
              position: 'absolute',
              top: (maxY - top) + 'px'
            });
          }
        } else {
          $('#sidebar').removeClass('fixed');
        }
      });
    });
</script>

<script>


/*-------Sticky Section Js Starts-----------------
------------------------------------------*/
	


	jQuery(function ($) {
        if($('body').hasClass('single-sm_company') != true){
            $('.section_lead_form_green').addClass('footer_visible');
        }
		$.fn.isInViewport = function (offset) {
			if (typeof offset == 'undefined') {
				offset = 0;
			}
			var elementTop = $(this).offset().top;
			var elementBottom = elementTop + $(this).outerHeight();

			elementTop = elementTop + offset;

			var viewportTop = $(window).scrollTop();
			var viewportBottom = viewportTop + $(window).height();

			return elementBottom > viewportTop && elementTop < viewportBottom;
		};
		
	
			  if($('body').hasClass('post-type-archive-ab_itm') != true && $('body').hasClass('single-sm_company') != true){
		$(window).scroll(function() {
			
			if ($(this).scrollTop()>500)
			 {
				$(".section_lead_form_green").css("display","block");
			 }
			else
			 {
			  $(".section_lead_form_green").css("display"," none");
			 }
			 
			 if($("div > .oda-sticky-form").length > 0){
			 $(".section_lead_form_green").css("display"," none");
			 }
			 
		 });
      }
		
	

	        if($('body').hasClass('post-type-archive-ab_itm') != true){
                if($('body').hasClass('single-sm_company') != true){
                    $(".section_lead_form_green").css("display","none");
                }    
		$(document).on('scroll', function () {
		
			// 	console.log(isInViewport('.download-app-section'))
			if ($('.sticky_section_place_main').isInViewport($('.section_lead_form_green')
					.outerHeight()) || $('.footer_area').isInViewport()) {
				$('.section_lead_form_green').addClass('footer_visible');
			} else {
				$('.section_lead_form_green').removeClass('footer_visible');
			}
			

		});
        }
	});
	
	

/*-------Sticky Section Js Ends-----------------
------------------------------------------*/	

</script>

<script>
    $(document).ready(function () {
      // Configure/customize these variables.
      var showChar = 600;  // How many characters are shown by default
      var ellipsestext = "";
      var moretext = "Read More";
      var lesstext = "Read Less";


      $('.content_more').each(function () {
        var content = $(this).html();

        if (content.length > showChar) {

          var c = content.substr(0, showChar);
          var h = content.substr(showChar, content.length - showChar);

          var html = c + '<span class="moreellipses">' + ellipsestext + '</span><span class="morecontent"><span>' + h + '</span><div class="read_more_link_area"><a href="" class="morelink">' + moretext + '</a></div></span>';

          $(this).html(html);
        }

      });

      $(".morelink").click(function () {
        if ($(this).hasClass("less")) {
          $(this).removeClass("less");
          $(this).html(moretext);
        } else {
          $(this).addClass("less");
          $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
      });
    });
</script>
<?php wp_footer(); ?>
</body>
</html>