<?php namespace ThemeXpert\XpertExtender\Addons;

interface AddonViewInterface{
	public function init();

	public function render($data);
}