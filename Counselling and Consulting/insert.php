<?php 
$servername = "localhost";
$username = "username";

$conn =new mysqli_connect($servername,$username);

if($conn->connect_error){
    die("Connection failed: " . $conn -> connect_error);
}

mysqli_select_db($con, 'c&cdb');

$username = $_POST['name'];
$email = $_POST['InputEmail1'];
$password1 = $_POST['InputPassword'];
$cpassword = $_POST['cInputPassword'];
$sector = $_POST['sector'];
$phonenumber = $_POST['phone_number'];
$gender = $_POST['gender'];


$sql = "INSERT INTO login_info ( Username, emailaddress, password, Sector, phoneNumber, gender) 
VALUES ('$username', '$email', '$password1', '$sector', '$phonenumber', '$gender') ";

mysqli_query($con, $query);

header('location:home.html');

?>
