
<div class="container">
	<h2>Add Pictures</h2>
	<form method="post">
		<div class="form-group">
			<label for="title">Title:</label>
			<input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
		</div>
		<div class="form-group">
			<label for="image">Image:</label>
			<input type="text" class="form-control" id="image" placeholder="Insert Image" name="image" onclick="openKCFinder(this)">
		</div>	
		<div class="form-group">
			<label for="type">Type:</label>
			<input type="text" class="form-control" id="type" placeholder="Enter Type" name="type">
		</div>	
        <button type="submit" class="btn btn-outline-primary">Submit</button>
	</form>
</div>
