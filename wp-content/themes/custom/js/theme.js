jQuery.noConflict();
(function( $ ) {
  $(function() {

      $('img').removeAttr('width').removeAttr('height');

      $('#toggle-text').on('click', function() {
        $('.slider .portfolio__content').toggleClass('toggle-content');
        $(this).toggleClass('hide-text');
        if ( $( this ).hasClass( "hide-text" ) ){
          $(this).text('show text >');
        } else {
          $(this).text('< hide text');
        }

      });

  });
})(jQuery);
