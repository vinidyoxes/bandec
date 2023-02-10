<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

use Elementor\Controls_Manager;

class OSF_Elementor_Login extends Elementor\Widget_Base{

    public function get_name() {
        return 'triply-login';
    }
    public function get_title() {
        return esc_html__('Triply Login', 'triply');
    }
    public function get_icon() {
        return 'eicon-lock-user';
    }
    public function get_categories()
    {
        return array('triply-addons');
    }

    public function get_style_depends() {
        return ['magnific-popup'];
    }

    public function get_script_depends() {
        return ['magnific-popup', 'triply-elementor-login'];
    }

    protected function register_controls(){

        $this -> start_controls_section(
            'login-style',
            [
                'label' => esc_html__('Icon','triply'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'size',
            [
                'label' => esc_html__( 'Size', 'triply' ),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 6,
                        'max' => 300,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .login-action > div > a i' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label'     => esc_html__( 'Color', 'triply' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .elementor-login-wrapper .login-action > div a i:not(:hover)' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .elementor-login-wrapper .login-action > div a:not(:hover):before' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'icon_color_hover',
            [
                'label'     => esc_html__( 'Color Hover', 'triply' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .elementor-login-wrapper .login-action > div a i:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .elementor-login-wrapper .login-action > div a:hover:before' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

    }
    protected function render(){
        $settings = $this->get_settings_for_display();
        $this->add_render_attribute( 'wrapper', 'class', 'elementor-login-wrapper' );

        $account_link = wp_login_url();

        if ( triply_is_ba_booking_activated() ) {
            $account_page = intval(BABE_Settings::$settings['my_account_page']);
            $account_link = get_the_permalink($account_page);
        }
        ?>
        <div <?php echo triply_elementor_get_render_attribute_string('wrapper', $this);?>>
            <div class="login-action">
                <div class="site-header-account">
                    <?php if (!is_user_logged_in()) { ?>
                        <a class="group-button popup js-btn-register-popup" href="#triply-login-form"><i class="triply-icon-login"></i></a>
                    <?php } else {
                        ?>
                        <a class="group-button login" href="<?php echo esc_url($account_link); ?>"> <?php echo get_avatar(get_current_user_id(), 30); ?> </a>
                        <div class="account-dropdown"></div>
                        <?php
                    } ?>
                </div>
            </div>
        </div>
        <?php
    }

}
$widgets_manager->register(new OSF_Elementor_Login());
