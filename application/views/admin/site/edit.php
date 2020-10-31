<div class="">
    <h2>Edit Site</h2>
    <form method="post" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input value="<?php echo $Variable->site_name; ?>" type="text" class="form-control" id="name"
                   placeholder="Enter Name" name="site_name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input value="<?php echo $Variable->site_email; ?>" type="text" class="form-control" id="email"
                   placeholder="Enter Email" name="site_email">
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input value="<?php echo $Variable->site_contact; ?>" type="text" class="form-control" id="contact"
                   placeholder="Enter Contact" name="site_contact">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input value="<?php echo $Variable->site_address; ?>" type="text" class="form-control" id="address"
                   placeholder="Enter Address" name="site_address">
        </div>
        <div class="form-group">
            <label for="cv">Cv:</label>
            <input value="<?php echo $Variable->site_cv; ?>" type="text" onclick="openKCFinder(this,'files')"
                   class="form-control" id="cv" placeholder="Enter Cv" name="site_cv">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control ckeditor" id="description" placeholder="Enter Description"
                      name="site_description"><?php echo $Variable->site_description; ?></textarea>

        </div>
        <div class="form-group">
            <label for="tasks">Tasks:</label>
            <textarea class="form-control" id="tasks" placeholder="Enter Tasks"
                      name="site_tasks"><?php echo $Variable->site_tasks; ?></textarea>
        </div>
        <div class="form-group">
            <label for="logo">Logo:</label>
            <input value="<?php echo $Variable->site_logo; ?>" onclick="openKCFinder(this)" readonly type="text"
                   class="form-control" id="logo" placeholder="Enter Logo" name="site_logo">
        </div>
        <div class="form-group">
            <label for="bg_img">Bg_img:</label>
            <input value="<?php echo $Variable->site_bg_img; ?>" onclick="openKCFinder(this)" readonly type="text"
                   class="form-control" id="bg_img" placeholder="Enter Bg Img" name="site_bg_img">
        </div>
        <div class="form-group">
            <label for="pp_img">Pp_img:</label>
            <input value="<?php echo $Variable->site_pp_img; ?>" onclick="openKCFinder(this)" readonly type="text"
                   class="form-control" id="pp_img" placeholder="Enter Pp Img" name="site_pp_img">
        </div>
        <div class="form-group">
            <label for="normal_img">Normal_img:</label>
            <input value="<?php echo $Variable->site_normal_img; ?>" onclick="openKCFinder(this)" readonly type="text"
                   class="form-control" id="normal_img" placeholder="Enter Normal Img" name="site_normal_img">
        </div>
        <div class="form-group">
            <label for="remarks">Remarks:</label>
            <input value="<?php echo $Variable->site_remarks; ?>" type="text" class="form-control" id="remarks"
                   placeholder="Enter Remarks" name="site_remarks">
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</div>
