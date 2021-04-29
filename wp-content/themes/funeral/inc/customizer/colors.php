<?php

        add_action( 'customize_register', 'Funeral_customizer_settings' );
            function Funeral_customizer_settings( $wp_customize ) {



                $wp_customize->add_section( 'header_text' , array(
                    'title'      => 'Header Text',
                    'priority'   => 60,
                ) );
                $wp_customize->add_setting( 'Funeral_topheader_text' , array(
                    'default'     => 'provide SMS funeral notices',
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'esc_attr',
                ) );
                $wp_customize->add_control( 'Funeral_topheader_text', array(
                    'label' => 'Top Heading',
                    'section' => 'header_text',
                    'settings' => 'Funeral_topheader_text',
                    'type' => 'text',
                ) );
                $wp_customize->add_setting( 'Funeral_header_text' , array(
                    'default'     => 'Ease the Pain of Notification',
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'esc_attr',
                ) );
                $wp_customize->add_control( 'Funeral_header_text', array(
                    'label' => 'Header Main Text',
                    'section' => 'header_text',
                    'settings' => 'Funeral_header_text',
                    'type' => 'textarea',
                ) );
                $wp_customize->add_setting( 'Funeral_subheader_text' , array(
                    'default'     => 'Share funeral day details in one simple message.',
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'esc_attr',
                ) );
                $wp_customize->add_control( 'Funeral_subheader_text', array(
                    'label' => 'Sub Heading',
                    'section' => 'header_text',
                    'settings' => 'Funeral_subheader_text',
                    'type' => 'text',
                ) );
                $wp_customize->add_setting( 'Funeral_buttonone_text' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'esc_attr',
                ) );
                $wp_customize->add_control( 'Funeral_buttonone_text', array(
                    'label' => 'Button One',
                    'section' => 'header_text',
                    'settings' => 'Funeral_buttonone_text',
                    'type' => 'text',
                ) );
                $wp_customize->add_setting( 'Funeral_buttontwo_text' , array(
                    'default'     => '',
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'esc_attr',
                ) );
                $wp_customize->add_control( 'Funeral_buttontwo_text', array(
                    'label' => 'Button Two',
                    'section' => 'header_text',
                    'settings' => 'Funeral_buttontwo_text',
                    'type' => 'text',
                ) );
                $wp_customize->add_section( 'footer' , array(
                    'title'      => 'Footer',
                    'priority'   => 60,
                ) );
                $wp_customize->add_setting( 'Funeral_facebook' , array(
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'esc_url',
                ) );
                $wp_customize->add_control( 'Funeral_facebook', array(
                    'label' => 'Facebook Link',
                    'section' => 'footer',
                    'settings' => 'Funeral_facebook',
                    'type' => 'url',
                ) );
                $wp_customize->add_setting( 'Funeral_twitter' , array(
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'esc_url',
                ) );
                $wp_customize->add_control( 'Funeral_twitter', array(
                    'label' => 'Twitter Link',
                    'section' => 'footer',
                    'settings' => 'Funeral_twitter',
                    'type' => 'url',
                ) );
                $wp_customize->add_setting( 'Funeral_linkedin' , array(
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'esc_url',
                ) );
                $wp_customize->add_control( 'Funeral_linkedin', array(
                    'label' => 'Linkedin Link',
                    'section' => 'footer',
                    'settings' => 'Funeral_linkedin',
                    'type' => 'url',
                ) );

                $wp_customize->add_setting( 'Funeral_copyright' , array(
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'esc_attr',
                ) );
                $wp_customize->add_control( 'Funeral_copyright', array(
                    'label' => 'Copyright',
                    'section' => 'footer',
                    'settings' => 'Funeral_copyright',
                    'type' => 'textarea',
                ) );
                $wp_customize->add_setting( 'Funeral_mobile' , array(
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'esc_html',
                ) );
                $wp_customize->add_control( 'Funeral_mobile', array(
                    'label' => 'Phone',
                    'section' => 'footer',
                    'settings' => 'Funeral_mobile',
                    'type' => 'number',
                ) );

                $wp_customize->add_setting( 'Funeral_mobile_mail' , array(
                    'transport'   => 'refresh',
                    'sanitize_callback'  => 'sanitize_email',
                ) );
                $wp_customize->add_control( 'Funeral_mobile_mail', array(
                    'label' => 'Email',
                    'section' => 'footer',
                    'settings' => 'Funeral_mobile_mail',
                    'type' => 'email',
                ) );
}

add_action( 'wp_head', 'Funeral_customizer_css');
function Funeral_customizer_css()
{
    ?>

    <?php
}

add_action('wp_footer', 'Funeral_customizer_script', 100);
function Funeral_customizer_script(){
    ?>
    <?php if( esc_html(get_theme_mod( 'Funeral_smooth_scrollbar', 'disable' ) == 'enable' )) : ?>
        <script>
            var elem = document.querySelector("html");
            var scrollbar = Scrollbar.init(elem,
                {
                    speed: 1,
                    damping:0.08,
                    renderByPixels: true,
                    thumbMinSize:20
                });
        </script>
    <?php endif ?>

<?php
}


