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

	protected function template($file, $data){
		return view($file, $data);
	}

	public function __toString(){
		return $this->name;
	}
}