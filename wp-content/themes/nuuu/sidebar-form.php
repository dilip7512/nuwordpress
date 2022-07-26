<?php

?>

  <div class="sidebar_quick_contact_blkinner">
    <div class="sidebar_quick_contact_form_area" id="sidebar">
      <div class="sidebar_quick_contact_img_area">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/quick_contact_img.svg" class="img-fluid" alt="">
      </div>
      <div class="side_bar_frm_content">
        <p>Get Your Free Demat Account And<br><strong>0 Brokerage* For First 90 Days</strong></p>
      </div>
      <div class="sidebar_quick_contact_forminner">
        <form action="" role="form" method="post">
          <div class="form-group">
             <input type="text" name="name" class="form-control" placeholder="Name" pattern="[A-Za-z_]{1,50}" required>
          </div>
          <div class="form-group">
            <input type="number" name="number" class="form-control" placeholder="Mobile Number" onKeyPress="if(this.value.length==10) return false;" pattern="/^-?\d+\.?\d*$/" required>
          </div>
          <div class="sidebar_quick_contact_form_btn_area">
            <button class="theme_btn sidebar_quick_contact_form_btn" value="Submit" type="submit" name="submitbtn"><span class="txt">Start
                Investing</span></button>
          </div>
        </form>
      </div>
    </div>
  </div>

