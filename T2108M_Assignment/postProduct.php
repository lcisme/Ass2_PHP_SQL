<?php
if (!$_POST["name1"]){
    header("Location: addproduct.php");
}

$severName = "localhost";
$userName = "root";
$password = "";
$dbName = "t2108m";
// connect db
$conn = new mysqli($severName, $userName, $password, $dbName);
if ($conn->connect_error) {
    die($conn->connect_error);
}
$sql_txt = "insert into product(name,price,unit,quantity,description,status) values (?,?,?,?,?,?)";
$stt = $conn->prepare($sql_txt);
$stt ->bind_param("ssssss",$name1,$price1,$unit1,$quantity1,$description1,$status1);

// set param and execute
$name1 = $_POST["name1"];
$price1 = $_POST["price1"];
$unit1 = $_POST["unit1"];
$quantity1 = $_POST["quantity1"];
$description1 = $_POST["description1"];
$status1 = $_POST["status1"];
$stt->execute();

header("Location: listproduct.php");

