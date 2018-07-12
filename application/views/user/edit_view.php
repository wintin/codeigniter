
<h3>Edit user</h3>

<a href="/user" class="btn btn-default">Quay về danh sách</a>

<?php echo $msg ?>


<form action="" method="POST" class="" role="form" id="form-edit">
	<div class="form-group">
		<label>Tên</label>
		<input type="text" name="name" value="<?php echo $user->name ?>"  class="">
	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $user->email ?>" />
	</div>
	<div class="form-group">
		<label>Phone</label>
		<input type="text" name="phone" value="<?php echo $user->phone ?>" />
	</div>

	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>

<script src="/assets/plugins/jquery/jquery-3.2.1.min.js"></script>

<script>
	jQuery(document).ready(function($) {
		$("#form-edit").submit(function(event) {
			/* Act on the event */
			event.preventDefault();

			var data = $(this).serialize();
			
			//check validate

			//return false;

			//
			$.post(window.location.href, data, function(result){
				console.log(result);

			});


		});
	});
</script>

