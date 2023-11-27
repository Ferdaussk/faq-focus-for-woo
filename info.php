<?php


function qaffw_general_product_datas(){
    global $post;
    echo '<div id="qaffw_product_estimated_date_tab" class="panel woocommerce_options_panel">';
        echo '<div class="options_group">';
        // Checkbox Input
        woocommerce_wp_checkbox(
            array(
                'id'            => '_custom_checkbox',
                'label'         => __('Estimated date', 'faq-focus-for-woo'),
                'description'   => __('Show estimated date for this product.', 'faq-focus-for-woo'),
                'desc_tip'      => true,
            )
        );
        // Number Input
        woocommerce_wp_text_input(
            array(
                'id'            => '_custom_number',
                'label'         => __('Day number', 'faq-focus-for-woo'),
                'placeholder'   => __('Enter estimated day', 'faq-focus-for-woo'),
                'desc_tip'      => true,
                'type'          => 'number',
                'custom_attributes' => array(
                    'step' => '1', 
                ),
            )
        );
        // Reason notice Input
        woocommerce_wp_text_input(
            array(
                'id'            => '_custom_notice',
                'label'         => __('Reason notice', 'faq-focus-for-woo'),
                'placeholder'   => __('Enter reason. If don\'t have empty this.', 'faq-focus-for-woo'),
                'desc_tip'      => true,
                'type'          => 'text',
                'custom_attributes' => array(
                    'step' => '1',
                ),
            )
        );
        echo '</div>';
    echo '</div>';
}
add_action('woocommerce_product_data_panels', 'qaffw_general_product_datas');
// make a repeater here may i add this _custom_number and this _custom_notice multiple time. may i duplicate it also. main think is i want to repeat two in multiple time