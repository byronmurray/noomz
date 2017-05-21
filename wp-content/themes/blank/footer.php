<footer class="footer-3">
  <div class="container">
    <div class="row pt-3">
      <div class="col-md-6 text-center text-md-left mt-2 mb-3 pt-1">
        <p>Copyright © YourStartup. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-center text-md-right mb-4">
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
</footer>

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


<?php wp_footer(); ?>
</body>
</html>