<?php
/**
 * Plugin Name: Epub Upload Compatibilty Plugin
 * Description: Adds EPUB file support to the WordPress Media Library and WooCommerce downloadable products.
 * Version: 1.0.0
 * Author: Premazon Inc
 * License: GPL-2.0-or-later
 * Text Domain: epub-upload-compatibility-plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add EPUB to the list of allowed WordPress upload MIME types.
 *
 * @param array $mimes Allowed MIME types.
 * @return array
 */
function premazon_allow_epub_uploads( $mimes ) {
	$mimes['epub'] = 'application/epub+zip';

	return $mimes;
}
add_filter( 'upload_mimes', 'premazon_allow_epub_uploads' );

/**
 * Ensure EPUB files pass WordPress file type validation.
 *
 * EPUB files are ZIP-based containers, so some servers detect them as
 * application/zip or application/octet-stream. This filter tells WordPress
 * to treat files with the .epub extension as EPUB files.
 *
 * @param array       $data      File type data.
 * @param string      $file      Full path to the file.
 * @param string      $filename  File name.
 * @param string[]    $mimes     Allowed MIME types.
 * @param string|bool $real_mime MIME type detected by PHP/fileinfo.
 * @return array
 */
function premazon_fix_epub_filetype( $data, $file, $filename, $mimes, $real_mime ) {
	$extension = strtolower( pathinfo( $filename, PATHINFO_EXTENSION ) );

	if ( 'epub' === $extension ) {
		$data['ext']             = 'epub';
		$data['type']            = 'application/epub+zip';
		$data['proper_filename'] = false;
	}

	return $data;
}
add_filter( 'wp_check_filetype_and_ext', 'premazon_fix_epub_filetype', 10, 5 );
