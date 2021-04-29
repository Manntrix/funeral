<?php
/**
 *
 * Template Name: Contact
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

$address = get_field('address');
$phone = get_field('phone');
$email = get_field('email');
$contact_form = get_field('contact_form');
$map = get_field('map');

?>

    <section class="contactForm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h6>Get in touch</h6>
                    <h2>Contact Us</h2>
                    <div class="contAddress">
                        <div class="contLft" style="background: url(<?php echo wp_get_attachment_url( 63)?>)"><i class="fas fa-map-marker-alt"></i></div>
                        <h6><?php echo $address?></h6>
                    </div>
                    <div class="contAddress">
                        <div class="contLft" style="background: url(<?php echo wp_get_attachment_url( 63)?>)"><i class="fas fa-phone-alt"></i></div>
                        <a href="tel:<?php echo $phone?>"><h6><?php echo $phone?></h6></a>
                    </div>
                    <div class="contAddress noLine">
                        <div class="contLft" style="background: url(<?php echo wp_get_attachment_url( 63)?>)"><i class="fas fa-envelope"></i></div>
                        <a href="mail:<?php echo $email?>"> <h6><?php echo $email?></h6></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Get A Quote</h2>
                    <?php echo $contact_form?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo $map?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
