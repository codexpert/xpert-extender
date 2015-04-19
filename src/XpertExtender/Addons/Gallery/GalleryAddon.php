<?php 

class GalleryAddon{
	protected $fillable = ['title', "your_location"];
	
	public function settings($post){
		return view(__DIR__."/views/settings.php", $data);
	}

	public function view($post){
		return view(__DIR__."/views/view.php", $data);
	}
}

register_xtender_addon("gallery_addon", "GalleryAddon");