
  <div class="sidebar_quick_contact_blkinner">
    <div class="sidebar_quick_contact_form_area calculatior_list_area" id="sidebar">
      <h4>Categories</h4>
      <div class="calculatior_list_areainner">
        <ul>
          <?php
            $offering_args = array(
            'post_type' => 'page',
            'posts_per_page' => 30,
            'category_name' => 'Calculators'
            );
            $offering_posts = new WP_Query($offering_args);
            while($offering_posts->have_posts()){
            $offering_posts->the_post();
          ?>
              <li><a href="<?php the_permalink()?>"><?php the_title();?></a></li>
          <?php }?>
        </ul>
      </div>      
    </div>

    <div class="open_account_btn_area">         
      <a href="#" class="open_account_btn">Open Demat Account</a>
    </div>
  </div>

