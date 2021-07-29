<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pawfect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
{
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM login WHERE email='$_GET[email]'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
  // output data of each row
  while($row = $result->fetch_assoc())
  {
    if($row['password'] == $_GET['password'])
    {
      $sql = "UPDATE users SET stats='login' WHERE email='$_GET[email]';";
      $conn->query($sql);
      
      if($row['type'] == 'admin')
      {
        echo "Welcome $row[name] you are an admin";
      }
      else if($row['type'] == 'user')
      {
        include '.php';
      }
    }
    else
    {
      echo "Wrong Password";
    }
  }
}
else
{
  echo "0 results";
}
$conn->close();
?>
