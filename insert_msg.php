 <<?php 
 
 $name=$_POST['cName'];
 $email=$_POST['cEmail'];
 $message= $_POST['Message'];

 if(!empty($name)|| !empty($email) || !empty($message)){
 	$host = "localhost";
 	$dbUsername = "root";
 	$dbPassword = "";
 	$dbname = "pawfect";

 	$conn = new mysqli($host, $dbUsername,$dbPassword,$dbname);
 	if(mysqli_connect_error()){
 		die('Connect Error('.mysqli_connect_errorno().')'.mysqli_connect_error());
 	}
 	else{
 		$SELECT = "SELECT Email FROM contact_us WHERE Email = ? Limit 1 ";
 		$INSERT = "INSERT INTO contact_us(cName,cEmail,Message) values(?,?,?) ";

 		$stmt = $conn->prepare($SELECT);
 		$stmt->bind_param("s",$email);
 		$stmt->execute();
 		$stmt->bind_result($email);
 		$stmt->store_result();
 		$rnum = $stmt->num_rows;

 		if ($rnum<100){
 			$stmt->close();
 			$stmt= $conn->prepare($INSERT);
 			$stmt->bind_param("sss",$name,$email,$message);
 			$stmt->execute();
 			echo "Message Sent!!";
 		}
 	}
 	$stmt->close();
 	$conn->close();
 } else{
 	echo "All fields are required";
 	die();
 }

 

 


 ?>