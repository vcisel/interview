<?php
$servername = "db.eurodns.dev";
$username = "hellouser";
$password = "secret!";
$dbname = "interview";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

foreach(array_keys($_GET) as $key){
	if($key == 'hello') {
		$date = date('Y-m-d h:m:s');
		$sql = "INSERT INTO hello (who, date) VALUES ('$_GET[$key]', '$date')";

		if ($conn->query($sql) === true) {
   			 echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}	
	}
}

$conn->close();

?>
