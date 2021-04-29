<?php
/**
 *
 * Template Name: About
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
$section_one = get_field('section_one');
$section_two = get_field('section_two');


?>

    <section class="partA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="partImg">
                        <img src="<?php echo $section_one['image']?>" alt=""/>
                    </div>
                </div>
                <div class="col-md-7">
                    <h2><?php echo $section_one['heading']?></h2>
                    <p><span><?php echo $section_one['sub_heading']?></span></p>
                    <p><?php echo $section_one['description']?></p>
                    <h4>For more information please call: <span><?php echo $section_one['phone']?></span></h4>
                </div>
            </div>
        </div>
    </section>
    <section class="partB">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h2><?php echo $section_two['heading']?></h2>
                    <p><span><?php echo $section_two['sub_heading']?></span></p>
                    <p><?php echo $section_two['description']?></p>
                    <h4>For more information please call: <span><?php echo $section_two['phone']?></span></h4>
                </div>
                <div class="col-md-5">
                    <div class="partImgB">
                        <img src="<?php echo $section_two['image']?>" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
