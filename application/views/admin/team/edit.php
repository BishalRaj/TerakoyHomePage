<div class="container">
	<h2>Edit <?php echo $Team->t_name;?></h2>
	<form method="post">
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $Team->t_name;?>">
		</div>
		<div class="form-group">
			<label for="position">Position:</label>
			<input type="text" class="form-control" id="position" placeholder="Enter Position" name="position" value="<?php echo $Team->t_position;?>">
		</div>
		
		<div class="form-group">
			<label for="position">Image:</label>
			<input type="text" class="form-control" id="image" placeholder="Add Image" name="image" value="<?php echo $Team->t_image;?>" onclick="openKCFinder(this)" readonly>
		</div>

		<div class="form-group">
			<label for="branch">branch:</label>
			<input type="text" class="form-control" id="branch" placeholder="Enter branch" name="branch" value="<?php echo $Team->t_branch;?>">
		</div>
		<div class="form-group">
		<label for="status">Select Status:</label>

<select name="status" id="status">
  <option value="0">0</option>
  <option value="1" selected="true">1</option>
</select>
</div>

		
		
        <button type="submit" class="btn btn-outline-primary">Submit</button>
	</form>
</div>
