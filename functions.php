<?php
    if (! isset($content_width)) {
        $content_width = 1362;
    }
    include 'functions/admin-function.php';
    include 'functions/avdelningar.php';
    include 'functions/avg_lum.php';
    include 'functions/css_and_js.php';
    include 'functions/frontpage.php';
    include 'functions/karnamn.php';
    include 'functions/menus.php';
    include 'functions/theme_support.php';
    include 'functions/widget_areas.php';
    include 'functions/woocommerce.php';

    function console_log($output, $with_script_tags = true)
    {
        $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
');';
        if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
        }
        echo $js_code;
    }
