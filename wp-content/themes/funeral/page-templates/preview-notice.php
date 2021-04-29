<?php
/**
*
* Template Name: preview-notice
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
//echo "<pre>";
//print_r($_POST)
function getLatLong($address){
    if(!empty($address)){
        //Formatted address
        $formattedAddr = str_replace(' ','+',$address);
        //Send request and receive json data by address
        $geocodeFromAddr = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false&key=AIzaSyDH30GIkvku_hCnaXUkCxHfy6aHGGmrwuU'); 
        $output = json_decode($geocodeFromAddr);
        //Get latitude and longitute from json data
        $data['latitude']  = $output->results[0]->geometry->location->lat; 
        $data['longitude'] = $output->results[0]->geometry->location->lng;
        //Return latitude and longitude of the given address
        if(!empty($data)){
            return $data;
        }else{
            return false;
        }
    }else{
        return false;   
    }
}
if( isset($_POST['liquor_submit']) ) 
{
    $id=$_POST['id'];
    $decreas_name = $_POST['decreas_name'];
      $desreas_date  = $_POST['desreas_date'];  //You forgot to collect data from "description" field
      $decrease_location = $_POST['decrease_location'];
      $type_of_service  = serialize($_POST['type_of_service']); 
      $date_of_service  = serialize($_POST['date_of_service']); 
      $time_of_service  = serialize($_POST['time_of_service']); 
      $address_of_service  = serialize($_POST['address_of_service']); 
      $service_note  = serialize($_POST['service_note']); 
      $mobile1 = $_POST['mobile1'];
      $mobile2  = $_POST['mobile2'];  //You forgot to collect data from "description" field
     // $filename = $_FILES["img"]["name"];
     /* $tempname = $_FILES["img"]["tmp_name"];  
      $upload_dir = wp_upload_dir();
      $folder = $upload_dir['basedir']."/decreaseimg/";
      $filename = wp_unique_filename( $folder, $_FILES['img']['name'] );
       move_uploaded_file($_FILES['img']['tmp_name'], $folder .'/'. $filename);*/
      
      //$img = 'jj';
      if(isset($_POST['socialshare']))
      {
      $socialshare = $_POST['socialshare'];
      }
      else
      {
       $socialshare = 0;    
      }

      global $wpdb; //removed $name and $description there is no need to assign them to a global variable
      $table_name = $wpdb->prefix . "decrease_details"; //try not using Uppercase letters or blank spaces when naming db tables
    if(empty($id))
    {
      $wpdb->insert($table_name, array(
                                'decreas_name' => $decreas_name, //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'desreas_date' => $desreas_date,
                                'decrease_location' => $decrease_location, //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'type_of_service' => $type_of_service,
                                'date_of_service' => $date_of_service, //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'time_of_service' => $time_of_service,
                                'address_of_service' => $address_of_service, //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'service_note' => $service_note,
                                'mobile1' => $mobile1, //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'mobile2' => $mobile2,
                                'img' => $_POST['img'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'socialshare' => $socialshare
                                )//replaced %d with %s - I guess that your description field will hold strings not decimals
        );
         $lastid = $wpdb->insert_id;
    }
    else
    {
         
         $wpdb->update('table_name', array('id'=>$id, 'title'=>$title, 'message'=>$message), array('id'=>$id));
               $wpdb->update($table_name, array(
                                'id'=>$id,
                                'decreas_name' => $decreas_name, //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'desreas_date' => $desreas_date,
                                'decrease_location' => $decrease_location, //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'type_of_service' => $type_of_service,
                                'date_of_service' => $date_of_service, //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'time_of_service' => $time_of_service,
                                'address_of_service' => $address_of_service, //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'service_note' => $service_note,
                                'mobile1' => $mobile1, //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'mobile2' => $mobile2,
                                'img' => $_POST['img'], //replaced non-existing variables $lq_name, and $lq_descrip, with the ones we set to collect the data - $name and $description
                                'socialshare' => $socialshare
                                )//replaced %d with %s - I guess that your description field will hold strings not decimals
                                , array('id'=>$id)
        );
         $lastid = $id;
    }
    session_start();
    $_SESSION['pvalue']=array();
     $_SESSION['pvalue'] = $_POST;
     // print_r($_SESSION['pvalue']);
}
?>
<!-- Content start -->
<section class="previewNoticetop">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                    <h2>Your Funeral Notice preview.</h2>
                    <p>Please use this preview to check all the details are correct.
                                                            When complete, proceed to 'Finish and pay' to recieve your SMS text link for the Funeral Notice you created.
                            Any changes will automatically appear when your guests revisit the Funeral Notice.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"></div>
        </div>
    </div>
</section>
<section class="previewNoticeMiddle">
    <div class="container">
        <div class="row">
            <div class="col-md-12 phoneMain">
                <div class="phoneBg">
                    <div class="phoneInner">
                        <div class="phoneLogo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" title="Logo" alt="Logo" class="img-responsive" /></a></div>
                       <div class="infoA">
                           <?php
                           if($_POST['img']!='')
                           {
                           ?>
                           <img src="<?php echo site_url().'/wp-content/uploads/decreaseimg/'.$_POST['img']; ?>" >
                           <?php
                           }
                           ?>
                           <h4><strong><?php echo $_POST['decreas_name']; ?></strong></h4>
                           <p>It is with sadness that we announce the passing of <?php echo $_POST['decreas_name']; ?>. Details of the funeral arrangements are provided below.</p>
                       </div>
                       <?php
                       $lengt=count($_POST['type_of_service']); 
                        for ($x = 0; $x < $lengt; $x++) {
                        ?>
                         <div class="infoPack">
                            <ul id = "myTab" class = "nav nav-tabs">
                               <li>
                                  <a href = "#t<?php echo $x; ?>1" class = "active" data-toggle = "tab">
                                     Funeral Arrangements
                                  </a>
                               </li>
                               <li><a href = "#t<?php echo $x; ?>2" data-toggle = "tab">Click here for more information</a></li>
                            </ul>

                            <div id = "myTabContent" class = "tab-content">

                               <div class = "tab-pane fade in active" id = "t<?php echo $x; ?>1">
                                  <div class="mapBg">
                                    <h3><?php echo $_POST['type_of_service'][$x]; ?></h3>
                                   <h4><?php echo $_POST['date_of_service'][$x]; ?></h4>
                                   <p><?php echo $_POST['time_of_service'][$x]; ?></p>
                                   <p><?php echo $_POST['address_of_service'][$x]; ?></p>
                                      <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.779202311461!2d-83.18111668492055!3d34.609744395592095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8858946c480d669d%3A0x2cd5c4a02f9b7dc4!2s170%20Ken%20Pat%20Acres%20Rd%2C%20Westminster%2C%20SC%2029693%2C%20USA!5e0!3m2!1sen!2sin!4v1617864390699!5m2!1sen!2sin" width="" height="230" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                                   <!--<div id="map_<?php //echo $x; ?>" style="height:230px;"></div>-->
                                   <?php
                                   $address=$_POST['address_of_service'][$x];
                         $output= getLatLong($address);
                         $latitude=$output['latitude'];
                          $longitude=$output['longitude'];
      // print_r($output);
                                   ?>
                                   <iframe
  width=""
  height="230"
  style="border:0"
  loading="lazy"
  allowfullscreen
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDH30GIkvku_hCnaXUkCxHfy6aHGGmrwuU
    &q=<?php echo $latitude; ?>, <?php echo $longitude; ?>">
</iframe>
                                   </div>
                                   <div class="getDirect"><a target="_blank" href="https://www.google.com/maps?daddr=<?php echo $_POST['address_of_service'][$x]; ?>">Get directions</a></div>
                               </div>

                               <div class = "tab-pane fade" id = "t<?php echo $x; ?>2">
                                  <p><?php echo $_POST['service_note'][$x]; ?></p>
                               </div>

                              
                            </div>
                        </div>
  
                        <?php
                        }
                       ?>
                        <!--<div class="infoPack">
                            <ul id = "myTab" class = "nav nav-tabs">
                               <li class = "active">
                                  <a href = "#t1" data-toggle = "tab">
                                     Funeral Arrangements
                                  </a>
                               </li>
                               <li><a href = "#t2" data-toggle = "tab">Click here for more information</a></li>
                            </ul>

                            <div id = "myTabContent" class = "tab-content">

                               <div class = "tab-pane fade in active" id = "t1">
                                  <div class="mapBg">
                                    <h3>church site</h3>
                                   <h4>Friday 23rd April 2021</h4>
                                   <p>11am</p>
                                   <p>Demo text will be here</p>
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.779202311461!2d-83.18111668492055!3d34.609744395592095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8858946c480d669d%3A0x2cd5c4a02f9b7dc4!2s170%20Ken%20Pat%20Acres%20Rd%2C%20Westminster%2C%20SC%2029693%2C%20USA!5e0!3m2!1sen!2sin!4v1617864390699!5m2!1sen!2sin" width="" height="230" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                   </div>
                                   <div class="getDirect"><a href="#">Get directions</a></div>
                               </div>

                               <div class = "tab-pane fade" id = "t2">
                                  <p>Demo text</p>
                               </div>

                              
                            </div>
                        </div>
                        <div class="infoPack">
                            <ul id = "myTab2" class = "nav nav-tabs">
                               <li class = "active">
                                  <a href = "#t3" data-toggle = "tab">
                                     Funeral Arrangements
                                  </a>
                               </li>
                               <li><a href = "#t4" data-toggle = "tab">Click here for more information</a></li>
                            </ul>

                            <div id = "myTabContent" class = "tab-content">

                               <div class = "tab-pane fade in active" id = "t3">
                                  <div class="mapBg">
                                    <h3>church site</h3>
                                   <h4>Friday 23rd April 2021</h4>
                                   <p>11am</p>
                                   <p>Demo text will be here</p>
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.779202311461!2d-83.18111668492055!3d34.609744395592095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8858946c480d669d%3A0x2cd5c4a02f9b7dc4!2s170%20Ken%20Pat%20Acres%20Rd%2C%20Westminster%2C%20SC%2029693%2C%20USA!5e0!3m2!1sen!2sin!4v1617864390699!5m2!1sen!2sin" width="" height="230" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                   </div>
                                   <div class="getDirect"><a href="#">Get directions</a></div>
                               </div>

                               <div class = "tab-pane fade" id = "t4">
                                  <p>Demo text</p>
                               </div>

                              
                            </div>
                        </div>-->
                        
                        
                        
                        <div class="phnBtm">
                            <p>You can also share this Funeral Notice by:</p>
                            <?php
      if(isset($_POST['socialshare']))
      {
                            ?>
                            <div class="shareBtns"><a class="ss-button facebook" href="javascript:FB.ui({method: 'share',href: 'https://afuneralnotice.com/preview-notice/294bea2b',title: 'your_title', picture: 'http://mydevfactory.com/~rezaul/funeral/wp-content/uploads/decreaseimg/1619073788.png', caption: 'your_caption', description: 'your_description'}, function(response){});" style="padding: 1em;display: block;font-size:1.5em;">Facebook <i class="fab fa-facebook-f"></i></a></div>
                 <?php
      }
                 ?>
                            <p>This Funeral Notice was provided by <a href="#">afuneralnotice.com</a>. To create a Funeral Notice for an upcoming funeral service please visit our website.</p>
                            <div class="phoneLogo"><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" title="Logo" alt="Logo" class="img-responsive" /></a></div>
                            <p>&copy; 2021 All rights reserved | <a href="#">Disclaimer</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="pvBtns">
                    <a href="<?php echo site_url(); ?>/create-funeral-notice/?lastid=<?php echo $lastid; ?>">Edit your Funeral Notice</a>
                    <a href="<?php echo site_url(); ?>/payment/?lastid=<?php echo $lastid; ?>">Pay and send your Funeral Notice</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content end -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                appId            : '163850875624543',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v10.0'
            });
        };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
<?php
get_footer();
