
<?php
$Name=$_POST["name"];
$Email=$_POST["email"];
$Desc=$_POST["desc"];
$Age=$_POST["age"];
$Gend=$_POST["gender"];
$Phone=$_POST["phone"];


// Create connection
$conn = mysqli_connect("localhost","root","","jojo");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 else {
		$stmt = $conn->prepare("insert into data(name,age,gender,email,phone,text) values(?, ?, ?, ?,?,?)");
		$stmt->bind_param("ssssss", $Name,$Age,$Gend,$Email,$Phone,$Desc);
		$execval = $stmt->execute();
		echo $execval;
	
    sleep(2);
    header('location: index.html');
		$stmt->close();
		$conn->close();
	}
?>

