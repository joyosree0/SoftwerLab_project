<?php  
require_once '../model/model.php';


if (isset($_POST['adding'])) {
	$data['name'] = $_POST['name'];
	$data['writer'] = $_POST['writer'];
	$data['genra'] = $_POST['genra'];
	$data['publisher'] = $_POST['publisher'];
	$data['date'] = $_POST['date'];
	$data['image'] = basename($_FILES["image"]["name"]);
  $data['country'] = $_POST['country'];
  $data['language'] = $_POST['language'];

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addBook($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>