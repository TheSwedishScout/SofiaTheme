<?php
/**
  Remove all possible fields
 **/
function wc_remove_checkout_fields($fields)
{

    // Billing fields
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_email']);
    // unset($fields['billing']['billing_phone']);
    unset($fields['billing']['billing_state']);
    // unset( $fields['billing']['billing_first_name'] );
    // unset( $fields['billing']['billing_last_name'] );
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);

    // Shipping fields
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_phone']);
    unset($fields['shipping']['shipping_state']);
    unset($fields['shipping']['shipping_first_name']);
    unset($fields['shipping']['shipping_last_name']);
    unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_city']);
    unset($fields['shipping']['shipping_postcode']);

    // Order fields
    // unset($fields['order']['order_comments']);

    return $fields;
}
add_filter('woocommerce_checkout_fields', 'wc_remove_checkout_fields');


function wc_unrequire_wc_phone_field($fields)
{
    $fields['billing_phone']['required'] = false;
    return $fields;
}
add_filter('woocommerce_billing_fields', 'wc_unrequire_wc_phone_field');


add_filter('woocommerce_checkout_fields', 'custom_override_checkout_fields');
function custom_override_checkout_fields($fields)
{
    unset($fields['billing']['billing_address_2']);
    $fields['billing']['billing_phone']['placeholder'] = __('Phone');
    // $fields['order']['order_comments']['placeholder'] = 'scoutens namn ';
    return $fields;
}


/**

* Add custom field to the checkout page

*/


function custom_checkout_field_avdelning($checkout)
{
    echo '<div id="custom_checkout_field_avdelning">';
    woocommerce_form_field(
        'Avdelning',
        array(
        'type' => 'select',
        'class' => array(
            'scout-avdelning-select form-row-wide'
        ),
        'required'    => true,
        'label' => __('Avdelning'),
        'options'     => array(
            'Familjescouting' => __('Familjescouting'),
            'Spårare' => __('Spårare'),
            'Upptäckare' => __('Upptäckare'),
            'Äventyrare' => __('Äventyrare'),
            'Utmanare' => __('Utmanare'),
            'Ledare' => __('Ledare'),
            'Ej medlem' => __('Ej medlem')
        ),
        ),
        $checkout->get_value('Avdelning')
    );
    echo '</div>';
}
add_action('woocommerce_before_checkout_billing_form', 'custom_checkout_field_avdelning');


function scout_save_checkout_avdelning($order_id)
{
    if (!empty($_POST['Avdelning'])) {
        update_post_meta($order_id, 'Avdelning', sanitize_text_field($_POST['Avdelning']));
    }
}

add_action('woocommerce_checkout_update_order_meta', 'scout_save_checkout_avdelning');
