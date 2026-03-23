<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
</head>
<body>
<?php
if(!empty($_POST['data'])){
	$data = $_POST['data'];
	$fname = $_POST['name']; // name the file
	$file = fopen("../archive/" .$fname, 'x'); // open the file path
	fwrite($file, $data); //save data
	fclose($file);
	echo "file saved";
}
else {
	echo "No Data Sent";
} 

?>
</body>
</html> 