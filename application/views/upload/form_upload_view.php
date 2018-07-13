<form id="form-upload" action="/backend/upload/submit" method="post" enctype="multipart/form-data">
	<input id="input_file" type="file" name="file" />

	<button type="submit">Upload</button>
</form>


<img id="preview" src="" alt="" height="300">

<script src="/assets/jquery/jquery.min.js"></script>

<script>
	function upload()
	{

		var formData = new FormData();

		var files = document.getElementById('input_file').files;

		if (files.length == 0)
		{
			alert("Chưa chọn file");
			return false;
		}

		formData.append('file', files[0]);
		formData.append('caption', 'Demo upload file');







		$.ajax({
			type: "POST",
			timeout: 50000,
			url: '/backend/upload/submit',
			data: formData,
			processData: false,
			contentType: false,

			success: function (data) {
				
				console.log(data);

				var json = JSON.parse(data);


				if (json.success == true)
				{
					$("#preview").attr('src', json.link); 
				}else{
					alert(json.message);
				}
				

				
			}
		});


	}

	jQuery(document).ready(function($) {
		
		$("#form-upload").submit(function(event) {
			/* Act on the event */
			event.preventDefault();
			upload();

		});
	});
</script>