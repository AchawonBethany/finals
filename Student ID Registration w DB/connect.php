<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$id = $_POST['id'];
	$password = $_POST['password'];
        $course = $_POST['course'];

	// Database connection
	$conn = new mysqli('localhost','root','','student');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, address, phone, id, password, course) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi", $firstName, $lastName, $address, $phone, $id, $password, $course);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successful...";
                $msg = 'Created Successfully!';
		$stmt->close();
		$conn->close();
	}
?>