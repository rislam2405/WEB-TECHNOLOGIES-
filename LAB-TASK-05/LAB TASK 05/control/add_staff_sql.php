<?php  
require_once '../model/model.php';


if (isset($_POST['createStudent'])) {
	$data['name'] = $_POST['name'];
	//$data['surname'] = $_POST['surname'];
	$data['username'] = $_POST['username'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
    $data['gender'] = $_POST['gender'];
    $data['salary'] = $_POST['salary'];
    $data['dob'] = $_POST['dob'];
    //$data['ppp'] = $_POST['ppp'];

    
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../staffuploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded. <br>";
    } else {
    echo "Sorry, there was an error uploading your file.";
    }

  if (addStaff($data)) {
  	echo 'Successfully added!!';
    echo '<a href="../view/add_staff.php">Back</a>';
  }
} else {
	echo 'You are not allowed to access this page.';
    echo '<a href="../view/login.php">Home</a>';
}

?>

