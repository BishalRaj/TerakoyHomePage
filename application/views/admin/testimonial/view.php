<div class="card shadow mb-4">
    <div class="card-header">
		<h2>View Testimonials</h2>
	</div>
	<div class="card-body">
		<table class="table table-hover" width="100%" data-identity="c_id" data-url="<?php echo admin_url('testimonial/view');?>">
			<thead>
				<th data-val="sn">#</th>
				<th data-val="tes_name">Name</th>
				<th data-val="tes_position">Position</th>
				<th data-val="tes_desc">Description</th>
				<th data-val="tes_image">Image</th>
				<th data-val="tes_status">Status</th>
				<th data-val="btn" data-btn="<a href='<?php echo admin_url();?>testimonial/edit/{tes_id}'><i class='fa fa-edit'></i></a>">Tasks</th>
			</thead>
			<tbody>
		</tbody>
		</table>
	</div>
    
</div>
