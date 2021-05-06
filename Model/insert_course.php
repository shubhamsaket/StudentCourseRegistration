<?php
include_once 'index.php';
require_once 'DbModel.php';
try{
    $connect = new DbModel();
    $courseName = $_POST['courseName'];
    $courseDetail = $_POST['courseDetail'];

    if(empty($courseName)){
        echo 'Madatory Values Missing';
    }else{

        $stmt = $connect->connection->prepare("INSERT INTO course(name,details) VALUES (?, ?)");
        $stmt->bind_param('ss', $courseName, $courseDetail);
        $stmt->execute();
        $connect->close_database_connection();

        header("Location: /Controller/show_courses.php");
    }
} catch (Exception $e){
    echo 'There was an error while adding Course : Error Message '.$e->getMessage();
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

