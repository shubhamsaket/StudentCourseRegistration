<?php
require_once '../Model/DbModel.php';
try{

    $connect = new DbModel();
    $studentIdArray = $_POST['student'];
    $courseIdArray = $_POST['course'];

    $stmt = $connect->connection->prepare("INSERT INTO student_course_registartion(id_student,id_course) VALUES (?, ?)");
    foreach ($studentIdArray as $index => $studentId){
        try{
            if(empty($studentId) || empty ($courseIdArray[$index])){
                throw new Exception('Invalid Values Passed , Values missing');
            }
            $stmt->bind_param('dd', $studentId, $courseIdArray[$index]);
            $stmt->execute();
        } catch (Exception $e){
            if(is_numeric(strpos($e->getMessage(),'Duplicate entry'))){
                echo '<script>alert("Duplicate Entries will not be saved")</script>';
            }else{
                throw new Exception($e->getMessage());
            }
        }
        echo " Successfully added information";
        header("Location: /Controller/show_registrations.php");
    }
} catch (Exception $e){
    echo PHP_EOL.'There was an error while registering Student to Course : Error Message '.$e->getMessage();
}

?>
