<?php

$gallery = new Addons\Gallery\GalleryAddon();
$slider = new Addons\Gallery\SliderAddon();

$container = new AddonContainer();

$container->add($gallery, $slider);


?>

<select>
	<?php foreach($container->getAddons() as $addon): ?>
		<option value="<?php echo $addon->id?>"><?php echo $addon->name?></option>
	<?php endforeach; ?>
</select>

<div class="addon-settings-block">
	<?php foreach($container->getAddons() as $addon): ?>
	<div data-addon="<?php echo $addon->id ?>" class="addon-settings hide">
		<?php echo $addon->settings->render(); ?>
	</div>
	<?php endforeach; ?>
</div>