<div class="card shadow mb-4">
    <div class="card-header">
		<h2>View Categories</h2>
	</div>
	<div class="card-body">
		<table class="table table-hover" width="100%" data-identity="c_id" data-url="<?php echo admin_url('team/view');?>">
			<thead>
				<th data-val="sn">#</th>
				<th data-val="t_name">Name</th>
				<th data-val="t_position">Position</th>
				<th data-val="t_image">Image</th>
				<th data-val="t_branch">Branch</th>
				<th data-val="t_status">Status</th>
				<th data-val="btn" data-btn="<a href='<?php echo admin_url();?>team/edit/{t_id}'><i class='fa fa-edit'></i></a>">Tasks</th>
			</thead>
			<tbody>
		</tbody>
		</table>
	</div>
    
</div>
