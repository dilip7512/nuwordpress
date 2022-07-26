<?php
/**
* Template Name: Contact Us
*
*/
 get_header() ?>


<main class="body_container">
    <section class="contact_page_sec">
      <div class="container">
        <div class="contact_page_secinner">
          <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-12 col-12">
              <div class="contact_imfo_area">
                <div class="contact_imfo_top_area">
                  <h4>Contact Information</h4>
                  <p>Fill up the form and our team will get back at the earliest</p>
                </div>
                <div class="contact_imfo_dtls_area">
                  <ul class="contact_imfo_dtls_list">
                    <!-- <li>
                      <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/phone.svg" class="img-fluid"></div>
                      <div class="content">+91 99200 31111</div>
                    </li> -->
                    <li>
                      <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/email.svg" class="img-fluid"></div>
                      <div class="content">info@nuuu.com</div>
                    </li>
                    <li>
                      <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/location.svg" class="img-fluid"></div>
                      <div class="content">601, Heritage Plaza, 6th Floor, JP Road, Opp. Indian Oil Colony, Andheri (West), Mumbai,
                        Mumbai City, Maharashtra, India, 400058</div>
                    </li>
                  </ul>
                </div>
                <div class="contact_imfo_social_area">
                  <ul>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/facebook2.svg" class="img-fluid"></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/twitter2.svg" class="img-fluid"></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/linkdin2.svg" class="img-fluid"></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/instagram2.svg" class="img-fluid"></a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-8 col-md-7 col-sm-12 col-12 ">
              <div class="right_contact_page_sec">
                <div class="right_contact_page_form_area">
                  <h4>Stuck Somewhere?</h4>
                  <div class="right_contact_page_form">
                    <!-- <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-12 right_contact_page_form_blk">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="First Name">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-12 right_contact_page_form_blk">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-12 right_contact_page_form_blk">
                        <div class="form-group">
                          <input type="email" class="form-control" placeholder="Mail">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-12 right_contact_page_form_blk">
                        <div class="form-group">
                          <input type="number" class="form-control" placeholder="Phone">
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-12 right_contact_page_form_blk">
                        <div class="form-group">
                          <textarea class="form-control right_contact_page_form_textarea" placeholder="Message/Query"></textarea>
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 col-12 right_contact_page_form_blk">
                        <div class="right_contact_page_form_btn_area">
                          <button class="theme_btn right_contact_page_form_btn" type="button"><span class="txt">Send</span></button>
                        </div>
                      </div>
                    </div> -->
                    <?php echo do_shortcode('[contact-form-7 id="65" title="Contact form 1"]'); ?>
                  </div>
                </div>
                <!-- <div class="right_contact_page_content_area">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="right_contact_page_content">
                        <h5>Still more doubts ?</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                          been the industry's standard.</p>
                        <a href="#" class="theme_btn"><span class="txt">Visit Help Center <img
                              src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/right_arrow2.svg" class="img-fluid"></span></a>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                      <div class="right_contact_page_content_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/contact_frame.svg" class="img-fluid">
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


</main>


	
<?php get_footer() ?>