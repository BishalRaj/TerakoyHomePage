<div class="card shadow mb-4">
    <div class="card-header">
        <h2>View Categories</h2>
    </div>
    <div class="card-body">
        <table class="table table-hover" width="100%" data-identity="c_id"
            data-url="<?php echo admin_url('api/getBlogs');?>">
            <thead>
                <th data-val="sn">#</th>
                <th data-val="b_title">Title</th>
                <th data-val="btn"
                    data-btn="<a href='<?php echo admin_url();?>blogs/edit/{b_id}'><i class='fa fa-edit'></i></a>">Tasks
                </th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</div>