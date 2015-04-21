<?php echo Former::select($slug)->label('Addons')->options($addons); ?>

<hr>

<?php foreach($addons as $slug=>$addon): ?>
	<div class="addon-<?php echo $slug ?> addon-settings">
		<?php echo $addon->getSettings($post); ?>
	</div>
<?php endforeach; ?>