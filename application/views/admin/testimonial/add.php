
<div class="container">
	<h2>Add Testimonial</h2>
	<form method="post">
		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
		</div>
		<div class="form-group">
			<label for="position">Position:</label>
			<input type="text" class="form-control" id="position" placeholder="Enter Position" name="position">
		</div>
		<div class="form-group">
			<label for="position">Image:</label>
			<input type="text" class="form-control" id="image" placeholder="Enter Position" name="image" onclick="openKCFinder(this)">
		</div>		
		<div class="form-group">
			<label for="desc">Testimonial:</label>
			<textarea class="form-control ckeditor" id="desc" name="desc"></textarea>
		</div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
	</form>
</div>
