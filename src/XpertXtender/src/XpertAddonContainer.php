<?php

trait XpertAddonContainer{
	protected $addons = [];

	public function add($slug, $addon)
	{
		$this->addons[$slug] = $addon;
	}

	public function getAddons(){
		return $this->addons;
	}

	public function getCurrentAddon(){
		//TODO return currently selected addon
	}

	public function getAddon($slug){
		//TODO return addon by slug
		return $addons[$slug];
	}
}