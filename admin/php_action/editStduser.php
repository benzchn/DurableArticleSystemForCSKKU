<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {
        $userId = $_POST['user_id'];
        $password = $_POST['Stdpassword'];
    $email = $_POST['Stdemail'];
	$fullname = $_POST['Stdfullname'];
    $phone = $_POST['Stdphone'];
    $degree = $_POST['degree'];
    $department = $_POST['department'];
    $colYear = $_POST['col_year'];

    $user_id = $_POST['editStdId'];

	$sql = "UPDATE users_personal SET user_id = '$userId', password = '$password', fullname = '$fullname', email = '$email', phone = '$phone', 
			degree = '$degree', department = '$department', col_year = '$colYear' WHERE user_id = '$user_id'";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while updating the categories";
	}
	 
	$connect->close();

	echo json_encode($valid);
    } // /if $_POST