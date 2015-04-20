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

	public function getAddon($slug){
		//TODO return addon by slug
		return $this->addons[$slug];
	}
}