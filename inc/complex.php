<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function qaffw_sk_single(){
    global $product;
    $product_id = $product->get_id();
    $custom_data = get_post_meta($product_id, '_custom_data', true);
    $qaffw_html = '';
    $qaffw_html .= '<div class="qaffw-Accordion-'.get_option( 'qaffw-estimass-presets', 1 ).'">';
        if ($custom_data) {
            foreach ($custom_data as $data) {
                $qaffw_html .= '<div class="qaffw-Accordion-default">';
                    $qaffw_html .= '<div class="qaffw-Accordion-heading" id="headingOne">';
                        $qaffw_html .= '<h4 class="qaffw-panel-title">';
                            $qaffw_html .= '<span class="qaffw-collapsed">'.esc_html($data['text1']).'</span>';
                        $qaffw_html .= '</h4>';
                    $qaffw_html .= '</div>';
                    $qaffw_html .= '<div id="collapseOne">';
                        $qaffw_html .= '<div class="qaffw-panel-body">';
                            $qaffw_html .= (get_option( 'wpesd-expand-title-check', 'on' )=='on')?'<div class="qaffw-Accordion-t">'.esc_html($data['text2']).'</div>':'';
                            $qaffw_html .= '<p>'.nl2br(esc_html($data['textarea'])).'</p>';
                        $qaffw_html .= '</div>';
                    $qaffw_html .= '</div>';
                $qaffw_html .= '</div>';
            }
        }
    $qaffw_html .= '</div>';
    return $qaffw_html;
}