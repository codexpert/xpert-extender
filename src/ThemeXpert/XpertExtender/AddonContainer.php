<?php namespace ThemeXpert\XpertExtender;

class AddonContainer{
	protected $addons;

	public function add(AddonInterface $addon){
		//TODO: initialize if on page
		$addon->init(); //init upon adding a addon
	}

	public function getAddons(){
		return array_map(function($addon){
			return array(
				'image' => $addon->image,
				'name' => $addon->name,
				'id' => $addon->id,
			);
		}, $addons);
	}
}