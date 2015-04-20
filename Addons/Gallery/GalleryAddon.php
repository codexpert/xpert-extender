<?php 

class GalleryAddon extends XtenderAddon{
	protected $fillable = ['title'];
	
	public function settings($post, $data){
		return $this->template(__DIR__."/views/settings.php", $data);
	}

	public function view($post){
		return $this->template(__DIR__."/views/view.php", $data);
	}
}

// register_xtender_addon("gallery_addon", "GalleryAddon");