<?php


namespace Kntnt\Kadence_Theme_Featured_Image_Alignment;


class Load_ACF {

	public function run() {
		acf_add_local_field_group( $this->featured_image_fields() );
	}

	private function featured_image_fields() {
		return [
			'key' => 'group_600afecce5bee',
			'title' => __('Featured Image', 'kntnt-kadence-theme-featured-image-alignment'),
			'fields' => [
				[
					'key' => 'field_600b00f47f10d',
					'label' => '',
					'name' => '_thumbnail_id',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => [
						'width' => '',
						'class' => '',
						'id' => '',
					],
					'return_format' => 'id',
					'preview_size' => 'medium',
					'library' => 'all',
					'min_width' => 1920,
					'min_height' => 600,
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => 'jpg,jpeg,png,gif',
				],
				[
					'key' => 'field_600aff6c83fa3',
					'label' => '',
					'name' => 'featured-image-alignment-horizontal',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => [
						'width' => '50',
						'class' => '',
						'id' => '',
					],
					'choices' => [
						'left' => __('Vänster', 'kntnt-kadence-theme-featured-image-alignment'),
						'center' => __('Center', 'kntnt-kadence-theme-featured-image-alignment'),
						'right' => __('Right', 'kntnt-kadence-theme-featured-image-alignment'),
					],
					'default_value' => 'center',
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				],
				[
					'key' => 'field_600afff483fa4',
					'label' => '',
					'name' => 'featured-image-alignment-vertical',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => [
						'width' => '50',
						'class' => '',
						'id' => '',
					],
					'choices' => [
						'top' => __('Top', 'kntnt-kadence-theme-featured-image-alignment'),
						'center' => __('Center', 'kntnt-kadence-theme-featured-image-alignment'),
						'bottom' => __('Bottom', 'kntnt-kadence-theme-featured-image-alignment'),
					],
					'default_value' => 'center',
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				],
			],
			'location' => [
				[
					[
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'post',
					],
				],
			],
			'menu_order' => 0,
			'position' => 'side',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		];

	}

}