<?php

  //response generation function

  $response = "";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;

    if($type == "success") $response = "<div class='success'>{$message}</div>";
    else $response = "<div class='error'>{$message}</div>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

  if(!$human == 0){
    if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);

?>

<?php get_header(); ?>


<!-- Contact us -->   
<div id="map"></div>

<section class="contact-1" id="contact">
  <div class="container">
    <div class="row contact-details">
      <div class="col-sm-8 text-center text-md-left mb-4">
        <h3>Ask us a question</h3>


        <div id="respond">
          <?php echo $response; ?>
          <form action="<?php the_permalink(); ?>" method="post" class="contact-form mt-4">
            <div class="row">
              <div class="col-md-5">
                <input type="text" name="message_name" class="form-control-custom mb-4" value="<?php echo esc_attr($_POST['message_name']); ?>" placeholder="Name">
              </div>
              <div class="col-md-5">
                <input type="text" name="message_email" class="form-control-custom mb-4" value="<?php echo esc_attr($_POST['message_email']); ?>" placeholder="Email address">
              </div>
              <div class="col-md-10">
                <textarea type="text" name="message_text" class="form-control-custom mb-4" placeholder="Your Message" ><?php echo esc_textarea($_POST['message_text']); ?></textarea>
                <br>
                <input type="hidden" name="submitted" value="1">
                <!-- <div><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></div> -->

                <button type="submit" class="btn btn-primary btn-lg mb-4">Send Message</button>
              </div>

            </div>
          </form>
        </div>



      </div>
      <div class="col-sm-4 text-center text-md-left">
        <h3>Contact</h3>
        <h4 class="pt-4">Email</h4>
        <p><?php echo get_theme_mod('email', 'hello@example.co.nz') ?></p>
        <h4 class="pt-2">Phone</h4>
        <p><?php echo get_theme_mod('phone', '07 3462 760') ?></p>
        <h4 class="pt-2">Address</h4>
        <p><?php echo get_theme_mod('street', '1304 Ranolf Street') ?>, <?php echo get_theme_mod('city', 'Rotorua') ?>, <?php echo get_theme_mod('post', '3010') ?><br>
        <?php echo get_theme_mod('country', 'New Zealand') ?></p>
        <ul class="social">
          <li><a target="blank" href="<?php echo get_theme_mod('facebook', 'https://www.facebook.com/DubzzDigitalMarketing/') ?>" title="Facebook" class="fa fa-facebook"></a></li>
          <li><a target="blank" href="<?php echo get_theme_mod('twitter', 'https://twitter.com/dubzzdmarketing') ?>" title="Twitter" class="fa fa-twitter"></a></li>
          <li><a target="blank" href="<?php echo get_theme_mod('google', 'https://plus.google.com/u/0/b/115246935560925901449/+DubzzCoNz') ?>" title="Google+" class="fa fa-google"></a></li>
          <li><a target="blank" href="<?php echo get_theme_mod('instagram', 'https://www.instagram.com/dubzzdigital/') ?>" title="Instagram" class="fa fa-instagram"></a></li>
          <li><a target="blank" href="<?php echo get_theme_mod('pinterest', 'https://nz.pinterest.com/dubzzdmarketing/') ?>" title="Pinterest" class="fa fa-pinterest-p"></a></li>
          <li><a target="blank" href="<?php echo get_theme_mod('directions', 'https://www.google.co.nz/maps/place/Dubzz+Digital+Marketing/@-38.1396099,176.2451556,17z/data=!3m1!4b1!4m5!3m4!1s0x6d6c276e405e6af9:0xe5421c618ee14c67!8m2!3d-38.1396099!4d176.2473443') ?>" title="Directions" class="fa fa-map-marker"></a></li>
          <div class="clear"></div>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'includes/testimonials' ) ?>

<script>
  function initMap() {
    var myLatLng = {lat: -38.1396099, lng: 176.2473443};

    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      scrollwheel: false,
      zoom: 14
    });



    // Create a marker and set its position.
    var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'My Location!'
    });
  }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtxqwb-9TB4RCoYX1XnJ2_QQYReNhx_0M&callback=initMap"
async defer></script>

<?php get_footer(); ?>