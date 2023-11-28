<?php
/**
*/
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}
// Add custom meta box to WooCommerce product page
function add_custom_meta_box() {
    add_meta_box(
        'custom_meta_box',
        'Custom Meta Box',
        'render_custom_meta_box',
        'product',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_custom_meta_box');

// Render the custom meta box content
function render_custom_meta_box($post) {
    // Retrieve existing values from the database
    $custom_data = get_post_meta($post->ID, '_custom_data', true);
    ?>
    <style>
        .form-repeater {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, textarea {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        button {
            margin-right: 10px;
        }
    </style>

    <div class="form-repeater" id="form-repeater-container">
        <?php
        // Loop through existing values and display form fields
        if ($custom_data) {
            foreach ($custom_data as $data) {
                ?>
                <div class="form-group">
                    <label for="text1">Text 1:</label>
                    <input type="text" name="text1[]" value="<?php echo esc_attr($data['text1']); ?>" required>
                    <label for="text2">Text 2:</label>
                    <input type="text" name="text2[]" value="<?php echo esc_attr($data['text2']); ?>" required>
                    <label for="textarea">Textarea:</label>
                    <textarea name="textarea[]" rows="4" required><?php echo esc_textarea($data['textarea']); ?></textarea>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <button type="button" onclick="addForm()">Add Another</button>
    <button type="button" onclick="removeForm()">Remove Last</button>

    <script>
        function addForm() {
            var container = document.getElementById('form-repeater-container');
            var formGroup = document.createElement('div');
            formGroup.className = 'form-group';

            var text1Label = document.createElement('label');
            text1Label.textContent = 'Text 1:';
            var text1Input = document.createElement('input');
            text1Input.type = 'text';
            text1Input.name = 'text1[]';
            text1Input.required = true;

            var text2Label = document.createElement('label');
            text2Label.textContent = 'Text 2:';
            var text2Input = document.createElement('input');
            text2Input.type = 'text';
            text2Input.name = 'text2[]';
            text2Input.required = true;

            var textareaLabel = document.createElement('label');
            textareaLabel.textContent = 'Textarea:';
            var textareaInput = document.createElement('textarea');
            textareaInput.name = 'textarea[]';
            textareaInput.rows = '4';
            textareaInput.required = true;

            formGroup.appendChild(text1Label);
            formGroup.appendChild(text1Input);
            formGroup.appendChild(text2Label);
            formGroup.appendChild(text2Input);
            formGroup.appendChild(textareaLabel);
            formGroup.appendChild(textareaInput);

            container.appendChild(formGroup);
        }

        function removeForm() {
            var container = document.getElementById('form-repeater-container');
            var formGroups = container.getElementsByClassName('form-group');
            
            if (formGroups.length > 1) {
                container.removeChild(formGroups[formGroups.length - 1]);
            }
        }
    </script>
    <?php
}

// Save custom meta box data
function save_custom_meta_box($post_id) {
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
        update_post_meta($post_id, '_custom_data', $custom_data);
    }
}
add_action('save_post', 'save_custom_meta_box');

// ok perfect. now to remove email input add two text input and one textarea input also design it with css then give me all code

// Display custom data before the add to cart button
function display_custom_data_before_add_to_cart() {
    global $product;

    // Get the product ID
    $product_id = $product->get_id();

    // Retrieve existing values from the database
    $custom_data = get_post_meta($product_id, '_custom_data', true);
    ?>
    <div class="qaffw-Accordion-2">
        <?php
        // Loop through existing values and display
        if ($custom_data) {
            foreach ($custom_data as $data) {
                ?>
					<div class="qaffw-Accordion-default">
						<div class="qaffw-Accordion-heading" id="headingOne">
							<h4 class="qaffw-panel-title">
								<span class="qaffw-collapsed"><?php echo esc_html($data['text1']); ?></span>
							</h4>
						</div>
						<div id="collapseOne">
							<div class="qaffw-panel-body">
								<h2><?php echo esc_html($data['text2']); ?></h2>
								<p><?php echo nl2br(esc_html($data['textarea'])); ?></p>
							</div>
						</div>
					</div>
                <?php
            }
        }
        ?>
    </div>
    <?php
}
add_action('woocommerce_before_add_to_cart_button', 'display_custom_data_before_add_to_cart');

function qaffw_all3333_assets_for_the_public(){
	wp_enqueue_style( 'qaffw-order', plugin_dir_url( __FILE__ ) . 'assets/public/style.css', null, '1.0', 'all' );
	wp_enqueue_script( 'qaffw-order', plugin_dir_url( __FILE__ ) . 'assets/public/script.js', ['jquery'], '1.0', true );
}
add_action('wp_enqueue_scripts', 'qaffw_all3333_assets_for_the_public'); 