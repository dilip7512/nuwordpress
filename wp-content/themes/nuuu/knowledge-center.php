<?php 
/**
* Template Name: Knowledge Center
*
*/
get_header() ?>
<style type="text/css">
.toggle-text-content span {display: none;}
.morecontent span {display: none;}
.morelink {display: block;}
</style>
<main class="body_container">

	<section class="knowledge_center_sec">
      <div class="container">
        <div class="knowledge_center_secinner">
          <div class="row">
            <div class="col-md-8 col-sm-7 col-12" id="main" style="min-height:600px;">
              <div class="knowledge_center_content_area" id="content">
              	<?php
      	    		$post_id = 236;
      	    		$queried_post = get_post($post_id);
      	    		?>
                <div class="upper_content">
                  <h4><?php echo $queried_post->post_title; ?></h4>
                  <!-- <p>Lorem Ipsum is simply dummy text</p> -->
                </div>
                <div class="knowledge_center_des_area">
                  <div class="toggle-text">
                    <?php echo $queried_post->post_content; ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-5 col-12 sidebar_quick_contact_blk">
               <?php get_sidebar('form') ?>
            </div>
          </div>
        </div>
      </div>
  </section>

</main>


<?php get_footer() ?>

<script>
   // Show more text option 
    var showChar = 1450;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Read more";
    var lesstext = "Read less";
    
    //Cut content based on showChar length
    if ($(".toggle-text").length) {
        $(".toggle-text").each(function() {

            var content = $(this).html();
            console.log(content);
     
            if(content.length > showChar) {
     
                var contentExcert = content.substr(0, showChar);
                var contentRest = content.substr(showChar, content.length - showChar);
                var html = contentExcert + '<span class="toggle-text-ellipses">' + ellipsestext + ' </span> <span class="toggle-text-content"><span>' + contentRest + '</span><a href="javascript:;" class="toggle-text-link">' + moretext + '</a></span>';
     
                $(this).html(html);
            }
        });
    }
    
    //Toggle content when click on read more link
    $(".toggle-text-link").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
			$('.toggle-text-content').removeClass('block');
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
			$('.toggle-text-content').addClass('block');
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
</script>
