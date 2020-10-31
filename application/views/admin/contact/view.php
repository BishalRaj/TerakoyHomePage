<div class="card shadow mb-4">
    <div class="card-header">
        <h2>View Contact</h2>
    </div>
    <div class="card-body">
        <table class="table table-hover" width="100%" data-identity="c_id"
            data-url="<?php echo admin_url('contact/view');?>">
            <thead>
                <th data-val="sn">#</th>
                <th data-val="c_name">Name</th>
                <th data-val="c_email">Email</th>
                <th data-val="c_phone">Phone</th>
                <th data-val="c_desc">Description</th>
                <th data-val="btn"
                    data-btn="<a href='<?php echo admin_url();?>contact/edit/{c_id}'><i class='fa fa-edit'></i></a>">
                    Tasks</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

</div>