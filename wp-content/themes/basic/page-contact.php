<?php get_header(); ?>


<!-- Contact us -->   
<div id="map"></div>

<section class="contact-1" id="contact">
  <div class="container">
    <div class="row contact-details">
      <div class="col-sm-8 text-center text-md-left mb-4">
        <h3>Ask us a question</h3>
        <form class="contact-form mt-4">
          <div class="row">
            <div class="col-md-5">
              <input type="text" class="form-control-custom mb-4" placeholder="Name" value="Your name">
            </div>
            <div class="col-md-5">
              <input type="text" class="form-control-custom mb-4" placeholder="Email address" value="Email address">
            </div>
            <br>
          </div>
          <div class="row">
            <div class="col-md-10">
              <textarea class="form-control-custom mb-4" rows="3">Your Message</textarea><br>
              <button type="submit" class="btn btn-primary btn-lg mb-4">Send Message</button>
            </div> 
          </div>
        </form>
      </div>
      <div class="col-sm-4 text-center text-md-left">
        <h3>Contact</h3>
        <h4 class="pt-4">Email</h4>
        <p>hello@startup.co</p>
        <h4 class="pt-2">Phone</h4>
        <p>+111 234 567 89</p>
        <h4 class="pt-2">Address</h4>
        <p>1 Street Name, City, Zip Code<br>
        United States</p>
        <ul class="social">
          <li><a href="#" title="Facebook" class="fa fa-facebook"></a></li>
          <li><a href="#" title="Twitter" class="fa fa-twitter"></a></li>
          <li><a href="#" title="Google+" class="fa fa-google"></a></li>
          <li><a href="#" title="Dribbble" class="fa fa-dribbble"></a></li>
          <li><a href="#" title="Instagram" class="fa fa-instagram"></a></li>
          <div class="clear"></div>
        </ul>
      </div>
    </div>
  </div>
</section>

<!--  Testimonials -->
<section class="testimonial-4 text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 offset-sm-2">
        <blockquote>
          <p class="quote-text">"We shall not cease from exploration, and the end of all our exploring will be to arrive where we started and know the place for the first time."</p>
          <p><span class="quote-author">T. S. Elliot</span></p>
        </blockquote>
      </div>
    </div>
  </div>
</section>

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