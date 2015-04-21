<?php 
use ThemeXpert\Boxr\Utilities\Metabox;

class Boxr extends Metabox{
	use AddonsContainer;

	public function render($post){
		$data = array(
			'post'=> $post,
			'addons'=> $this->getAddons(),
			'slug'=> $this->slug,
		);

		return view(__DIR__ . "/Views/default.php", $data);
	}

	public function save($post_id){
		// $current_addon_slug = get_post_meta( $post_id, $this->slug, true );
		
		$current_addon_slug = $_POST[$this->slug];

		$addon = $this->getAddon($current_addon_slug);

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