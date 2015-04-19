<div class="settings-block">
	<div class="form-group">
		<label for=""> On <input type="radio" name="description" value="1"> </label>
		<label for=""> Off <input type="radio" name="description" value="0"> </label>
	</div>

	<div class="form-group">
		<label for="">Title</label>
		<div>
			<input type="text" class="form-control">
		</div>
	</div>
</div>

<?php Former::map("your_location") ?>
<?php Former::repeatable("sliders") ?>