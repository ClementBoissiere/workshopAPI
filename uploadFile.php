<form method='POST' enctype="multipart/form-data">
	<input type='file' name='file'>
	<input type='submit'>
</form>
<?php
print_r($_POST);
if(isset($_FILES['file'])){
	$base = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
	if(move_uploaded_file(base64_decode($base), 'img.jpg')){
		echo 'gg';
	}
}
?>
