<?php 

class TitasTestimonial extends XtenderAddon
{
	protected $fillable = ['title', 'photo', 'testimonial'];

	public function settings($post)
	{
		return view(__DIR__ . "/views/settings.php", compact('post'));
	}
}