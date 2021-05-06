<?php
include_once '../index.php';
require_once 'DbModel.php';
try{
    $connect = new DbModel();
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dob'];
    $contact = $_POST['contact'];

    if(empty($firstName) || empty($lastName) || empty($dob)){
        echo 'Madatory Values Missing';
    }else{

        $stmt = $connect->connection->prepare("INSERT INTO student(firstname,lastname,dob,contact) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('ssss', $firstName, $lastName, $dob, $contact);
        $stmt->execute();
        $connect->close_database_connection();

        header("Location: /Controller/show_students.php");

    }
} catch (Exception $e){
    echo 'There was an error while adding Student : Error Message '.$e->getMessage();
}

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	

