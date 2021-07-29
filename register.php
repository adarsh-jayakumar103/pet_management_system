<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];
	

	if(!empty($Name)||!empty($email)||!empty($phone)||empty($password))
	{
		$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="pawfect";

		//create connection
		$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
		if(mysqli_connect_error())
		{
			die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
		}
		else
		{
			$SELECT = "SELECT email from register Where email = ? Limit 1";
			$INSERT = "INSERT INTO register(Name, email, phone, password) values (?, ?, ?, ?)";
			$INSERT1 = "INSERT INTO login (email,password) values (?, ?)"; 

			//statements
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if ($rnum==0)
			{
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssis", $Name, $email, $phone, $password);
				$stmt->execute();
				echo "Registration Successful";
				header("location:home.php");
				$stmt = $conn->prepare($INSERT1);
				$stmt->bind_param("ss",$email,$password);
				$stmt->execute();
				
			}
			else
			{
				function myAlert($msg, $url){
    			echo '<script language="javascript">alert("'.$msg.'");</script>';
    			echo "<script>document.location = '$url'</script>";
			}
			myAlert("Already Registered Email", "signup.html");
			}
			$stmt->close();
			$conn->close();
		}
	}
	else
	{
		echo "All fields required";
		die();
	}
?>