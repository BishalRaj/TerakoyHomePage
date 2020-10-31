<div class="container">

    <div class="panel panel-info">
        <div class="panel-heading">
            <h2>Add Social Media</h2>
        </div>
        <div class="panel-body">
            <form method="post" action="<?php echo base_url('admin/site/view');?>">


                <table class="table">
                    <tr>
                        <td><label for="name">Name:</label></td>
                        <td>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="site_name"
                                value="<?php echo $data->s_name;?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td>
                            <input type="text" class="form-control" id="email" placeholder="Enter Email"
                                name="site_email" value="<?php echo $data->s_email;?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="contact">Contact:</label></td>
                        <td>
                            <input type="text" class="form-control" id="contact" placeholder="Enter Contact"
                                name="site_contact" value="<?php echo $data->s_contact;?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="address">Address:</label></td>
                        <td>
                            <input type="text" class="form-control" id="address" placeholder="Enter Address"
                                name="site_address" value="<?php echo $data->s_address;?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="cv">Cv:</label></td>
                        <td>
                            <input type="text" class="form-control" id="cv" placeholder="Enter Cv" name="site_cv"
                                value="<?php echo $data->s_cv;?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="description">Description:</label></td>
                        <td>
                            <input type="text" class="form-control" id="description" placeholder="Enter Description"
                                name="site_description" value="<?php echo $data->s_desc;?>">
                        </td>
                    </tr>
                    <tr>
                        <th scope="col">Social Media</th>
                        <th scope="col"></th>
                    </tr>

                    <?php 
                    $social=json_decode($data->s_social,true);
                    ?>

                    <tr>
                        <td><i class="fab fa-facebook-f mx-2"></i> Facebook</td>
                        <td>
                            <input type="text" class="form-control" id="description" placeholder="Enter Facebook link"
                                name="site_social_facebook" value="<?php echo $social['facebook']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-twitter mx-2"></i>Twitter</td>
                        <td>
                            <input type="text" class="form-control" id="description" placeholder="Enter Twitter link"
                                name="site_social_twitter" value="<?php echo $social['twitter']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-github mx-2"></i>Github</td>
                        <td>
                            <input type="text" class="form-control" id="description" placeholder="Enter Github link"
                                name="site_social_github" value="<?php echo $social['github']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fab fa-youtube mx-2"></i>Youtube</td>
                        <td>
                            <input type="text" class="form-control" id="description" placeholder="Enter Youtube link"
                                name="site_social_youtube" value="<?php echo $social['youtube']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="logo">Logo:</label></td>
                        <td>
                            <input type="text" class="form-control" id="logo" placeholder="Enter Logo" name="site_logo"
                                onclick="openKCFinder(this)" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="bg_img">Bg_img:</label></td>
                        <td>
                            <input type="text" class="form-control" id="bg_img" placeholder="Enter Bg Img"
                                name="site_bg_img" onclick="openKCFinder(this)" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="pp_img">Pp_img:</label>
                            <img src="<?php echo $data->s_pp_img;?>" alt="" srcset=""></td>
                        <td>
                            <input type="text" class="form-control" id="pp_img" placeholder="Enter Pp Img"
                                name="site_pp_img" onclick="openKCFinder(this)" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="normal_img">Normal_img:</label></td>
                        <td>
                            <input type="text" class="form-control" id="normal_img" placeholder="Enter Normal Img"
                                name="site_normal_img" onclick="openKCFinder(this)" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="remarks">Remarks:</label></td>
                        <td>
                            <input type="text" class="form-control" id="remarks" placeholder="Enter Remarks"
                                name="site_remarks" value="<?php echo $data->s_remarks;?>">
                        </td>
                    </tr>

                </table>
                <button type="submit" class="btn btn-warning mx-auto">Submit</button>
            </form>

        </div>
    </div>
</div>