<?php


namespace Kntnt\Kadence_Theme_Featured_Image_Alignment;


class Amend_Featured_Image {

	public function run() {

		add_action( 'do_meta_boxes', [ $this, 'remove_meta_box' ], 5, 2 );

		add_action( 'save_post', [ $this, 'save_css' ], 10, 2 );
		add_action( 'delete_post', [ $this, 'delete_css' ], 10, 2 );

	}

	public function remove_meta_box( $screen, $context ) {
		if ( 'post' == $screen ) {
			remove_meta_box( 'postimagediv', $screen, $context );
			Plugin::debug( 'Removed standard metabox for featured image.' );
		}
	}

	public function save_css( $pid, $post ) {
		$horizontal = get_field( 'featured-image-alignment-horizontal', $pid ) ?: 'center';
		$vertical = get_field( 'featured-image-alignment-vertical', $pid ) ?: 'center';
		Plugin::debug( 'Align %s and %s', $horizontal, $vertical );
		if ( 'center' != $horizontal || 'center' != $vertical ) {
			$css = ".site .post-thumbnail img { object-position: $horizontal $vertical; }\n";
			$file_info = Plugin::save_to_file( $css, 'css', "$post->ID" );
			Plugin::debug( 'Saved `%s` to %s', $css, $file_info['file'] );
		}
		else {
			$this->delete_css( $pid, $post );
		}
	}

	public function delete_css( $pid, $post ) {
		$file = Plugin::str_join( Plugin::upload_dir()['path'], "$post->ID.css" );
		if ( @unlink( $file ) ) {
			Plugin::debug( 'Deleted %s.', $file );
		}
	}

}
