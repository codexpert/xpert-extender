<?php

/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function xpert_xtender_add_meta_box() {

	$screens = array( 'page_section' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'xpert_xtender_sectionid',
			__( 'Xpert Xtender', 'xpert_xtender' ),
			'xpert_xtender_meta_box_callback',
			$screen
		);
	}
}

add_action( 'add_meta_boxes', 'xpert_xtender_add_meta_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function xpert_xtender_meta_box_callback( $post ) {
	/*
	 * Use get_post_meta() to retrieve an existing value
	 * from the database and use the value for the form.
	 */
	$project_title = get_post_meta( $post->ID, 'project_title', true );
	$client_name = get_post_meta( $post->ID, 'client_name', true );

	echo view(__DIR__ . "/settings.php", compact('project_title', 'client_name'));
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function xpert_xtender_save_meta_box_data( $post_id ) {

	/*
	 * We need to verify this came from our screen and with proper authorization,
	 * because the save_post action can be triggered at other times.
	 */

	// Check if our nonce is set.
	if ( ! isset( $_POST['xpert_xtender_meta_box_nonce'] ) ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! wp_verify_nonce( $_POST['xpert_xtender_meta_box_nonce'], 'xpert_xtender_meta_box' ) ) {
		return;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Check the user's permissions.
	if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}

	} else {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	

	/* OK, it's safe for us to save the data now. */
	$fillable = ['project_title', 'client_name'];

	foreach($fillable as $field)
	{
		// Make sure that it is set.
		if ( ! isset( $_POST[$field] ) ) {
			return;
		}

		// Sanitize user input.
		$value = sanitize_text_field( $_POST[$field] );

		// Update the meta field in the database.
		update_post_meta( $post_id, $field, $value );
	}

}
add_action( 'save_post', 'xpert_xtender_save_meta_box_data' );
