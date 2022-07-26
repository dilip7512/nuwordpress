<?php 
/**
* Template Name: Coupon
*
*/
get_header() ?>

<main class="body_container">

	<section class="single_blog_top_content_sec">

    


   <div class="container">
    <?php
        // echo "string";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"https://api.grabon.in/token");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,
                    "grant_type=password&username=4f4d65ff-aa6f-5db8-c50f-d62a8546ed25&password=bc190c0a-2bdd-efe0-ad3c-3bf3edd9a6f1");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // In real life you should use something like:
        // curl_setopt($ch, CURLOPT_POSTFIELDS, 
        //          http_build_query(array('postvar1' => 'value1')));

        // Receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);
        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
        print_r($error_msg);die();
        }
        curl_close ($ch);
        // print_r($server_output);die();
        if (!empty($server_output)) {
        $resp = json_decode($server_output);
        $accesstoken = $resp->access_token;
        $tokentype = $resp->token_type;
       // header('Content-Type: application/json');  Specify the type of data
        $ch = curl_init('https://api.grabon.in/api/coupon/getall'); // Initialise cURL
        $post = ''; // Encode the data array into a JSON string
        $authorization = "Authorization: ".$tokentype.' '.$accesstoken; // Prepare the authorisation token
        // echo $authorization;
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization )); // Inject the token into the header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 0); // Specify the request method as POST
        //  curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects
        $result = curl_exec($ch); // Execute the cURL statement
        curl_close($ch); // Close the cURL connection
        // print_r(json_decode($result));
        // die();
        $result = json_decode($result);
      }
    ?>


    <?php
      if(isset($result)){
          foreach ($result as $key => $value) {
            if (is_array($value) || is_object($value))
            {
              
            foreach ($value as $valkey => $val) {
              // print_r($val);
              ?> <h4>CouponID:- <?php echo $val->Coupon_ID; ?> </h4>
                 <h5>Valid City:- <?php echo $val->VALID_CITY; ?> </h5>  
                 <h5>Coupon Heading:- <?php echo $val->Coupon_Heading; ?> </h5>  
                 <h5>Merchant Name:- <?php echo $val->Merchant_Name; ?> </h5>  
                 <img src="<?php echo $val->IMG_URL_1; ?>"> 
                 <img src="<?php echo $val->IMG_URL_2; ?>"> 
                 <img src="<?php echo $val->IMG_URL_3; ?>"> 
                 <img src="<?php echo $val->IMG_URL_4; ?>"> 
                 <img src="<?php echo $val->IMG_URL_5; ?>"> 
                 <img src="<?php echo $val->IMG_URL_6; ?>"> 
                 <img src="<?php echo $val->IMG_URL_7; ?>"> 
                 <h5>Coupon Price:- <?php echo $val->Coupon_PRICE; ?> </h5>  
                 <h6>Discount:- <?php echo $val->Discount; ?> </h6>  
                 <h6>Saving On Coupon:- <?php echo $val->SAVING_OnCoupon; ?> </h6>  
                 <h6>Discount Percentage:- <?php echo $val->Discount_Percentage; ?> </h6>  
                 <h6>Coupon Type Name:- <?php echo $val->Coupon_Type_Name; ?> </h6>  
                 <h6>Premium Flag:- <?php echo $val->PREMIUM_Flag; ?> </h6>  
                 <h6>Redeem Location:- <?php echo $val->Redeem_Location; ?> </h6>  
                 <h6>Coupon Category:- <?php echo $val->Coupon_Category; ?> </h6>  
                 <h6>Coupon Banks:- <?php echo $val->Coupon_Banks; ?> </h6>  
                 <h6>Coupon Type:- <?php echo $val->Coupon_TYPE; ?> </h6>  
                 <h6>Coupon Conditions:- <?php echo $val->Coupon_Conditions; ?> </h6>
                 <h6>Coupon Validity:- <?php echo $val->Coupon_Validity; ?> </h6>  
                 <h6>Offer Code:- <?php echo $val->Offer_Code; ?> </h6>  
                 <h6>Coupon URL:- <?php echo $val->Coupon_URL; ?> </h6>  
                 <h6>Coupon Mobile URL:- <?php echo $val->Coupon_Mobile_URL; ?> </h6> 
                 <h6>Coupon Affiliate URL:- <?php echo $val->Coupon_Affiliate_URL; ?> </h6>  
                 <h6>Coupon Steps To Redeem:- <?php echo $val->Coupon_StepsToRedeem; ?> </h6>  
                <hr>          
              <?php
            // die();
            
            }
          }
          }
        }

    ?>

   </div> 
   </section>   
   

</main>


<?php get_footer() ?>