<?php
include_once '../index.php';
include_once '../Model/DbModel.php';

$connect = new DbModel();
$results = $connect->runSelectQuery("SELECT * FROM student");

include_once '../View/showStudentsList.php';

?>




















