<?php namespace ThemeXpert\XpertExtender\Addons;

interface AddonSettingsInterface{
	public function init();

	public function render($data);
	
	public function onInsert();
	
	public function onUpdate();
}