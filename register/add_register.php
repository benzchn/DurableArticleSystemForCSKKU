<?php
	session_start();
	include_once('../config/dbconnect.php');

	if(isset($_POST['btnStdSubmit'])){
		$sqlget = "SELECT * FROM `users_personal` ";
        $result1 = $conn->query($sqlget);
                       $userid = $_POST['user_id'];
                       $email = $_POST['email'];

                       $checkEqual = FALSE;

                       while($row1 = $result1->fetch_assoc()) {

                        $userid1 = $row1['user_id'];
                        $email1 = $row1['email'];
                    if ("$userid" == "$userid1" || "$email" == "$email1"){
                        $checkEqual = true;
                         break;
                        }
                    }
                    if($checkEqual){
						echo "<script>if(confirm('ข้อมูลซ้ำ กรุณากรอกใหม่ !!')){document.location.href='register.php'};</script>";

                   }else if(!$checkEqual){

						$userid = $_POST['user_id'];
						$password = $_POST['password'];
						// $passwordHash = md5($password);
						$fullname = $_POST['fullname'];
						$colyear = $_POST['col_year'];
						$degree = $_POST['degree'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$department = $_POST['department'];
						$role = 3;
						
						$_SESSION['fullname'] = $fullname;
						$_SESSION['user_name'] = $userid;
                		$_SESSION['role'] = $role;
                        
						$sql = "INSERT INTO users_personal (user_id, password, fullname, col_year, degree, phone, email, department, role_id, user_status, admin_approve) VALUES ('$userid', '$password', '$fullname', '$colyear' ,'$degree' , '$phone', '$email', '$department', '$role', 0, '')";
						if($conn->query($sql)){
							
								echo "<script>if(confirm('คำขอสมัครสมาชิกสำเร็จ รอเจ้าหน้าที่อนุมัติ !!')){document.location.href='../login.php'};</script>";
						}else{
							$_SESSION['error'] = 'Something went wrong while adding';
							echo "<script>if(confirm('คำขอสมัครสมาชิกไม่สำเร็จ กรุณากรอกใหม่ !!')){document.location.href='register.php'};</script>";
						}
		}
}else{
	$sqlget = "SELECT * FROM `users_personal` ";
	$result1 = $conn->query($sqlget);
				   $userid = $_POST['email'];
				   $email = $_POST['email'];

				   $checkEqual = FALSE;

				   while($row1 = $result1->fetch_assoc()) {

					$userid1 = $row1['user_id'];
					$email1 = $row1['email'];
				if ("$userid" == "$userid1" || "$email" == "$email1"){
					$checkEqual = true;
					 break;
					}
				}
				if($checkEqual){
					echo "<script>if(confirm('ข้อมูลซ้ำ กรุณากรอกใหม่ !!')){document.location.href='register.php'};</script>";

			   }else if(!$checkEqual){

				$password = $_POST['password'];
				$fullname = $_POST['fullname'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$role = 2;
				$_SESSION['fullname'] = $fullname;
				$_SESSION['user_name'] = $email;
				$_SESSION['role'] = $role;

				$sql = "INSERT INTO users_personal (user_id, password, fullname, col_year, degree, phone, email, department, role_id, user_status,admin_approve) VALUES ('$email', '$password', '$fullname', 0, 0, '$phone', '$email', 0, '$role', 0,'')";
						if($conn->query($sql)){
							
								echo "<script>if(confirm('คำขอสมัครสมาชิกสำเร็จ รอเจ้าหน้าที่อนุมัติ !!')){document.location.href='../login.php'};</script>";
								

						}else{
							
							echo "<script>if(confirm('ลงทะเบียนไม่สำเร็จ กรุณากรอกใหม่ !!')){document.location.href='register.php'};</script>";
						}
}
}

?>