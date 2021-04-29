<?php
/**
 *
 * Template Name: cms
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

?>

    <section class="partA">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                         <h2><?php echo get_field('heading'); ?></h2>
                     <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile; // End of the loop.
    ?>
                </div>
            
            </div>
        </div>
    </section>


<?php
get_footer();
