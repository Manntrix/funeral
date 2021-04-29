<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Funeral
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<?php get_template_part( 'template-parts/content', 'footer' ); ?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDH30GIkvku_hCnaXUkCxHfy6aHGGmrwuU&callback=initMap&libraries=&v=weekly"
      async
    ></script>
<script>
$(document).ready(function(){
  $('#search').on("click",(function(e){
  $(".form-group").addClass("sb-search-open");
    e.stopPropagation()
  }));
   $(document).on("click", function(e) {
    if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
      $(".form-group").removeClass("sb-search-open");
    }
  });
    $(".form-control-submit").click(function(e){
      $(".form-control").each(function(){
        if($(".form-control").val().length == 0){
          e.preventDefault();
          $(this).css('border', '1px solid red');
        }
    })
  })
})
</script>
<script>
    /*$(function(){
    $('.selectpicker').selectpicker();
});*/
    
$('.dropdown-menu li').on('click', function() {
  var getValue = $(this).text();
  $('.dropdown-select span.contx').text(getValue);
});
</script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>-->
<script>
 /*   // Wait for the DOM to be ready
$().ready(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
 // validate signup form on keyup and submit
		$("#reg").validate({
			rules: {
				decreas_name: "required",
				desreas_date: "required",
				decrease_location: "required",
			//	"type_of_service[]": "required",
				mobile1: {
					required: true,
					minlength: 8
				},
				mobile2: {
					minlength: 8
				}
			},
			messages: {
				decreas_name: "Please enter Decrease name",
				desreas_date: "Please enter Decrease date",
				decrease_location: "Please enter Decrease location",
			//	type_of_service[]: "Please enter Decrease location",
				mobile1: {
					required: "Please enter a Mobile no",
					minlength: "Your mobile must consist of at least 8 characters"
				},
				mobile2: {
					minlength: "Your mobile2 must be at least 8 characters long"
				}
			
			}
		});
});*/
</script>
</body>
</html>
