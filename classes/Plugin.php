<?php


namespace Kntnt\Kadence_Theme_Featured_Image_Alignment;


final class Plugin extends Abstract_Plugin {

	use Logger;
	use File_Save;
	use Dependency_Check;

	private static $classes = [
		'any' => [
			'init' => [
				'Load_ACF',
			],
		],
		'public' => [
			'wp_enqueue_scripts' => [
				'Load_CSS',
			],
		],
		'admin' => [
			'init' => [
				'Amend_Featured_Image',
			],
		],
	];

	public static function dependencies() {
		return [
			'theme' => [
				'kadence' => 'Kadence Theme',
			],
			'plugins' => [
				[
					'advanced-custom-fields/acf.php' => 'Advanced Custom Fields',
					'advanced-custom-fields-pro/acf.php' => 'Advanced Custom Fields Pro',
				],
			],
		];
	}

	public function classes_to_load() {
		return self::is_dependencies_satisfied() ? self::$classes : [];
	}

}
