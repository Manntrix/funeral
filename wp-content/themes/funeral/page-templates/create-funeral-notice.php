<?php
/**
*
* Template Name: Funeral-notice
*
* The template for displaying content in full width.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package KJL
*/
get_header();
 session_start();
// echo "<pre>";
     //print_r($_SESSION['pvalue']);
   // $pvalue= $_SESSION['pvalue'];
    /*$url=$_SERVER['HTTP_REFERER'];
  $url = trim($url, '/');
   $url = explode('/', $url);
    echo $lastPart = array_pop($url);
    if($lastPart=="notice")
    {
       $pvalue= $_SESSION['pvalue'];  
    }*/
    global $wpdb;

    //$posts = $wpdb->wp_posts;
    $table_name = $wpdb->prefix . "decrease_details";
    $lastid= $_GET['lastid'];
    $result = $wpdb->get_results( "SELECT * FROM  $table_name WHERE id =  $lastid "  );
    //echo "SELECT * FROM  $table_name WHERE 'id' =  $lastid " ;
    //print_r($result[0]);
    if(isset($result[0]))
    {
      $pvalue['decreas_name']= $result[0]->decreas_name; 
      $pvalue['desreas_date']= $result[0]->desreas_date;
      $pvalue['decrease_location']= $result[0]->decrease_location; 
      $pvalue['type_of_service']= unserialize($result[0]->type_of_service); 
      $pvalue['time_of_service']= unserialize($result[0]->time_of_service); 
      $pvalue['date_of_service']= unserialize($result[0]->date_of_service); 
      $pvalue['address_of_service']= unserialize($result[0]->address_of_service); 
      $pvalue['service_note']= unserialize($result[0]->service_note); 
      $pvalue['img']= $result[0]->img; 
      $pvalue['mobile1']= $result[0]->mobile1; 
     $pvalue['mobile2']= $result[0]->mobile2; 
     $pvalue['socialshare']= $result[0]->socialshare; 

      
    }
    
    
?>
  
<!-- Content start -->
<section class="create">
  <div class="container">
      <form method = "post" action="<?php echo site_url(); ?>/notice/" id="reg" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-12">
        <h3>Details of the deceased</h3>
 
          <div class="form-group">
            <input type="text" class="form-control" name="decreas_name" placeholder="Deceased Name" value="<?php echo  (isset($pvalue['decreas_name'])) ? $pvalue['decreas_name'] : ''; ?>">
           <input type="hidden" name="id" id="id" value="<?php echo  (isset($lastid)) ? $lastid : ''; ?>">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" name="desreas_date" placeholder="Date of creation" value="<?php echo  (isset($pvalue['desreas_date'])) ? $pvalue['desreas_date'] : ''; ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="decrease_location" placeholder="Location" value="<?php echo  (isset($pvalue['decrease_location'])) ? $pvalue['decrease_location'] : ''; ?>">
          </div>
      
      </div>
    </div>
    <?php
    if(isset($pvalue))
    {
     $lengt=count($pvalue['type_of_service']);
    }
    if($lengt==0)
    {
    ?>
     <div class="service-detail">
      <div class="row">
        <div class="col-md-12">
          <h3>Funeral service details</h3>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Type of service" name="type_of_service[]" value="<?php echo  (isset($pvalue['type_of_service'][$x])) ? $pvalue['type_of_service'][$x] : ''; ?>" id="type_of_service_1">
              
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Time of service" name="time_of_service[]" value="<?php echo  (isset($pvalue['time_of_service'][$x])) ? $pvalue['time_of_service'][$x] : ''; ?>" id="time_of_service_1" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="date" class="form-control" placeholder="Date of service" name="date_of_service[]" value="<?php echo  (isset($pvalue['date_of_service'][$x])) ? $pvalue['date_of_service'][$x] : ''; ?>" id="date_of_service_1">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Address of service" name="address_of_service[]" value="<?php echo  (isset($pvalue['address_of_service'][$x])) ? $pvalue['address_of_service'][$x] : ''; ?>" id="address_of_service_1">
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="service_note[]" id="service_note_1" cols="30" rows="7" class="form-control" placeholder="Important Note"><?php echo  (isset($pvalue['service_note'][$x])) ? $pvalue['service_note'][$x] : ''; ?></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
   <!--<div class="col-md-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.779202311461!2d-83.18111668492055!3d34.609744395592095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8858946c480d669d%3A0x2cd5c4a02f9b7dc4!2s170%20Ken%20Pat%20Acres%20Rd%2C%20Westminster%2C%20SC%2029693%2C%20USA!5e0!3m2!1sen!2sin!4v1617864390699!5m2!1sen!2sin" width="" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>-->
   <div class="col-md-12"><div id="map" class="map" style="height:400px;" ></div></div>
          <input id="submit" type="button" value="Set Google Map location" />
   
      </div>
    </div> 
    <?php
    }
    else
    {
    //print_r($pvalue);
     for ($x = 0; $x < $lengt; $x++) {
    ?>
    <div class="service-detail <?php echo  (($x!=0) ? 'event-new-'.($x+1) : ''); ?>">
      <div class="row">
        <div class="col-md-12">
          <h3>Funeral service details</h3>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Type of service" name="type_of_service[]" value="<?php echo  (isset($pvalue['type_of_service'][$x])) ? $pvalue['type_of_service'][$x] : ''; ?>" id="type_of_service_<?php echo $x+1; ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="Time of service" name="time_of_service[]" value="<?php echo  (isset($pvalue['time_of_service'][$x])) ? $pvalue['time_of_service'][$x] : ''; ?>" id="time_of_service_<?php echo $x+1; ?>" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="date" class="form-control" placeholder="Date of service" name="date_of_service[]" value="<?php echo  (isset($pvalue['date_of_service'][$x])) ? $pvalue['date_of_service'][$x] : ''; ?>" id="date_of_service_<?php echo $x+1; ?>">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Address of service" name="address_of_service[]" value="<?php echo  (isset($pvalue['address_of_service'][$x])) ? $pvalue['address_of_service'][$x] : ''; ?>" id="address_of_service_<?php echo $x+1; ?>">
              </div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="service_note[]" id="service_note_<?php echo $x+1; ?>" cols="30" rows="7" class="form-control" placeholder="Important Note"><?php echo  (isset($pvalue['service_note'][$x])) ? $pvalue['service_note'][$x] : ''; ?></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <!--<div class="col-md-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.779202311461!2d-83.18111668492055!3d34.609744395592095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8858946c480d669d%3A0x2cd5c4a02f9b7dc4!2s170%20Ken%20Pat%20Acres%20Rd%2C%20Westminster%2C%20SC%2029693%2C%20USA!5e0!3m2!1sen!2sin!4v1617864390699!5m2!1sen!2sin" width="" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>-->
        <!--<div class="col-md-12"> <div id="map" class="map"></div></div>-->
     
      <?php
      if(($x!=0))
      {
      ?>
      <div class="col-md-12"><span class="pull-right"><a href="javascript:void(0)" class="btn btn-danger delete-event-service" data-counter="<?php echo $x+1; ?>">Delete</a></span></div>
      <?php
      } 
      ?>
      </div>
    </div>
    
    <?php
     }
    }
    ?>
    
    <div class="row">
      <div class="col-md-12 faqCenter">
        <div class="headerButton"><a href="javascript:void(0)" class="actbtn" id="event_add">Add another event</a></div> 
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="uploadDec">
          <div class="decaseImg"><img src="<?php echo  (isset($pvalue['img'])) ? site_url().'/wp-content/uploads/decreaseimg/'.$pvalue['img'] : get_stylesheet_directory_uri().'/assets/img/decased.jpg'; ?>" id="uploaded_image" alt=""/></div>
          <div class="file btn">
            Add or change picture of the deceased
            <input type="file" name="image"  class="image" id="upload_image" accept="image/*"/>
            <input type="hidden" name="img" id="img" value="<?php echo  (isset($pvalue['img'])) ? $pvalue['img'] : ''; ?>">
          </div>
        </div>
      </div>
      		<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
			  	<div class="modal-dialog modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title">Crop Image Before Upload</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
			        		<div class="img-container">
			            		<div class="row">
			                		<div class="col-md-8">
			                    		<img src="" id="sample_image" />
			                		</div>
			                		<div class="col-md-4">
			                    		<div class="preview"></div>
			                		</div>
			            		</div>
			        		</div>
			      		</div>
			      		<div class="modal-footer">
			      			<button type="button" id="crop" class="btn btn-primary">Crop</button>
			        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			      		</div>
			    	</div>
			  	</div>
			</div>	
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3>SMS mobile Device number</h3>
        <div class="row mobileInfo">
          <div class="col-md-6">
            <!--
                        <div class="form-group">
              <label>First mobile device number</label>
                            <input type="text" class="form-control" placeholder="Type of service">
                        </div>
            -->
            <div class="form-group">
              <label>First mobile device number</label>
              <input type="tel" name="mobile1" class="form-control" value="<?php echo  (isset($pvalue['mobile1'])) ? $pvalue['mobile1'] : ''; ?>" placeholder="Mobile">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>2nd mobile device number</label>
              <input type="tel" name="mobile2" class="form-control" value="<?php echo  (isset($pvalue['mobile2'])) ? $pvalue['mobile2'] : ''; ?>" placeholder="Optional">
            </div>
          </div>
        </div>
        <div class="enableSharing">
          <div class="checkbox switcher">
            <label for="test1">
              <span class="enbl">Enable Facebook sharing</span>
              <input type="checkbox" name="socialshare" id="test1" value="1" <?php echo  (($pvalue['socialshare']==1)) ? 'checked' : ''; ?>>
              <span class="enableHandle"><small></small></span>
            </label>
          </div>
        </div>
        <div class="previewNotice"><button type="submit" name="liquor_submit" class="previewBtn">Preview your funeral notice</button></div>
      </div>
    </div>
      </form>
  </div>
</section>

    
<!-- Content end -->
<?php
get_footer();
?>


<script>

$(document).ready(function(){

	var $modal = $('#modal');

	var image = document.getElementById('sample_image');

	var cropper;

	$('#upload_image').change(function(event){
		var files = event.target.files;

		var done = function(url){
			image.src = url;
			$modal.modal('show');
		};

		if(files && files.length > 0)
		{
			reader = new FileReader();
			reader.onload = function(event)
			{
				done(reader.result);
			};
			reader.readAsDataURL(files[0]);
		}
	});

	$modal.on('shown.bs.modal', function() {
		cropper = new Cropper(image, {
			aspectRatio: 1,
			viewMode: 3,
			preview:'.preview'
		});
	}).on('hidden.bs.modal', function(){
		cropper.destroy();
   		cropper = null;
	});

	$('#crop').click(function(){
		canvas = cropper.getCroppedCanvas({
			width:400,
			height:400
		});

		canvas.toBlob(function(blob){
			url = URL.createObjectURL(blob);
			var reader = new FileReader();
			reader.readAsDataURL(blob);
			reader.onloadend = function(){
				var base64data = reader.result;
				 var data = {
        action: 'my_action',
        image:base64data
    };
   var ajaxurl ="<?php echo admin_url('admin-ajax.php'); ?>";
				$.ajax({
					url:ajaxurl,
					method:'POST',
					data:data,
					success:function(data)
					{
					    
						$modal.modal('hide');
						data=data.slice(0, -1);
								//alert(data);
					var ul= "<?php echo site_url().'/wp-content/uploads/decreaseimg/' ?>"+data;
				
						$('#uploaded_image').attr('src', ul);
						$('#img').val(data)
					}
				});
			};
		});
	});
	
});
</script>