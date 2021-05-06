<?php
include_once '../index.php';
include_once '../Model/DbModel.php';

$handle = new DbModel();
$results = $handle->runSelectQuery("SELECT * FROM course");

include_once '../View/showCourseList.php';
?>
