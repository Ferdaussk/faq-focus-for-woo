<?php
if ( ! defined( 'ABSPATH' ) ) exit;
function qaffw_sk_single(){
    global $product;
    $product_id = $product->get_id();
    $custom_data = get_post_meta($product_id, '_qaffw_custom_data', true);
    $qaffw_html = '';
    $qaffw_top_ttl = get_option( 'wpesd-top-title-check')==true?get_option( 'wpesd-top-title-check'):'';
    $lkjl = (get_option( 'qaffw-checkout-page-check')=='qaffw_product_tab')?'':$qaffw_top_ttl;
    $qaffw_html .= $custom_data==true?'<h2 class="qaffw-Accordion-toptitle">'.$lkjl.'</h2>':'';
    $qaffw_html .= '<div class="qaffw-Accordion-'.get_option( 'qaffw-estimass-presets', 2 ).'">';
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
                            $qaffw_html .= (!empty($data['text2']))?'<div class="qaffw-Accordion-t">'.esc_html($data['text2']).'</div>':'';
                            $qaffw_html .= '<p>'.nl2br(esc_html($data['textarea'])).'</p>';
                        $qaffw_html .= '</div>';
                    $qaffw_html .= '</div>';
                $qaffw_html .= '</div>';
            }
        }
    $qaffw_html .= '</div>';
    return $qaffw_html;
}