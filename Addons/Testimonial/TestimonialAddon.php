<?php 

class TestimonialAddon extends XtenderAddon{
	protected $fillable = ["title", "testimonial"];
	protected $name = "TestimonialAddon";
	
	public function settings($post, $data){
		return $this->template(__DIR__."/views/settings.php", $data);
	}

	public function view($post){
		return $this->template(__DIR__."/views/view.php", $data);
	}
}