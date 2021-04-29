<?php
/**
 *
 * Template Name: help
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
<!-- Content start -->

<section class="helps">
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
                <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
                    
                    <?php
                    if( have_rows('primary_questions') ):
$i=1;
    // Loop through rows.
    while( have_rows('primary_questions') ) : the_row();

        // Load sub field value.
        ?>
                <div class="panel">
                    <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                      <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">                        
                      <?php echo get_sub_field('add_question'); ?>
                        <i class="far fa-chevron-right"></i>
                    </a>
                  </h4>
                    </div>
                    <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                      <div class="panel-body">
                            <?php echo get_sub_field('answer'); ?>
                      </div>
                    </div>
                  </div>
        <?php
        $i++;
        //$sub_value = get_sub_field('sub_field');
        // Do something...

    // End loop.
    endwhile;

endif;
                    ?>
                 <!-- <div class="panel">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">                        
                      How to get i started?
                        <i class="far fa-chevron-right"></i>
                    </a>
                  </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                          <h5>What is Mobile Funeral notice?</h5>
                        A mobile Funeral Notice is a new way to share all the details of your forthcoming funeral day
service. They can be created in a matter of minutes and contain all the information you need 
to share, including important information and interactive location maps. Once created, 
you can send them by SMS text message, giving family members and friends direct access 
to the funeral day arrangements they need, via their personal mobile smartphone.
                      </div>
                    </div>
                  </div>-->
                

                </div>  
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 faqCenter">
                 <div class="headerButton"><a href="#" class="actbtn">Funeral business create your account now</a></div> 
                <h2>FAQ's</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">                
                <div class="panel-group wrap" id="accordionB" role="tablist" aria-multiselectable="true">
                    
                                    <?php
                    if( have_rows('faq_question') ):
$i=1;
    // Loop through rows.
    while( have_rows('faq_question') ) : the_row();

        // Load sub field value.
        ?>
                                <div class="panel">
                    <div class="panel-heading" role="tab" id="faqA<?php echo $i; ?>">
                      <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordionB" href="#collapseA<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseA<?php echo $i; ?>">                        
                     <?php echo get_sub_field('add_question'); ?>
                        <i class="far fa-chevron-right"></i>
                    </a>
                  </h4>
                    </div>
                    <div id="collapseA<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faqA<?php echo $i; ?>">
                      <div class="panel-body">
                        <?php echo get_sub_field('answer'); ?>
                      </div>
                    </div>
                  </div>
        <?php
        $i++;
        //$sub_value = get_sub_field('sub_field');
        // Do something...

    // End loop.
    endwhile;

endif;
?>
                 <!-- <div class="panel">
                    <div class="panel-heading" role="tab" id="faqA">
                      <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordionB" href="#collapseA" aria-expanded="true" aria-controls="collapseA">                        
                      How do i create a funeral notice?
                        <i class="far fa-chevron-right"></i>
                    </a>
                  </h4>
                    </div>
                    <div id="collapseA" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faqA">
                      <div class="panel-body">
                        A mobile Funeral Notice is a new way to share all the details of your forthcoming funeral day
service. They can be created in a matter of minutes and contain all the information you need 
to share, including important information and interactive location maps. Once created, 
you can send them by SMS text message, giving family members and friends direct access 
to the funeral day arrangements they need, via their personal mobile smartphone. 
                      </div>
                    </div>
                  </div>-->
                  <!-- end of panel -->

               

                 

                </div>  
            </div>
        </div>
    </div>
</section>
    
<!-- Content end -->

<?php
get_footer();
?>
<script>
    
    $(document).ready(function(){
       $('#accordion').find('.panel:first').find('a').attr('aria-expanded', 'true');
       $('#collapse1').addClass('in');
       $('#accordionB').find('.panel:first').find('a').attr('aria-expanded', 'true');
       $('#collapseA1').addClass('in');
    });
</script>