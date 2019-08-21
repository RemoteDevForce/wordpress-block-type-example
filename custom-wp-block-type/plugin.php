<?php

/**
 * Plugin Name: Custom Block Examples
 * Author: @OGProgrammer - RemoteDevForce.com
 * Version: 1.0.0
 */

function loadMyBlockFiles()
{
    // Dynamic Example
    wp_enqueue_script(
        'josh-custom-dynamic-blocks-example',
        plugin_dir_url(__FILE__) . 'dynamic-block.js',
        array('wp-blocks', 'wp-i18n', 'wp-editor'),
        true
    );
    // Static Example
    wp_enqueue_script(
        'josh-custom-static-blocks-example',
        plugin_dir_url(__FILE__) . 'static-block.js',
        array('wp-blocks', 'wp-i18n', 'wp-editor'),
        true
    );
}

add_action('enqueue_block_editor_assets', 'loadMyBlockFiles');

/*
 * COLOR PICKER BLOCK
 */
function borderBoxOutput($props)
{
    return '<h3 style="border: 5px solid' . $props['color'] . '">' . $props['content'] . '</h3>';
}

register_block_type('josh/color-block', array(
    'render_callback' => 'borderBoxOutput',
));

// Metadata
function myBlockMeta()
{
    register_meta('post', 'color', array('show_in_rest' => true, 'type' => 'string', 'single' => true));
}

add_action('init', 'myBlockMeta');


/*
 * STOCK MARKET BLOCK
 */
function stockPriceOutput($props)
{
    // Default stock if one not saved to the best company ever
    if (empty($props['symbol'])) {
        $props['symbol'] = 'TSLA';
    }
    // Get the price
    $response = wp_remote_get('https://query1.finance.yahoo.com/v8/finance/chart/' . trim($props['symbol']));
    if (empty($response['body'])) {
        error_log('An error occurred when trying to fetch stock prices.');
        return 'ERROR';
    } else {
        $data = json_decode($response['body'], true);
        //regularMarketTime
        if (!empty($data['chart']['result'][0]['meta']['regularMarketPrice'])) {
            $stockPrice = $data['chart']['result'][0]['meta']['regularMarketPrice'];
        }
        return '<h3 style="color: #000;">' . $props['symbol'] . ' : $' . $stockPrice . '</h3>';
    }
}

register_block_type('josh/stock-block', array(
    'render_callback' => 'stockPriceOutput',
));

// Metadata
function myStockBlockMeta()
{
    register_meta('post', 'symbol', array('show_in_rest' => true, 'type' => 'string', 'single' => true));
}

add_action('init', 'myStockBlockMeta');