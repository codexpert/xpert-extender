<?php wp_nonce_field( 'xpert_xtender_meta_box', 'xpert_xtender_meta_box_nonce' ); ?>

<label for="project_title">
	<?php _e( 'Project Title', 'xpert_xtender' );  ?>
</label> 

<input type="text" name="project_title" value="<?php echo esc_attr( $project_title )  ?>" />

<label for="client_name">
	<?php _e( 'Client Name', 'xpert_xtender' );  ?>
</label>

<input type="text" name="client_name" value="<?php echo esc_attr( $client_name )  ?>" />