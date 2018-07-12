<h3>Blog list</h3>

<link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.css" />

<a class="btn btn-default" href="/blog_manage/create">Create</a>

<table class="table table-bordered table-hover">
	<tr>
		<th>STT</th>
		<th>Tiêu đề</th>
		<th>Hình</th>		
		<th>Action</th>
	</tr>
	<?php foreach ($posts as $key => $p) 
	{
		?>
	<tr>
		<td><?php echo $key ?></td>
		<td><?php echo $p->title ?></td>
		<td>
			
			<img src="<?php echo $p->thumb ?>" alt="" width="100">
		</td>
		
		<td>
			<a class="btn btn-primary" href="/blog_manage/edit/<?php echo $p->id ?>">Edit</a>


			<a class="btn btn-danger" href="#" data-id="<?php echo $p->id ?>" class="btn-delete">Delete</a>
		</td>

	</tr>
		
	<?php 
	} ?>
</table>

