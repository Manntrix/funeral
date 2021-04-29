<?php

/**

 * The template for displaying all pages

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package KJL

 */



get_header();
$section_one = get_field('section_one');
$section_two = get_field('section_two');
$section_three = get_field('section_three');

?>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="homeHeading">
                        <img src="<?php echo wp_get_attachment_url( 64) ?>" alt=""/>
                        <h2><?php echo $section_one['heading']?></h2>
                        <h5><?php echo $section_one['sub_heading']?></h5>
                        <div class="headerButton"><a href="<?php echo $section_one['button_url']?>" class="actbtn"><?php echo $section_one['button_text']?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partA">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="partImg">
                        <img src="<?php echo $section_two['image']?>" alt=""/>
                    </div>
                </div>
                <div class="col-md-7">
                    <h2><?php echo $section_two['heading']?></h2>
                    <p><span><?php echo $section_two['sub_heading']?></span></p>
                    <p><?php echo $section_two['description']?></p>
                    <h4>For more information please call: <span><?php echo $section_two['phone']?></span></h4>
                </div>
            </div>
        </div>
    </section>
    <section class="howIt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><?php echo $section_three['heading']?></h2>
                    <p><span><?php echo $section_three['sub_heading']?></span></p>
                    <?php
                    foreach ($section_three['list'] as $list){
                        ?>
                        <div class="olSection">
                            <div class="olNumber"><?php echo $list['number']?></div>
                            <div class="olTxt"><?php echo $list['text']?></div>
                        </div>
                            <?php
                    }
                    ?>


                    <div class="headerButton"><a href="<?php echo $section_three['button_url']?>" class="actbtn"><?php echo $section_three['button_text']?></a></div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <div class="photoB"><img src="<?php echo $section_three['image']?>" alt=""/></div>
    </section>

<?php

get_footer();

