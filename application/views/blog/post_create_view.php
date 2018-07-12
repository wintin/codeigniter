<h3>Create Blog</h3>

<form action="" method="POST" class="form-horizontal" role="form">
	<div class="form-group">
		<label>Tiêu đề</label>
		<input type="text" name="title" >
	</div>

	<div class="form-group">
		<label>Hình</label>
		<input type="text" name="thumb" >
	</div>

	<div class="form-group">
		<label>Nội dung</label>
		<textarea name="body" class="tinymce"></textarea>
	</div>


	

	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>

<script src="/assets/plugins/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea.tinymce' });</script>