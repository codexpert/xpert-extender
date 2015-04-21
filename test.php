<?php 
use ThemeXpert\Boxr\Utilities\Metabox;

class Boxer extends Metabox{

	public function render($post){

		return "hello world";
	}

	public function save($post_id){
		echo "we are here";die();
	}
}

// $boxer = new Boxer("34223", "Boxer", ['page']);