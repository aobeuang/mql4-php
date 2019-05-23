<?php

$servername = "us-cdbr-iron-east-02.cleardb.net";
$username = "bbc5f1f2834996";
$password = "e5aada54";

// Create connection
$conn = new mysqli($servername, $username, $password, "heroku_8f3e57c81578b20");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
//  $sql = "select date,bid,ask,open from data";
//  $result = $conn->query($sql);
 
//  if($result->num_rows>0)//output data of each row
//  {
// 	 while($row=$result->fetch_assoc())
// 	 {
// 		 echo "date:" .$row["date"]. "bid:" .$row["bid"]. "ask:" .$row["ask"]. "open:" .$row["open"]. "<br>" ;
// 	 }
//  }
//  else
//  {
// 	 echo "0 results";
//  }
// $conn->close();


	$sql = "CREATE TABLE data (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
date VARCHAR(50) NOT NULL,
bid VARCHAR(50),
ask VARCHAR(50),
open VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
echo "555";
?>
