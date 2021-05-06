<?php

try{
    $connect = mysqli_connect("localhost", "root", "") or die ("check your server connection.");

    $connect->query("DROP DATABASE test_assesment_shubham");

    $connect->query("CREATE DATABASE test_assesment_shubham");

    $connect->query("use test_assesment_shubham");

    $members="CREATE TABLE student (
id int(4) NOT NULL auto_increment,
lastname varchar(65) NOT NULL default '',
firstname varchar(65) NOT NULL default '',
dob date ,
contact varchar(20) NOT NULL default '',
PRIMARY KEY (id)
)Engine=InnoDB AUTO_INCREMENT=1 ";

    $course="CREATE TABLE course (
id int(4) NOT NULL auto_increment,
name varchar(65) NOT NULL default '',
details varchar(200) NOT NULL default '',
PRIMARY KEY (id)
)Engine=InnoDB AUTO_INCREMENT=1 ";

    $regis="CREATE TABLE student_course_registartion (
id int(4) NOT NULL auto_increment,
id_student varchar(65) NOT NULL default '',
id_course varchar(65) NOT NULL default '',
PRIMARY KEY (id),
UNIQUE KEY `student_course`(id_student,id_course)
)Engine=InnoDB AUTO_INCREMENT=1 ";

    $results = $connect->query($members);
    $results = $connect->query($course);
    $results = $connect->query($regis);

    echo "Database successfully created!";

} catch (Exception $e){
    echo "Issue with creating DataBase . Error Message ".$e->getMessage() ;
}



?>