
<?php
$target_dir = "/var/www/html/uploads/";
$target_file = $target_dir . basename($_FILES["uploaded"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$debug = false;

// is the file an actual image?
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["uploaded"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["uploaded"]["tmp_name"], $target_file)) {
	  echo $target_file." has been uploaded<br>";
	  $cmd = "bash convert_and_print.sh ".$target_file;
	  shell_exec($cmd);
	  echo "ran command: ".$cmd."<br>";
	  if($debug == false) {
	  	header('Location: http://'.$_SERVER['HTTP_HOST']);
	  }
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>

