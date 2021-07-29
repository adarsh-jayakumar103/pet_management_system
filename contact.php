<?php
	$Name = $_POST['Name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	

	if(!empty($Name)||!empty($email)||empty($message))
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
			$INSERT = "INSERT INTO contact(Name, email, message) values (?, ?, ?)";

			//statements
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("sss", $Name, $email, $message);
			$stmt->execute();
			function myAlert($msg, $url){
    			echo '<script language="javascript">alert("'.$msg.'");</script>';
    			echo "<script>document.location = '$url'</script>";
					}
			myAlert("Message send", "home.html");
			$stmt->close();
			$conn->close();
		}
	}
	else
	{
		echo "All fields are required";
		die();
	}
?>