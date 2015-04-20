<?php 
use ThemeXpert\WpUtility\Metabox;

class XtenderBox extends Metabox{
	use XpertAddonContainer;

	public function render($post){
		$data = [];
		$data['addons'] = $this->getAddons();
		$data['post'] = $post;

		// array_map(function($addon){
		// 	// return [];
		// }, array_keys($data['addons']));

		return view(__DIR__ . "/views/boxer-settings.php", $data);
	}

	public function save($post_id){
		$addon = $this->getCurrentAddon();

		foreach($addon->getFillable() as $field) {
			// Make sure that it is set.
			if ( ! isset( $_POST[$field] ) ) {
				continue;
			}

			// Sanitize user input.
			$value = sanitize_text_field( $_POST[$field] );

			// Update the meta field in the database.
			update_post_meta( $post_id, $field, $value );
		}
	}
}