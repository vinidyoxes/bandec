<?php
if (!defined('ABSPATH')) {
    exit;
}
if (!class_exists('Triply_Customize')) {

    class Triply_Customize {


        public function __construct() {
            add_action('customize_register', array($this, 'customize_register'));
        }

        /**
         * @param $wp_customize WP_Customize_Manager
         */
        public function customize_register($wp_customize) {

            /**
             * Theme options.
             */

            $this->init_triply_blog($wp_customize);

            do_action('triply_customize_register', $wp_customize);
        }


        /**
         * @param $wp_customize WP_Customize_Manager
         *
         * @return void
         */
        public function init_triply_blog($wp_customize) {

            $wp_customize->add_section('triply_blog_archive', array(
                'title' => esc_html__('Blog', 'triply'),
            ));

            // =========================================
            // Select Style
            // =========================================

            $wp_customize->add_setting('triply_options_blog_style', array(
                'type'              => 'option',
                'default'           => 'standard',
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control('triply_options_blog_style', array(
                'section' => 'triply_blog_archive',
                'label'   => esc_html__('Blog style', 'triply'),
                'type'    => 'select',
                'choices' => array(
                    'standard'	=> esc_html__('Blog Standard','triply'),
                    'grid'	=> esc_html__('Blog Grid','triply'),
                ),
            ));
        }
    }
}
return new Triply_Customize();
