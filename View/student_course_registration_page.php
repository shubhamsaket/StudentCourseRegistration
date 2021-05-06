<?php
include_once '../index.php';
$connect = mysqli_connect("localhost", "root", "",'test_assesment_shubham');
$courses = $connect->query("SELECT * from course");
$students = $connect->query("SELECT * from student");

?>

<div>
    <br/><br/>
    <form method="post" action="../Controller/register_student_course.php">
        <h2>ASSIGN COURSES TO STUDENTS</h2>
        <div id="cloneSection">
            <select name="student[]">
                <?php
                echo "<option value=''>PLEASE SELECT</option>";
                foreach($students as $student){
                    echo "<option value='".$student['id']."'>" . $student['firstname'].$student['lastname'] . "</option>";
                }
                ?>
            </select>
            <select name="course[]">
                <?php
                echo "<option value=''>PLEASE SELECT</option>";
                foreach($courses as $course){
                    echo "<option value='".$course['id']."'>" . $course['name']. "</option>";
                }
                ?>
            </select>
            <br/>
        </div>
        <div id="additionalSection" ></div>
<br/>
        <input type="button" id="addButton" class= 'cloneButton' value="+" />
        <input type="button" id="removeButton" class= 'cloneButton'  value="-" />
        <input type="submit" class="myButton" name="submit" value="submit">
    </form>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#addButton").click(function() {
                var newSection = $("#cloneSection").clone();
                $("#additionalSection").last().append(newSection)
            });
            $("#removeButton").click(function() {
               $("#additionalSection").children().last().remove();     // remove the last element
            });

        });
    </script>
</div>