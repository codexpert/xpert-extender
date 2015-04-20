<?php echo Former::select("addon")->options($addons); ?>

<hr>

<?php foreach($addons as $slug=>$addon): ?>
	<div class="addon-<?php echo $slug ?> addon-settings">
		<?php echo $addon->getSettings($post); ?>
	</div>
<?php endforeach; ?>