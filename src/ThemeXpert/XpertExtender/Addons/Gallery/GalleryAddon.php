<?php namespace ThemeXpert\XpertExtender\Addons\Gallery;

class GalleryAddon implements AddonInterface{
	protected $settings;
	protected $view;

	protected $name;
	protected $icon;
	protected $class;
	protected $event;

	public function init(){
		//todo: if site
		$this->site();

		//todo: if admin
		$this->admin();
	}

	public function admin()
	{
		$this->settings = new GallerySettings();
		$this->settings->init();
	}

	public function site()
	{
		$this->view = new GalleryView();
		$this->view->init();
	}
}