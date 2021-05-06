<?php
include_once '../index.php';
?>

<html>
<head>
</head>
<body>
<div>
    <br/><br/>
    <form method="post" action="../Model/insert_course.php">
        <h2>Add Course Information</h2>
        Course Name :<input type="text" name="courseName"><br/><br/>
        Course Detail :<textarea name="courseDetail" cols="40" rows="8"></textarea><br/>
        <input type="submit" class="myButton" name="submit" value="submit">
    </form>
</div>

<div id="div1"></div>
</body>
</html>	