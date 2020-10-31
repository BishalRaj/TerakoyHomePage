<div class="container">
    <h2>Edit <?php echo $Blog->b_title;?></h2>
    <form method="post">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Title" name="title"
                value="<?php echo $Blog->b_title;?>">
        </div>
        <div class="form-group">
            <label for="alias">Alias:</label>
            <input type="text" class="form-control" id="alias" placeholder="Enter Alias" name="alias"
                value="<?php echo $Blog->b_alias;?>">
        </div>
        <div class="form-group">
            <label for="description">Post:</label>
            <textarea class="form-control ckeditor" id="tasks" name="content"><?php echo $Blog->b_content;?></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</div>