<div class="container">
    <h2>Add Blog</h2>
    <form method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Title" name="title">
        </div>
        <div class="form-group">
            <label for="alias">Alias:</label>
            <input type="text" class="form-control" id="alias" placeholder="Enter Alias" name="alias">
        </div>
        <div class="form-group">
            <label for="description">Post:</label>
            <textarea class="form-control ckeditor" id="tasks" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</div>