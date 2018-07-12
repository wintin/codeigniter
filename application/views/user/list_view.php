<h3>User list</h3>

<link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.css" />

<a class="btn btn-default" href="/user/create">Create</a>

<table class="table table-bordered table-hover">
	<tr>
		<th>STT</th>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>		
		<th>Action</th>
	</tr>
	<?php foreach ($users as $key => $u) 
	{
		?>
	<tr>
		<td><?php echo $key ?></td>
		<td><?php echo $u->name ?></td>
		<td><?php echo $u->email ?></td>
		<td><?php echo $u->phone ?></td>	
		<td>
			<a class="btn btn-primary" href="/user/edit/<?php echo $u->id ?>">Edit</a>


			<a class="btn btn-danger" href="#" data-id="<?php echo $u->id ?>" class="btn-delete">Delete</a>
		</td>

	</tr>
		
	<?php 
	} ?>
</table>


<script src="../js/jquery-3.2.1.min.js"></script>
<script>
	jQuery(document).ready(function($) {
		$("a.btn-delete").click(function(event) {
			/* Act on the event */
			event.preventDefault();
			
			var ok = confirm('Xác nhận xóa ?');
			if (!ok)
			{
				return false;
			}

			var data_id = $(this).attr('data-id');
			

			var data = {id: data_id};


			//Ajax post
			$.post('/user/delete', data, function(result){
				alert(result);
			});
		});
	});
</script>

