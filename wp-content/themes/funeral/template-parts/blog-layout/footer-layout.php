
    <div class="container">
        <div class="row footerTop">
            <div class="col-md-4">
                <?php

                wp_nav_menu( array(
                    'theme_location' => 'footer_one',
                    'items_wrap'     => '<ul>%3$s</ul>',
                ) );
                ?>
            </div>
            <div class="col-md-4">
                <?php

                wp_nav_menu( array(
                    'theme_location' => 'footer_two',
                    'items_wrap'     => '<ul>%3$s</ul>',
                ) );
                ?>
            </div>
            <div class="col-md-4">
                <p><strong>Ph:</strong> <a href="tel:<?php echo esc_html(get_theme_mod('Funeral_mobile')); ?>"><?php echo esc_html(get_theme_mod('Funeral_mobile')); ?></a></p>
                <p><strong>Email:</strong> <a href="mailto:<?php echo esc_html(get_theme_mod('Funeral_mobile_mail')); ?>"><?php echo esc_html(get_theme_mod('Funeral_mobile_mail')); ?></a></p>
            </div>
        </div>
        <div class="row">
            <div class="footerBtm">
                <div class="col-md-8">
                    <p><?php echo esc_html(get_theme_mod('Funeral_copyright')); ?></p>
                </div>
                <div class="col-md-4">
                    <div class="socialLink">
                        <a style="background: url(<?php echo wp_get_attachment_url( 63)?>)" href="<?php echo esc_html(get_theme_mod('Funeral_facebook')); ?>"><i class="fab fa-facebook-f"></i></a>
                        <a style="background: url(<?php echo wp_get_attachment_url( 63)?>)" href="<?php echo esc_html(get_theme_mod('Funeral_twitter')); ?>"><i class="fab fa-twitter"></i></a>
                        <a style="background: url(<?php echo wp_get_attachment_url( 63)?>)" href="<?php echo esc_html(get_theme_mod('Funeral_linkedin')); ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
