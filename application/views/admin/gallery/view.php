<div class="card shadow mb-4">
    <div class="card-header">
		<h2>View Gallery</h2>
	</div>
	<div class="card-body">
		<table class="table table-hover" width="100%" data-identity="c_id" data-url="<?php echo admin_url('gallery/view');?>">
			<thead>
				<th data-val="sn">#</th>
				<th data-val="g_title">Title</th>
				<th data-val="g_image">Image</th>
				<th data-val="g_type">Type</th>
				<th data-val="btn" data-btn="<a href='<?php echo admin_url();?>gallery/edit/{g_id}'><i class='fa fa-edit'></i></a>">Tasks</th>
			</thead>
			<tbody>
		</tbody>
		</table>
	</div>
    
</div>
