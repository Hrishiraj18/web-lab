<?php
$conn=mysqli_connect("localhost","root","","volvo");
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$boarding = $_POST['boarding'];
	$email = $_POST['email'];
	$seat = $_POST['seat'];

	if($conn)
	{	echo "Connection successful<br>";
		$sql="INSERT INTO booking (name,contact,boarding,email,seat) VALUES('$name','$contact','$boarding','$email','$seat')";
		mysqli_query($conn, $sql);
		echo "Entered successfully";
		echo $name;
		echo "<br>";
		echo $contact;
	}
	else
	{
		echo "Connection not suucessful<br>";
	}
}
?>