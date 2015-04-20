<?php

abstract class XtenderAddon{
	protected $fillable;

	public function getSettings($post){
		$fields = [];

		foreach($this->fillable as $field){
			$fields[$field] = get_post_meta( $post->ID, $field, true );
		}

		return $this->settings($post, $fields);

	}

	public function getFillable(){
		return $this->fillable;
	}
}