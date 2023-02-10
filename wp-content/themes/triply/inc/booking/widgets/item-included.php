<?php
/**
 * Add widget Duration to Elementor
 *
 * @since   1.0.0
 */

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Core\Kits\Documents\Tabs\Global_Colors;
use Elementor\Core\Kits\Documents\Tabs\Global_Typography;

class Triply_BABE_Elementor_ItemIncluded_Widget extends \Elementor\Widget_Base {

    /**
     * Get widget name.
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'babe-item-included';
    }

    /**
     * Get widget title.
     *
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__('Item Included/Excluded', 'triply');
    }

    /**
     * Get widget icon.
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-radio';
    }

    /**
     * Get widget keywords.
     *
     * Retrieve the list of keywords the widget belongs to.
     *
     * @return array Widget keywords.
     */
    public function get_keywords() {
        return ['included', 'item', 'excluded'];
    }

    /**
     * Get widget categories.
     *
     * @return array Widget categories.
     */
    public function get_categories() {
        return ['book-everything-elements'];
    }

    /**
     * Register widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     */
    protected function register_controls() {

        $this->start_controls_section(
            'section_general',
            [
                'label' => esc_html__('General', 'triply'),
                'tab'   => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'select',
            array(
                'label'       => esc_html__('Included/Excluded', 'triply'),
                'description' => '',
                'type'        => \Elementor\Controls_Manager::SELECT,
                'options'     => array(
                    'included'     => esc_html__('Included', 'triply'),
                    'excluded' => esc_html__('Excluded', 'triply'),
                ),
                'default'     => 'included',
            )
        );

        $this->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'triply'),
                'type'  => Controls_Manager::ICONS,
                'default' => [
                    'value'   => 'fas fa-check-circle',
                    'library' => 'fa-regular',
                ],
            ]
        );

        $this->add_responsive_control(
            'item_space',
            [
                'label'     => esc_html__('Item Spacing', 'triply'),
                'type'      => Controls_Manager::SLIDER,
                'range'     => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .elementor-list-items .list-item:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->add_control_style_wrapper();

        // Icon
        $this->start_controls_section(
            'section_icon_style',
            [
                'label' => esc_html__('Icon', 'triply'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'icon_size',
            [
                'size_units' => ['px'],
                'label' => esc_html__('Size', 'triply'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .elementor-list-items .item_icon' => 'font-size: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'icon_color',
            [
                'label' => esc_html__('Color', 'triply'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .elementor-list-items .item_icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'icon_margin',
            [
                'size_units' => ['px', 'em', '%'],
                'label' => esc_html__('Margin', 'triply'),
                'type' => Controls_Manager::DIMENSIONS,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 300,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .elementor-list-items .item_icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        // Content
        $this->start_controls_section(
            'section_content_style',
            [
                'label' => esc_html__('Content', 'triply'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_style',
            [
                'label' => esc_html__('Title', 'triply'),
                'type'  => Controls_Manager::HEADING,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => esc_html__('Color', 'triply'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .elementor-list-items .list-item .list-text' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'selector' => '{{WRAPPER}} .elementor-list-items .list-item .list-text',
            ]
        );

        $this->end_controls_section();

    }

    /**
     * Render widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     */
    protected function render() {
        $settings = $this->get_settings_for_display();

        if (\Elementor\Plugin::instance()->editor->is_edit_mode()) {
            $post_id = triply_ba_get_default_single_id();
        } else {
            $post_id = get_the_ID();
        }
        $babe_post = get_post($post_id);

        if (is_single() && $babe_post->post_type == BABE_Post_types::$booking_obj_post_type) {
            $data = get_post_meta($post_id, 'triply_'.$settings['select'].'_section', 1);
            if(!empty($data) && is_array($data)){

                echo '<div class="elementor-widget-inner">';
                    echo '<ul class="elementor-list-items">';
                    foreach ($data as $datum){
                        if(isset($datum['triply_'.$settings['select']]) && !empty($datum['triply_'.$settings['select']])){
                            echo '<li class="list-item">';
                                $this->render_icon($settings);
                                echo '<span class="list-text">'. esc_attr($datum['triply_'.$settings['select']]). '</span>';
                            echo '</li>';
                        }
                    }
                    echo '</ul>';

                echo '</div>';
            }
        }

    }

    private function render_icon($settings) {
        if (!empty($settings['icon']['value'])) {
            ?>
            <span class="item_icon">
                <?php \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?>
            </span>
            <?php
        }
    }

    protected function add_control_style_wrapper($condition = array()) {
        $this->start_controls_section(
            'section_style_wrapper',
            [
                'label' => esc_html__('Wrapper', 'triply'),
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,

            ]
        );

        $this->add_responsive_control(
            'wrapper_padding',
            [
                'label'      => esc_html__('Padding', 'triply'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .elementor-widget-inner' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'wrapper_margin',
            [
                'label'      => esc_html__('Margin', 'triply'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .elementor-widget-inner' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'wrapper_bg_color',
            [
                'label'     => esc_html__('Background Color', 'triply'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-inner' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'        => 'wrapper_border',
                'placeholder' => '1px',
                'default'     => '1px',
                'selector'    => '{{WRAPPER}} .elementor-widget-inner',
                'separator'   => 'before',
            ]
        );

        $this->add_control(
            'wrapper_border_hover',
            [
                'label'     => esc_html__('Border Hover Color', 'triply'),
                'type'      => \Elementor\Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .elementor-widget-inner:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'wrapper_radius',
            [
                'label'      => esc_html__('Border Radius', 'triply'),
                'type'       => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .elementor-widget-inner' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name'     => 'wrapper_box_shadow',
                'selector' => '{{WRAPPER}} .elementor-widget-inner',
            ]
        );

        $this->end_controls_section();
    }

}
