<?php  
require_once '../model/model.php';


if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

  $info =  login($email,$password);

	if($info == null){
		header("Location:../View/adminlogin.php");
		exit();
	}
	echo $info['Name'];
	echo $info['Email'];
	if($info['type'] == "Admin"){
		header("Location:../View/adminpanel.php");
		exit();
	}

} 
else {  
	echo 'You are not allowed to access this page.';
}

?>