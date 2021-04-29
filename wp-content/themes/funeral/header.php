<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Funeral
 */
$logo = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $logo , 'full' );


?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        
		<link rel="stylesheet" type="text/css" href="https://unpkg.com/dropzone/dist/dropzone.css" />
		<link href="https://unpkg.com/cropperjs/dist/cropper.css" type="text/css" rel="stylesheet"/>
		<script src="https://unpkg.com/dropzone"></script>
		<script src="https://unpkg.com/cropperjs"></script> 
		<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
	
		<style>
     

		.image_area {
		  position: relative;
		}

		img {
		  	display: block;
		  	max-width: 100%;
		}

		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}

		.overlay {
		  position: absolute;
		  bottom: 10px;
		  left: 0;
		  right: 0;
		  background-color: rgba(255, 255, 255, 0.5);
		  overflow: hidden;
		  height: 0;
		  transition: .5s ease;
		  width: 100%;
		}

		.image_area:hover .overlay {
		  height: 50%;
		  cursor: pointer;
		}

		.text {
		  color: #333;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}

 

		</style>
			<script>
    function initMap() {
          const myLatLng = { lat: -25.363, lng: 131.044 };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 8,
          center: myLatLng,
        });
        
        new google.maps.Marker({
        position: myLatLng,
        map,
        //title: "Hello World!",
        });
        var ids='address_of_service_1';
        const geocoder = new google.maps.Geocoder();
        document.getElementById("submit").addEventListener("click", () => {
          geocodeAddress(geocoder, map, ids);
        });
      }

      function geocodeAddress(geocoder, resultsMap, ids) {
        const address = document.getElementById(ids).value;
        geocoder.geocode({ address: address }, (results, status) => {
          if (status === "OK") {
            resultsMap.setCenter(results[0].geometry.location);
            new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location,
            });
          } else {
            alert(
              "Please enter a valid address"
            );
          }
        });
      }
    </script>
     
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="toTop">
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header class="headerWide" style="background: url(<?php echo get_header_image()?>); background-size: cover">
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-sm-5 col-md-4">
                    <div class="logobg">
                        <a href="<?php echo home_url()?>"><img src="<?php echo $image[0] ?>" title="Logo" alt="Logo" class="img-responsive" /></a>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-7 col-md-8">
                    <nav>
                        <div class="navigation">
                            <div class="navbar-header">
                                <button data-target="#navbar" data-toggle="collapse" class="navbar-toggle" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id="navbar">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'primary',
                                    'items_wrap'     => '<ul class="nav navbar-nav">%3$s</ul>',
                                ) );
                                ?>
                            </div>
                            <div class="ntc"><a href="<?php echo site_url().'/create-funeral-notice/'; ?>">Create a Funeral Notice</a></div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 headerTxt">
                    <?php if(is_front_page()){
                        ?>
                        <h6><?php echo esc_html(get_theme_mod('Funeral_topheader_text')); ?></h6>
                        <h1><?php echo esc_html(get_theme_mod('Funeral_header_text')); ?></h1>
                        <h5><?php echo esc_html(get_theme_mod('Funeral_subheader_text', '#')); ?></h5>
                        <div class="headerButton"><a href="#" class="actbtn"><?php echo esc_html(get_theme_mod('Funeral_buttonone_text', '#')); ?></a> <a href="#"><?php echo esc_html(get_theme_mod('Funeral_buttontwo_text', '#')); ?></a></div>
                    <?php
                    } else{
                        ?>
                        <h1><?php echo get_the_title()?></h1>
                            <?php if(get_field('sub_title')) { ?>
                           <h5> <?php echo get_field('sub_title'); ?></h5>
                            <?php
                            }
                            ?>
                    <?php
                    }?>


                </div>
            </div>
        </div>
<?php if(is_front_page()){
    ?>
    <div class="bordrHome"></div>
        <?php
}?>

    </header>
    <!-- Header end -->

	<div id="content" class="site-content" data-scrollbar>
