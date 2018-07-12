<h3>Edit Blog</h3>
<p>
	<?php echo $msg ?>
</p>
<form action="" method="POST" class="form-horizontal" role="form">
	<div class="form-group">
		<label>Tiêu đề</label>
		<input type="text" name="title" value="<?php echo $post->title ?>" >
	</div>

	<div class="form-group">
		<label>Hình</label>
		<input type="text" name="thumb" value="<?php echo $post->thumb ?>" >

		<input type="file" name="file" />
	</div>


	<div class="form-group">
		<label>Nội dung</label>
		<textarea name="body" class="tinymce"><?php echo $post->body ?></textarea>
	</div>


	

	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-2">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>

<script src="/assets/plugins/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea.tinymce' });</script>