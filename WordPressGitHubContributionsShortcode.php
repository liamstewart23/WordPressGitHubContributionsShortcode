<?php
/*
Plugin Name: GitHub Contributions Shortcode
Plugin URI: https://github.com/liamstewart23/WordPressGitHubContributionsShortcode
Description:
Version: 1.0.0
Author: Liam Stewart
Author URI: https://liamstewart.ca
*/

/**
 * @param $atts
 *
 * @return string
 */
function ls_ghcont( $atts ) {
    global $username;
    extract( shortcode_atts( array(
        'username'     => '',
    ), $atts ) );

    if(empty($username)) {
        return 'Missing username';
    }

    return include 'partials/shortcode.php';
}

function ls_ghcont_shortcodes() {
    add_shortcode( 'github', 'ls_ghcont' );// register shortcode
}

add_action( 'init', 'ls_ghcont_shortcodes' );// init

