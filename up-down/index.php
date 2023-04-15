<form method="post" enctype="multipart/form-data">
	Selecione um arquivo:<input type="file" name="file">
	| <input type="submit" name="submit" value="upload">
</form>

<?php

if(isset($_FILES['file'])){
	$fileName = $_FILES['file']['name'];
	$fileType = $_FILES['file']['type'];
	$fileSize = $_FILES['file']['size'];
	$ProvDir = $_FILES['file']['tmp_name'];

	$freshestFile = "files/".$fileName;

	move_uploaded_file($ProvDir, $freshestFile);

	echo "Upload successful! <br>";
    echo "<a href='download.php?file=".$freshestFile."'>Download file</a>";
}

?>