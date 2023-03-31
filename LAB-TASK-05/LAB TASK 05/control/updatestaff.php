<?php  
require_once '../model/model.php';


if (isset($_POST['updateStaff'])) {
	$data['name'] = $_POST['name'];
	$data['username'] = $_POST['username'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
    $data['gender'] = $_POST['gender'];
    $data['salary'] = $_POST['salary'];
    $data['dob'] = $_POST['dob'];
    //$data['ppp'] = $_POST['ppp'];
    
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../staffuploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updateStaff($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../view/view_staff.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>