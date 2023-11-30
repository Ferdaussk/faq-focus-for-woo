<?php
namespace ProdQAFFW;
if ( ! defined( 'ABSPATH' ) ) exit;
use ProdQAFFW\PageSettings\Page_Settings;
define( "QAFFW_ASFSK_ASSETS_PUBLIC_DIR_FILE", plugin_dir_url( __FILE__ ) . "../assets/public" );
define( "QAFFW_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "../assets/admin" );
class ClassProdQAFFW {
	private static $_instance = null;
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function qaffw_all_assets_for_the_admin(){
        wp_enqueue_script( 'qaffw-script', plugin_dir_url( __FILE__ ) . '../assets/admin/script.js', array('jquery'), '1.0', true );
        wp_enqueue_style( 'qaffw-order', plugin_dir_url( __FILE__ ) . '../assets/admin/order.css', null, '1.0', 'all' );
		if (isset($_GET['page']) && $_GET['page'] === 'get-faq-focus-for-woo') {
            wp_enqueue_script( 'qaffw-wheelcolorpicker', plugin_dir_url( __FILE__ ) . '../assets/admin/colorpicker/jquery.wheelcolorpicker.js', array('jquery'), '1.0', true );
            $all_css_js_file = array(
                'qaffw-style' => array('qaffw_path_define'=>QAFFW_ASFSK_ASSETS_ADMIN_DIR_FILE . '/style.css'),
                'qaffw-wheelcolorpicker' => array('qaffw_path_define'=>QAFFW_ASFSK_ASSETS_ADMIN_DIR_FILE . '/colorpicker/wheelcolorpicker.css'),
            );
            foreach($all_css_js_file as $handle => $fileinfo){
                wp_enqueue_style( $handle, $fileinfo['qaffw_path_define'], null, '1.0', 'all');
            }
        }
	}

	public function qaffw_all_assets_for_the_public(){
        wp_enqueue_style( 'qaffw-fontawesome', plugin_dir_url( __FILE__ ) . '../assets/public/css/fontawesome.min.css', null, '1.0', 'all' );
        wp_enqueue_style( 'qaffw-order', plugin_dir_url( __FILE__ ) . '../assets/public/style.css', null, '1.0', 'all' );
        wp_enqueue_script( 'qaffw-order', plugin_dir_url( __FILE__ ) . '../assets/public/script.js', ['jquery'], '1.0', true );
	}

	public function qaffw_admin_menu_test(){
		if(current_user_can('manage_options')){
			add_submenu_page(
				'woocommerce',
				'FAQ Focus for Woo',
				'FAQ Focus for Woo',
				'manage_options',
				'get-faq-focus-for-woo',
				array($this, 'qaffw_plugin_submenu_about_plugin_page'),
                12
			);
		}
    add_action('admin_init', array($this, 'qaffw_admin_controls'));
	}
    public function qaffw_admin_controls() {
        include __DIR__ . '/../dashboard/controls.php';
    }

	public function qaffw_plugin_submenu_about_plugin_page() {
        include __DIR__ . '/../dashboard/dashboard-style.php';
    }
    
    public function qaffw_plugin_function_for_datas_callback() {}

    public function qaffw_plugin_settings_to_whitelist( $options ) {
      $options['qaffw-plugin-settings'] = array(
        'qaffw-checkout-page-check',
        // *** reason
        'qaffw-reason-color',
        'qaffw-reason-fontsize',
        'qaffw-reason-fontweight',
        'qaffw-reason-fontfamilly',
        // *** estimdate
        'qaffw-estimdate-color',
        'qaffw-estimdate-fontsize',
        'qaffw-estimdate-fontweight',
        'qaffw-estimdate-fontfamilly',
        // *** estimass
        'qaffw-estimass-color',
        'qaffw-estimass-fontsize',
        'qaffw-estimass-fontweight',
        'qaffw-estimass-fontfamilly',
        // headline bg
        'qaffw-estimass-bgcolor5',
        'qaffw-reason-box-shadow5',
        'qaffw-reason-border-radius5',
        // expand bg
        'qaffw-estimass-bgcolorEX',
        'qaffw-reason-box-shadowEX',
        'qaffw-reason-border-radiusEX',
      );
      return $options;
    }

    public function qaffw_taxoes_styles(){
        // *** reason
        $qaffw_reason_color_value = get_option( 'qaffw-reason-color' );
        $qaffw_reason_bgcolor_value = get_option( 'qaffw-reason-bgcolor' );
        $qaffw_reason_fontsize_value = get_option( 'qaffw-reason-fontsize');
        $qaffw_reason_fontweight_value = get_option( 'qaffw-reason-fontweight');
        $qaffw_reason_fontfamilly_value = get_option( 'qaffw-reason-fontfamilly' );
        // *** estimdate
        $qaffw_estimdate_color_value = get_option( 'qaffw-estimdate-color');
        $qaffw_estimdate_fontsize_value = get_option( 'qaffw-estimdate-fontsize');
        $qaffw_estimdate_fontweight_value = get_option( 'qaffw-estimdate-fontweight');
        $qaffw_estimdate_fontfamilly_value = get_option( 'qaffw-estimdate-fontfamilly');
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
        $html = "<style>
        .qaffw-panel-body p{
            color:{$qaffw_reason_color_value} !important;
            font-size:{$qaffw_reason_fontsize_value} !important;
            font-weight:{$qaffw_reason_fontweight_value} !important;
            font-family:{$qaffw_reason_fontfamilly_value} !important;
        }
        .qaffw-Accordion-t{
            color:{$qaffw_estimdate_color_value} !important;
            font-size:{$qaffw_estimdate_fontsize_value} !important;
            font-weight:{$qaffw_estimdate_fontweight_value} !important;
            font-family:{$qaffw_estimdate_fontfamilly_value} !important;
        }
        .qaffw-Accordion-toptitle{
            color:{$qaffw_estimass_toptitle_color_value} !important;
            font-size:{$qaffw_estimass_toptitle_fontsize_value} !important;
            font-weight:{$qaffw_estimass_toptitle_fontweight_value} !important;
            font-family:{$qaffw_estimass_toptitle_fontfamilly_value} !important;
        }
        .qaffw-panel-title .qaffw-collapsed{
            color:{$qaffw_estimass_color_value} !important;
            font-size:{$qaffw_estimass_fontsize_value} !important;
            font-weight:{$qaffw_estimass_fontweight_value} !important;
            font-family:{$qaffw_estimass_fontfamilly_value} !important;
        }
        .qaffw-Accordion-default, .qaffw-panel-title .qaffw-collapsed{
            background:{$qaffw_estimass_bgcolor5_value} !important;
            box-shadow:{$qaffw_estimass_box_shadow5_value} !important;
            border-radius:{$qaffw_estimass_radius5_value} !important;
        }
        .qaffw-panel-body{
            background:{$qaffw_estimass_bgcolorEX_value} !important;
            box-shadow:{$qaffw_estimass_box_shadowEX_value} !important;
            border-radius:{$qaffw_estimass_radiusEX_value} !important;
        }
        ";
        $html .= '</style>';
        echo $html;
    }

    public function qaffw_settings_plugin_action_link($links, $file) {
        if (plugin_basename(__FILE__) == $file) {
            $qaffw_settings_link = '<a href="' . admin_url('admin.php?page=get-faq-focus-for-woo') . '" target="_blank">' . esc_html__('Settings', 'faq-focus-for-woo') . '</a>';
            array_push($links, $qaffw_settings_link);
        }
        return $links;
    }

    public function qaffw_add_to_cart_button(){
        echo qaffw_sk_single();
    }

    public function qaffw_after_add_to_cart_button(){
        echo qaffw_sk_single();
    }

    public function qaffw_after_single_product_summary(){
        echo qaffw_sk_single();
    }

    public function qaffw_before_single_product_summary(){
        echo qaffw_sk_single();
    }

    public function qaffw_after_single_product(){
        echo qaffw_sk_single();
    }
    
    public function qaffw_single_product_tab($tabs) {
        $tabs['custom_tab'] = array(
            'title'    => get_option( 'wpesd-top-title-check')==true?get_option( 'wpesd-top-title-check'):esc_html__('Woo FAQ Focus', 'faq-focus-for-woo'),
            'priority' => 50,
            'callback' => [$this, 'qaffw_custom_tab_content'],
        );
        return $tabs;
    }

    public function qaffw_custom_tab_content(){
        echo qaffw_sk_single();
    }

    public function qaffw_add_custom_postbox() {
        add_meta_box(
            'custom_meta_box',
            esc_html__('FAQ Focus for Woo', 'faq-focus-for-woo'),
            [$this, 'render_custom_meta_box'],
            'product',
            'normal',
            'high'
        );
    }
    
    public function render_custom_meta_box($post) {
        $custom_data = get_post_meta($post->ID, '_qaffw_custom_data', true);
        $qaffw_admin_html = '';
        $qaffw_admin_html .= '<div class="form-repeater" id="form-repeater-container">';
            if ($custom_data) {
                foreach ($custom_data as $data) {
                    $qaffw_admin_html .= '<div class="qaffw-form-group">';
                        $qaffw_admin_html .= '<label class="qaffw-adminlbl qaffw-headline-accdn-lbl" for="text1">'.esc_html__('Headline:', 'faq-focus-for-woo').'</label>';
                        $qaffw_admin_html .= '<input class="qaffw-headline-accdn" type="text" name="text1[]" value="'.esc_attr($data['text1']).'" required>';
                        $qaffw_admin_html .= '<label class="qaffw-adminlbl qaffw-title-accdn-lbl" for="text2">'.esc_html__('Title:', 'faq-focus-for-woo').'</label>';
                        $qaffw_admin_html .= '<input class="qaffw-title-accdn" type="text" name="text2[]" value="'.esc_attr($data['text2']).'" required>';
                        $qaffw_admin_html .= '<label class="qaffw-adminlbl qaffw-desc-accdn-lbl" for="textarea">'.esc_html__('Description:', 'faq-focus-for-woo').'</label>';
                        $qaffw_admin_html .= '<textarea name="textarea[]" rows="4" class="qaffw-desc-accdn" required>'.esc_textarea($data['textarea']).'</textarea>';
                    $qaffw_admin_html .= '</div>';
                }
            }
        $qaffw_admin_html .= '</div>';
        $qaffw_admin_html .= '<button type="button" class="qaffw-adminbtn qaffw-btn-add" onclick="addForm()">'.esc_html__('Add New', 'faq-focus-for-woo').'</button>';
        $qaffw_admin_html .= '<button type="button" class="qaffw-adminbtn qaffw-btn-remv" onclick="removeForm()">'.esc_html__('Remove Last', 'faq-focus-for-woo').'</button>';
        echo $qaffw_admin_html;
    }

    public function qaffw_save_custom_postbox_data($post_id) {
        if (isset($_POST['text1']) && isset($_POST['text2']) && isset($_POST['textarea'])) {
            $custom_data = array();
            // Sanitize and save form data
            for ($i = 0; $i < count($_POST['text1']); $i++) {
                $text1 = sanitize_text_field($_POST['text1'][$i]);
                $text2 = sanitize_text_field($_POST['text2'][$i]);
                $textarea = sanitize_textarea_field($_POST['textarea'][$i]);
    
                if ($text1 && $text2 && $textarea) {
                    $custom_data[] = array(
                        'text1' => $text1,
                        'text2' => $text2,
                        'textarea' => $textarea,
                    );
                }
            }
            // Save data in post meta
            update_post_meta($post_id, '_qaffw_custom_data', $custom_data);
        }
    }

	public function __construct() {
        add_action('save_post', [$this, 'qaffw_save_custom_postbox_data']);
        add_action('add_meta_boxes', [$this, 'qaffw_add_custom_postbox']);
        // Last Date 
        if(get_option( 'qaffw-checkout-page-check', 'before_add_to_cart_button' )=='before_add_to_cart_button'){
            add_action('woocommerce_before_add_to_cart_button', [$this, 'qaffw_add_to_cart_button']); // For add_to_cart_button
        }elseif(get_option( 'qaffw-checkout-page-check' )=='after_add_to_cart_button'){
            add_action('woocommerce_after_add_to_cart_button', [$this, 'qaffw_after_add_to_cart_button']); // For after_add_to_cart_button
        }elseif(get_option( 'qaffw-checkout-page-check')=='after_single_product_summary'){
            add_action('woocommerce_after_single_product_summary', [$this, 'qaffw_after_single_product_summary']); // For after_single_product_summary
        }elseif(get_option( 'qaffw-checkout-page-check')=='before_single_product_summary'){
            add_action('woocommerce_before_single_product_summary', [$this, 'qaffw_before_single_product_summary']); // For before_single_product_summary
        }elseif(get_option( 'qaffw-checkout-page-check')=='after_single_product'){
            add_action('woocommerce_after_single_product', [$this, 'qaffw_after_single_product']); // For after_single_product
        }elseif(get_option( 'qaffw-checkout-page-check')=='qaffw_product_tab'){
            add_filter('woocommerce_product_tabs', [$this, 'qaffw_single_product_tab']); // For single product tab
        }
		add_filter( 'plugin_action_links', [$this,'qaffw_settings_plugin_action_link'], 10, 2 );
		add_filter( 'whitelist_options', [$this,'qaffw_plugin_settings_to_whitelist'] );
        add_action('admin_enqueue_scripts', [$this, 'qaffw_all_assets_for_the_admin']);
        add_action('wp_enqueue_scripts', [$this, 'qaffw_all_assets_for_the_public']);
		add_action('admin_menu', [$this,'qaffw_admin_menu_test']);
        add_action('wp_head', [$this, 'qaffw_taxoes_styles'],99);
	}
}
ClassProdQAFFW::instance();

