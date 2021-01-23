<?php


namespace Kntnt\Kadence_Theme_Featured_Image_Alignment;


class Load_CSS {

	public function run() {

		// Postpone CSS loading until we have a post id.
		add_action( 'the_post', [ $this, 'load_css' ], 10, 1 );

	}

	public function load_css( $post ) {
		$upload_dir = Plugin::upload_dir();
		$file = Plugin::str_join( $upload_dir['path'], "$post->ID.css" );
		if ( file_exists( $file ) ) {
			$url = Plugin::str_join( $upload_dir['url'], "$post->ID.css" );
			$ver = (string) strtotime( $post->post_modified );
			wp_enqueue_style( "kntnt-kadence-theme-featured-image-alignment-$post->ID", $url, [], $ver );
		}
	}

}
