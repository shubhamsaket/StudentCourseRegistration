<?php
require_once '../index.php';
require_once '../Model/DbModel.php';

$connect = new DbModel();
$query = "SELECT concat (stu.firstname,' ',stu.lastname) as student_name,cou.name as course_name FROM student stu join student_course_registartion reg on reg.id_student = stu.id join course cou on reg.id_course = cou.id";
$results = $connect->runSelectQuery($query);

$connect->close_database_connection();

require_once '../View/showRegistrationsTable.php';

?>
