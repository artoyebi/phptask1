<?php 

$name = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$medium = $_POST['medium'];
$message = $_POST['message'];

$data = "First Name: " .$name;
$data .= "Last Name: " .$lname ;
$data .= "Email: " .$email;
$data .= "Phone Number: " .$phone;
$data .= "Gender: " . $gender;
$data .= "Medium: " . $medium;
$data .= "Message: " . $message;			
$fp = fopen($_SERVER['DOCUMENT_ROOT'] .'/' .$name .'.txt', 'a');
fwrite($fp, $data);
fclose($fp);
echo "Thanks, We will get back to you soon."

?>


