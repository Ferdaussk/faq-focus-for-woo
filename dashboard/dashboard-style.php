<?php
if ( ! defined( 'ABSPATH' ) ) exit;
// Taxos label check
$qaffw_checkout_page_check = get_option( 'qaffw-checkout-page-check', 'before_add_to_cart_button' );
// Label controls
// *** top title
$qaffw_estimass_toptitle_color_value = get_option( 'qaffw-estimass-toptitle-color');
$qaffw_estimass_toptitle_fontsize_value = get_option( 'qaffw-estimass-toptitle-fontsize');
$qaffw_estimass_toptitle_fontweight_value = get_option( 'qaffw-estimass-toptitle-fontweight');
$qaffw_estimass_toptitle_fontfamilly_value = get_option( 'qaffw-estimass-toptitle-fontfamilly');
// *** estimass
$qaffw_estimass_color_value = get_option( 'qaffw-estimass-color');
$qaffw_estimass_fontsize_value = get_option( 'qaffw-estimass-fontsize');
$qaffw_estimass_fontweight_value = get_option( 'qaffw-estimass-fontweight');
$qaffw_estimass_fontfamilly_value = get_option( 'qaffw-estimass-fontfamilly');
// headline bg
$qaffw_estimass_bgcolor5_value = get_option( 'qaffw-estimass-bgcolor5' );
$qaffw_estimass_box_shadow5_value = get_option( 'qaffw-reason-box-shadow5' );
$qaffw_estimass_radius5_value = get_option( 'qaffw-reason-border-radius5' );
// expand bg
$qaffw_estimass_bgcolorEX_value = get_option( 'qaffw-estimass-bgcolorEX' );
$qaffw_estimass_box_shadowEX_value = get_option( 'qaffw-reason-box-shadowEX' );
$qaffw_estimass_radiusEX_value = get_option( 'qaffw-reason-border-radiusEX' );
// *** estimdate
$qaffw_estimass_presets_value = get_option( 'qaffw-estimass-presets', 1 );
$wpesd_top_title_check_check = get_option( 'wpesd-top-title-check', 'FAQ Focus for Woo' );
$wpesd_expand_title_check_check = get_option( 'wpesd-expand-title-check', 'on' );
// *** reason
$qaffw_reason_color_value = get_option( 'qaffw-reason-color' );
$qaffw_reason_fontsize_value = get_option( 'qaffw-reason-fontsize');
$qaffw_reason_fontweight_value = get_option( 'qaffw-reason-fontweight');
$qaffw_reason_fontfamilly_value = get_option( 'qaffw-reason-fontfamilly' );
// *** estimdate
$qaffw_estimdate_color_value = get_option( 'qaffw-estimdate-color');
$qaffw_estimdate_fontsize_value = get_option( 'qaffw-estimdate-fontsize');
$qaffw_estimdate_fontweight_value = get_option( 'qaffw-estimdate-fontweight');
$qaffw_estimdate_fontfamilly_value = get_option( 'qaffw-estimdate-fontfamilly');
// Get all font here start
$all_fonts = [
	'' => esc_html__('Default', 'faq-focus-for-woo'),
	'Arial, sans-serif' => esc_html__('Arial', 'faq-focus-for-woo'),
	'Helvetica, sans-serif' => esc_html__('Helvetica', 'faq-focus-for-woo'),
	'Georgia, serif' => esc_html__('Georgia', 'faq-focus-for-woo'),
	'fantasy' => esc_html__('Fantasy', 'faq-focus-for-woo'),
	'Tahoma, sans-serif' => esc_html__('Tahoma', 'faq-focus-for-woo'),
	'Courier New, monospace' => esc_html__('Courier New', 'faq-focus-for-woo'),
	'Palatino, serif' => esc_html__('Palatino', 'faq-focus-for-woo'),
	'Garamond, serif' => esc_html__('Garamond', 'faq-focus-for-woo'),
	'Century Gothic, sans-serif' => esc_html__('Century Gothic', 'faq-focus-for-woo'),
	'Futura, sans-serif' => esc_html__('Futura', 'faq-focus-for-woo'),
	'Roboto, sans-serif' => esc_html__('Roboto', 'faq-focus-for-woo'),
	'Open Sans, sans-serif' => esc_html__('Open Sans', 'faq-focus-for-woo'),
	'Lato, sans-serif' => esc_html__('Lato', 'faq-focus-for-woo'),
	'Montserrat, sans-serif' => esc_html__('Montserrat', 'faq-focus-for-woo'),
	'Raleway, sans-serif' => esc_html__('Raleway', 'faq-focus-for-woo'),
	'Poppins, sans-serif' => esc_html__('Poppins', 'faq-focus-for-woo'),
	'Nunito, sans-serif' => esc_html__('Nunito', 'faq-focus-for-woo'),
	'Playfair Display, serif' => esc_html__('Playfair Display', 'faq-focus-for-woo'),
	'Quicksand, sans-serif' => esc_html__('Quicksand', 'faq-focus-for-woo'),
];
// Presets
$ss_all_presets = [
  '1' => esc_html__('Style1', 'faq-focus-for-woo'),
  '2' => esc_html__('Style2', 'faq-focus-for-woo'),
  '3' => esc_html__('Style3', 'faq-focus-for-woo'),
  '4' => esc_html__('Style4', 'faq-focus-for-woo'),
  '5' => esc_html__('Style5', 'faq-focus-for-woo'),
  '6' => esc_html__('Style6', 'faq-focus-for-woo'),
  '15' => esc_html__('Style7', 'faq-focus-for-woo'),
  '16' => esc_html__('Style8', 'faq-focus-for-woo'),
  '17' => esc_html__('Style9', 'faq-focus-for-woo'),
  '18' => esc_html__('Style10', 'faq-focus-for-woo'),
  '19' => esc_html__('Style11', 'faq-focus-for-woo'),
  '20' => esc_html__('Style12', 'faq-focus-for-woo'),
  '21' => esc_html__('Style13', 'faq-focus-for-woo'),
  '22' => esc_html__('Style14', 'faq-focus-for-woo'),
  '23' => esc_html__('Style15', 'faq-focus-for-woo'),
  '24' => esc_html__('Style16', 'faq-focus-for-woo'),
  '25' => esc_html__('Style17', 'faq-focus-for-woo'),
  '26' => esc_html__('Style18', 'faq-focus-for-woo'),
  '27' => esc_html__('Style19', 'faq-focus-for-woo'),
  '28' => esc_html__('Style20', 'faq-focus-for-woo'),
  '29' => esc_html__('Style21', 'faq-focus-for-woo'),
  '30' => esc_html__('Style22', 'faq-focus-for-woo'),
  '31' => esc_html__('Style23', 'faq-focus-for-woo'),
  '7' => esc_html__('Style24', 'faq-focus-for-woo'),
  '8' => esc_html__('Style25', 'faq-focus-for-woo'),
  '9' => esc_html__('Style26', 'faq-focus-for-woo'),
  '10' => esc_html__('Style27', 'faq-focus-for-woo'),
  '11' => esc_html__('Style28', 'faq-focus-for-woo'),
  '12' => esc_html__('Style29', 'faq-focus-for-woo'),
  '13' => esc_html__('Style30', 'faq-focus-for-woo'),
  '14' => esc_html__('Style31', 'faq-focus-for-woo'),
];
?>
<div class="admin-panel">
  <form method="post" action="options.php">
    <div class="header">
			<?php
			settings_fields( 'qaffw-plugin-settings' );
      ?>
      <a href="https://bestwpdeveloper.com/" target="_blank"><h1 class="dashboard-title"><?php echo esc_html__('BEST WP DEVELOPER', 'faq-focus-for-woo'); ?></h1></a>
      <?php
			do_settings_sections( 'qaffw-plugin-main-menu' );
      ?>
      <div class="save-button">
        <?php submit_button(); ?>
      </div>
    </div>
    <div class="section">
      <div class="clmn-wrap first-clm">
        <div class="select-container">
          <label for=""><?php echo esc_html__('Presets Style', 'faq-focus-for-woo');?></label>
          <?php
          echo '<select id="qaffw-estimass-presets" name="qaffw-estimass-presets">';
            foreach($ss_all_presets as $style_slug => $style_title){
              echo '<option value="'.esc_attr($style_slug).'" '.selected(esc_attr($qaffw_estimass_presets_value),esc_attr($style_slug)).'>'.esc_html__($style_title,'faq-focus-for-woo').'</option>';
            }
          echo '</select>';
          ?>
        </div>
        <div class="list-container wpesd_cmmn_chacthak">
          <label class="qape_title"><?php _e('Top title', 'wproduct-estimated-shipping-date'); ?></label>
          <?php echo '<input type="text" name="wpesd-top-title-check" id="wpesd-top-title-check" value="'.$wpesd_top_title_check_check.'" title="Text"  placeholder="FAQ Focus for Woo">';?>
        </div>
        <div class="list-container wpesd_cmmn_chacthak">
          <input type="checkbox" name="wpesd-expand-title-check" value="on" <?php echo checked( $wpesd_expand_title_check_check, 'on', false ); ?>>
          <label class="checker-switch"><?php _e('Show expand title', 'wproduct-estimated-shipping-date'); ?></label>
        </div>
        <div class="choose-page"><?php _e('Single page position:', 'faq-focus-for-woo'); ?></div>
        <div class="list-container">
          <div class="list-item">
            <input type="radio" name="qaffw-checkout-page-check" value="before_single_product_summary"
            <?php checked(get_option('qaffw-checkout-page-check', 'off'), 'before_single_product_summary'); ?>>
            <label ><?php _e('Before single product summary', 'faq-focus-for-woo'); ?></label>
          </div>
          <div class="list-item">
            <input type="radio" name="qaffw-checkout-page-check" value="before_add_to_cart_button"
            <?php checked(get_option('qaffw-checkout-page-check', 'off'), 'before_add_to_cart_button'); ?>>
            <label ><?php _e('Before add to cart button', 'faq-focus-for-woo'); ?></label>
          </div>
          <div class="list-item">
            <input type="radio" name="qaffw-checkout-page-check" value="after_add_to_cart_button"
            <?php checked(get_option('qaffw-checkout-page-check', 'off'), 'after_add_to_cart_button'); ?>>
            <label ><?php _e('After add to cart button', 'faq-focus-for-woo'); ?></label>
          </div>
          <div class="list-item">
            <input type="radio" name="qaffw-checkout-page-check" value="after_single_product"
            <?php checked(get_option('qaffw-checkout-page-check', 'off'), 'after_single_product'); ?>>
            <label ><?php _e('After single product', 'faq-focus-for-woo'); ?></label>
          </div>
          <div class="list-item">
            <input type="radio" name="qaffw-checkout-page-check" value="after_single_product_summary"
            <?php checked(get_option('qaffw-checkout-page-check', 'off'), 'after_single_product_summary'); ?>>
            <label ><?php _e('After single product summary', 'faq-focus-for-woo'); ?></label>
          </div>
        </div>
      </div>
      <div class="clmn-wrap secound-clm">
        <div class="control_row">
          <label for="" class="qaffw_style_title"><?php echo esc_html__('Headline', 'faq-focus-for-woo');?></label>
          <div class="color-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Color', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba" name="qaffw-estimass-color" id="qaffw-estimass-text" value="'.$qaffw_estimass_color_value.'" title="Text">';?>
          </div>
          <div class="text-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font size', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-estimass-fontsize" id="qaffw-estimass-fontsize" value="'.$qaffw_estimass_fontsize_value.'" title="10px"  placeholder="px, %, rem">';?>
          </div>
          <div class="number-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font weight', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-estimass-fontweight" id="qaffw-estimass-fontweight" value="'.$qaffw_estimass_fontweight_value.'" title="Number"  placeholder="400">';?>
          </div>
          <div class="select-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font family', 'faq-focus-for-woo');?></label>
            <?php
            echo '<select id="qaffw-estimass-fontfamilly" name="qaffw-estimass-fontfamilly">';
              foreach($all_fonts as $font_slug => $font_title){
                echo '<option value="'.esc_attr($font_slug).'" '.selected(esc_attr($qaffw_estimass_fontfamilly_value),esc_attr($font_slug)).'>'.esc_html__($font_title,'faq-focus-for-woo').'</option>';
              }
            echo '</select>';
            ?>
          </div>

          <div class="qaffw_top_title">
          <label for="" class="qaffw_style_title"><?php echo esc_html__('Top Title', 'faq-focus-for-woo');?></label>
          <div class="color-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Color', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba" name="qaffw-estimass-toptitle-color" id="qaffw-estimass-text" value="'.$qaffw_estimass_toptitle_color_value.'" title="Text">';?>
          </div>
          <div class="text-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font size', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-estimass-fontsize" id="qaffw-estimass-toptitle-fontsize" value="'.$qaffw_estimass_toptitle_fontsize_value.'" title="10px"  placeholder="px, %, rem">';?>
          </div>
          <div class="number-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font weight', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-estimass-toptitle-fontweight" id="qaffw-estimass-fontweight" value="'.$qaffw_estimass_toptitle_fontweight_value.'" title="Number"  placeholder="400">';?>
          </div>
          <div class="select-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font family', 'faq-focus-for-woo');?></label>
            <?php
            echo '<select id="qaffw-estimass-fontfamilly" name="qaffw-estimass-toptitle-fontfamilly">';
              foreach($all_fonts as $font_slug => $font_title){
                echo '<option value="'.esc_attr($font_slug).'" '.selected(esc_attr($qaffw_estimass_toptitle_fontfamilly_value),esc_attr($font_slug)).'>'.esc_html__($font_title,'faq-focus-for-woo').'</option>';
              }
            echo '</select>';
            ?>
          </div>
          </div>

        </div>
        <div class="control_row">
        <label for="" class="qaffw_style_title"><?php echo esc_html__('Headline BG', 'faq-focus-for-woo');?></label>
          <div class="color-control qaffw-style-style">
            <label for=""><?php echo esc_html__('BG', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba"  name="qaffw-estimass-bgcolor5" id="qaffw-estimass-text" value="'.$qaffw_estimass_bgcolor5_value.'" title="Text">';?>
          </div>
          <div class="text-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Box Shadow', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-reason-box-shadow5" id="qaffw-reason-box-shadow5" value="'.$qaffw_estimass_box_shadow5_value.'" title="10px"  placeholder="0 0 10px rgb(104 104 104 / 50%)">';?>
          </div>
          <div class="text-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Border Radius', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-reason-border-radius5" id="qaffw-reason-border-radius5" value="'.$qaffw_estimass_radius5_value.'" title="10px"  placeholder="px, %, rem">';?>
          </div>
        </div>
        <div class="control_row">
        <label for="" class="qaffw_style_title"><?php echo esc_html__('Expand Title', 'faq-focus-for-woo');?></label>
          <div class="color-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Color', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba" name="qaffw-estimdate-color" id="qaffw-estimdate-text" value="'.$qaffw_estimdate_color_value.'" title="Text">';?>
          </div>
          <div class="text-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font size', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-estimdate-fontsize" id="qaffw-estimdate-fontsize" value="'.$qaffw_estimdate_fontsize_value.'" title="10px"  placeholder="px, %, rem">';?>
          </div>
          <div class="number-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font weight', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-estimdate-fontweight" id="qaffw-estimdate-fontweight" value="'.$qaffw_estimdate_fontweight_value.'" title="Number"  placeholder="400">';?>
          </div>
          <div class="select-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font family', 'faq-focus-for-woo');?></label>
            <?php
            echo '<select id="qaffw-estimdate-fontfamilly" name="qaffw-estimdate-fontfamilly">';
              foreach($all_fonts as $font_slug => $font_title){
                echo '<option value="'.esc_attr($font_slug).'" '.selected(esc_attr($qaffw_estimdate_fontfamilly_value),esc_attr($font_slug)).'>'.esc_html__($font_title,'faq-focus-for-woo').'</option>';
              }
            echo '</select>';
            ?>
          </div>
        </div>
        <div class="control_row">
        <label for="" class="qaffw_style_title"><?php echo esc_html__('Expand Description', 'faq-focus-for-woo');?></label>
          <div class="color-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Color', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba" name="qaffw-reason-color" id="qaffw-reason-color" value="'.$qaffw_reason_color_value.'" title="Text">';?>
          </div>
          <div class="text-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font size', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-reason-fontsize" id="qaffw-reason-fontsize" value="'.$qaffw_reason_fontsize_value.'" title="10px"  placeholder="px, %, rem">';?>
          </div>
          <div class="number-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font weight', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-reason-fontweight" id="qaffw-reason-fontweight" value="'.$qaffw_reason_fontweight_value.'" title="Number"  placeholder="400">';?>
          </div>
          <div class="select-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Font family', 'faq-focus-for-woo');?></label>
            <?php
            echo '<select id="qaffw-reason-fontfamilly" name="qaffw-reason-fontfamilly">';
              foreach($all_fonts as $font_slug => $font_title){
                echo '<option value="'.esc_attr($font_slug).'" '.selected(esc_attr($qaffw_reason_fontfamilly_value),esc_attr($font_slug)).'>'.esc_html__($font_title,'faq-focus-for-woo').'</option>';
              }
            echo '</select>';
            ?>
          </div>
        </div>
        <div class="control_row">
        <label for="" class="qaffw_style_title"><?php echo esc_html__('Expand BG', 'faq-focus-for-woo');?></label>
          <div class="color-control qaffw-style-style">
            <label for=""><?php echo esc_html__('BG', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" class="color-field" data-wheelcolorpicker data-wcp-format="rgba"  name="qaffw-estimass-bgcolorEX" id="qaffw-estimass-text" value="'.$qaffw_estimass_bgcolorEX_value.'" title="Text">';?>
          </div>
          <div class="text-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Box Shadow', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-reason-box-shadowEX" id="qaffw-reason-box-shadow5" value="'.$qaffw_estimass_box_shadowEX_value.'" title="10px"  placeholder="0 0 10px rgb(104 104 104 / 50%)">';?>
          </div>
          <div class="text-control qaffw-style-style">
            <label for=""><?php echo esc_html__('Border Radius', 'faq-focus-for-woo');?></label>
            <?php echo '<input type="text" name="qaffw-reason-border-radiusEX" id="qaffw-reason-border-radius5" value="'.$qaffw_estimass_radiusEX_value.'" title="10px"  placeholder="px, %, rem">';?>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
