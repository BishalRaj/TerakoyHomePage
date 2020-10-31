<div class="container">
	<h2>Edit <?php echo $Gallery->g_title;?></h2>
	<form method="post">
		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" id="title" placeholder="Update Title" name="title" value="<?php echo $Gallery->g_title;?>">
		</div>		
		<div class="form-group">
			<label for="position">Image:</label>
			<input type="text" class="form-control" id="image" placeholder="Update Image" name="image" value="<?php echo $Gallery->g_image;?>" onclick="openKCFinder(this)" readonly>
		</div>	

		<div class="form-group">
			<label for="type">Type:</label>
			<textarea class="form-control ckeditor" id="type" name="type"><?php echo $Gallery->g_type;?></textarea>
		</div>
		
        <button type="submit" class="btn btn-outline-primary">Submit</button>
	</form>
</div>
