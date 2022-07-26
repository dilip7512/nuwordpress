<?php
/**
* Template Name: Ipo
*
*/
 get_header() ?>
<style type="text/css">
  <style>
    .footer_area {
      position: relative;
      z-index: 2;
    }

    .ipo_page_accordian_table_body {
      display: none;
    }
  </style>
</style>
<main class="body_container">

    <section class="ipo_page_sec">
      <div class="container">
        <div class="ipo_page_secinner">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12 left_ipo_page_sec" id="content">
              <div class="ipo_page_top_header">
                <h1>Initial Public Offerings</h1>
              </div>

              <div class="left_ipo_page_secinner">

                <div class="ipo_page_sec_blk">
                  <h4 class="heading_ttl">Open Now(2)</h4>
                  <div class="ipo_page_sec_blkinner">
                    <div class="table-responsive">
                      <table id="example1" class="table ipo_page_table ipo_page_accordian_table" style="width:100%;">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Company</th>
                            <th>Bid Date</th>
                            <th>Price Range</th>
                            <th>Issue Size</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="ipo_page_accordian_table_head active">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/snapdeal.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Snapdeal</a></td>
                            <td>11 Feb - 15 Feb 2022</td>
                            <td>Rs. 160.00</td>
                            <td>90</td>
                            <td>
                              <button type="button" class="theme_btn apply_button"><span class="txt">Apply</span></button>
                            </td>
                          </tr>
                          <tr class="ipo_page_accordian_table_body" style="display: table-row;">
                            <td colspan="6" class="ipo_page_sub_table_area">

                              <div class="ipo_page_sub_table_areainner">
                                <table class="ipo_page_sub_table" style="width:100%;">
                                  <tr>
                                    <td>
                                      <div class="ipo_table_img">
                                      </div>
                                    </td>
                                    <td><a href="" class="name_link">Jasper Infotech</a></td>
                                    <td>
                                      <ul class="ipo_page_sub_table_list">
                                        <li>
                                          <span class="ttl">To be listed on</span>
                                          <span class="txt">20 Feb 2022</span>
                                        </li>
                                        <li>
                                          <span class="ttl">Issue Size</span>
                                          <span class="txt">20.8Cr Shares</span>
                                        </li>
                                        <li>
                                          <span class="ttl">Lot Size</span>
                                          <span class="txt">90</span>
                                        </li>
                                      </ul>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                      <a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid"> <span class="txt">View RHP</span></a>
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                          <tr class="ipo_page_accordian_table_head">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/nsdl.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Snapdeal</a></td>
                            <td>11 Feb - 15 Feb 2022</td>
                            <td>Rs. 600.00 - Rs. 620.50</td>
                            <td>90</td>
                            <td>
                              <button type="button" class="theme_btn apply_button"><span class="txt">Apply</span></button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="ipo_page_sec_blk">
                  <h4 class="heading_ttl">Upcoming (9)</h4>
                  <div class="ipo_page_sec_blkinner">
                    <div class="table-responsive">
                      <table id="example1" class="table ipo_page_table" style="width:100%;">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Company</th>
                            <th>Bid Date</th>
                            <th>Price Range</th>
                            <th>Issue Size</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/lic.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">LIC</a></td>
                            <td>To be announced</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                          </tr>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/infy.svg" class="img-fluid">
                              </div>
                            </td>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Infosys</a></td>
                            <td>To be announced</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                              <a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid">
                              <span class="txt">IPO Doc</span></a>
                            </td>
                          </tr>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/ongc.svg" class="img-fluid">
                              </div>
                            </td>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">ONGC</a></td>
                            <td>To be announced</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                              <a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid">
                              <span class="txt">IPO Doc</span></a>
                            </td>
                          </tr>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/lic.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">LIC</a></td>
                            <td>To be announced</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                          </tr>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/infy.svg" class="img-fluid">
                              </div>
                            </td>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Infosys</a></td>
                            <td>To be announced</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                              <a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid">
                              <span class="txt">IPO Doc</span></a>
                            </td>
                          </tr>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/ongc.svg" class="img-fluid">
                              </div>
                            </td>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">ONGC</a></td>
                            <td>To be announced</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                              <a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid">
                              <span class="txt">IPO Doc</span></a>
                            </td>
                          </tr>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/lic.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">LIC</a></td>
                            <td>To be announced</td>
                            <td>-</td>
                            <td>-</td>
                            <td></td>
                          </tr>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/infy.svg" class="img-fluid">
                              </div>
                            </td>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Infosys</a></td>
                            <td>To be announced</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                              <a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid">
                              <span class="txt">IPO Doc</span></a>
                            </td>
                          </tr>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/ongc.svg" class="img-fluid">
                              </div>
                            </td>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">ONGC</a></td>
                            <td>To be announced</td>
                            <td>-</td>
                            <td>-</td>
                            <td><a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid"><span class="txt">IPO Doc</span></a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="ipo_page_sec_blk">
                  <h4 class="heading_ttl">Recently Closed(2)</h4>
                  <div class="ipo_page_sec_blkinner">
                    <div class="table-responsive">
                      <table id="example1" class="table ipo_page_table" style="width:100%;">
                        <thead>
                          <tr>
                            <th></th>
                            <th>Company</th>
                            <th>Bid Date</th>
                            <th>Price Range</th>
                            <th>Issue Size</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/snapdeal.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Snapdeal</a></td>
                            <td>10 Jan - 15 Jan 2022</td>
                            <td>Rs. 160.00 - Rs. 160.00</td>
                            <td>90</td>
                            <td>
                              <button type="button" class="theme_btn apply_button"><span class="txt">Status</span></button>
                            </td>
                          </tr>

                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/nsdl.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Snapdeal</a></td>
                            <td>19 Dec - 25 Dec 2021</td>
                            <td>Rs. 600.00 - Rs. 620.50</td>
                            <td>14</td>
                            <td>
                              <a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid">
                                <span class="txt">IPO Doc</span></a>
                            </td>
                          </tr>
                        </tbody>


                      </table>
                    </div>
                  </div>
                </div>

                <div class="ipo_page_sec_blk">
                  <h4 class="heading_ttl">Recently Closed(2)</h4>
                  <div class="ipo_page_sec_blkinner">
                    <div class="table-responsive">
                      <table id="example1" class="table ipo_page_table ipo_page_table2" style="width:100%;">

                        <thead>
                          <tr>
                            <th></th>
                            <th>Company</th>
                            <th>Bid Date</th>
                            <th>Price Range</th>
                            <th>Issue Size</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/snapdeal.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Snapdeal</a></td>
                            <td>08 Feb ‘22</td>
                            <td>Rs. 218 - Rs. 230</td>
                            <td>3600 Cr</td>
                            <td>
                              <button type="button" class="theme_btn apply_button"><span
                                  class="txt">Status</span></button>
                            </td>
                            <td><button class="more_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/more.svg"
                                  class="img-fluid"></button></td>
                          </tr>

                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/nsdl.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Snapdeal</a></td>
                            <td>31 Jan ‘22</td>
                            <td>Rs. 166 - Rs. 175</td>
                            <td>680 Cr</td>
                            <td>
                              <a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid">
                                <span class="txt">IPO Doc</span></a>
                            </td>
                            <td><button class="more_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/more.svg"
                                  class="img-fluid"></button></td>
                          </tr>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/snapdeal.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Snapdeal</a></td>
                            <td>08 Feb ‘22</td>
                            <td>Rs. 218 - Rs. 230</td>
                            <td>3600 Cr</td>
                            <td>
                              <button type="button" class="theme_btn apply_button"><span
                                  class="txt">Status</span></button>
                            </td>
                            <td><button class="more_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/more.svg"
                                  class="img-fluid"></button></td>
                          </tr>

                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/nsdl.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Snapdeal</a></td>
                            <td>31 Jan ‘22</td>
                            <td>Rs. 166 - Rs. 175</td>
                            <td>680 Cr</td>
                            <td>
                              <a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid">
                                <span class="txt">IPO Doc</span></a>
                            </td>
                            <td><button class="more_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/more.svg"
                                  class="img-fluid"></button></td>
                          </tr>
                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/snapdeal.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Snapdeal</a></td>
                            <td>08 Feb ‘22</td>
                            <td>Rs. 218 - Rs. 230</td>
                            <td>3600 Cr</td>
                            <td>
                              <button type="button" class="theme_btn apply_button"><span
                                  class="txt">Status</span></button>
                            </td>
                            <td><button class="more_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/more.svg"
                                  class="img-fluid"></button></td>
                          </tr>

                          <tr class="">
                            <td>
                              <div class="ipo_table_img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/nsdl.svg" class="img-fluid">
                              </div>
                            </td>
                            <td><a href="<?php echo site_url().'/single-ipo';?>" class="name_link">Snapdeal</a></td>
                            <td>31 Jan ‘22</td>
                            <td>Rs. 166 - Rs. 175</td>
                            <td>680 Cr</td>
                            <td>
                              <a href="#" class="view_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/edit.svg" class="img-fluid">
                                <span class="txt">IPO Doc</span></a>
                            </td>
                            <td><button class="more_btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/more.svg"
                                  class="img-fluid"></button></td>
                          </tr>
                        </tbody>


                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-12 sidebar_quick_contact_blk">
             <?php get_sidebar('form') ?>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="ipo_page_sec_content_sec">
      <div class="container">

        <div class="ipo_page_sec_content_secinner">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 ipo_page_sec_content_box">
              <!-- <h3 class="heading_ttl">FREQUENTLY ASKED QUESTIONS</h3> -->
              <div class="ipo_page_sec_content_area">
                <div class="ipo_page_sec_content_areainner">
                  <?php
                  $post_id = 197;
                  $queried_post = get_post($post_id);
                  ?>
                  <?php echo $queried_post->post_content; ?>
                  
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section>
</main>

<?php get_footer() ?>
  <!--  <script src='https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js'></script>
  <script src='https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js'></script>
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script> -->

  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });

    $('.ipo_page_accordian_table tbody').find('.ipo_page_accordian_table_head').on('click', function () {
        // Adds Active Class
        $(this).toggleClass('active');
        // Expand or Collapse This Panel
        $(this).next().slideToggle(300, "swing");
        // Hide The Other Panels
        $('.ipo_page_accordian_table_body').not($(this).next()).slideUp(300, "swing");
        // Removes Active Class From Other Titles
        $('.ipo_page_accordian_table_head').not($(this)).removeClass('active');
    });

   
  </script>

    