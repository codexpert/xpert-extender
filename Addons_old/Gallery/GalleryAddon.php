<?php 

class GalleryAddon extends XtenderAddon{
	protected $fillable = ["gallery_title", "gallery_content"];
	protected $name = "GalleryAddon";

	public function settings($post, $data){
		return $this->template(__DIR__."/views/settings.php", $data);
	}

	public function view($post){
		return $this->template(__DIR__."/views/view.php", $data);
	}
}