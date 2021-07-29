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
	$count = count($_POST['Category']);
	for ($i=0; $i < $count ; $i++)
	{
		$sql = "INSERT INTO `pet_list` (`category`, `breed`, `color`, `age`) VALUES ('{$_POST['Category'][$i]}', '{$_POST['Breed'][$i]}', '{$_POST['color'][$i]}', '{$_POST['age'][$i]}')";
		$conn->query($sql);
		function myAlert($msg, $url)
		{
   			echo '<script language="javascript">alert("'.$msg.'");</script>';
   			echo "<script>document.location = '$url'</script>";
   		}
 		myAlert("Pets Registered", "pet.php");

	}
}
?>


    
