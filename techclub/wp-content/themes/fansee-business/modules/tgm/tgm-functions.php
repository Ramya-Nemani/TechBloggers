<?php
/**
 * ------------------------------------------------------
 *  Required files for this module
 * ------------------------------------------------------
 *
 * @since 1.0
 * @package Fansee Business WordPress Theme
 */
function fansee_business_tgm_files( $files ){

	$new_files = array(
		'class-tgm-plugin-activation.php',
	);

	return array_merge( $files, $new_files );
}
add_filter( 'fansee_business_modules_tgm', 'fansee_business_tgm_files' );
