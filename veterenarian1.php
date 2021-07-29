<?php

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="pawfect";

//create connection
$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

$data = $_POST;

if(mysqli_connect_error())
{
	die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else
{
	echo "<pre>";
	var_dump($data);
	$count = count($_POST['Name']);
	for ($i=0; $i < $count ; $i++)
	{
		$sql = "INSERT INTO `veterinary_details` (`Name`, `Location`, `contact_no`, `Available_time`) VALUES ('{$_POST['Name'][$i]}', '{$_POST['Location'][$i]}', '{$_POST['contact_no'][$i]}', '{$_POST['Available_time'][$i]}');";
		$conn->query($sql);
		function myAlert($msg, $url)
		{
   			echo '<script language="javascript">alert("'.$msg.'");</script>';
   			echo "<script>document.location = '$url'</script>";
   		}
 		myAlert("veterinarian Registered", "Veterinary_details.php");

	}
}
?>