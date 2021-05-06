
<?php
include_once '../index.php';
?>

<div>
    <br/><br/>
    <form method="post" action="/Model/insert_student.php">
        <h2>Add Student Information</h2>
        First Name :<input type="text" name="firstName"><br/>
        Last  Name  :<input type="text" name="lastName"><br/>
        Date Of Birth:<input type="date" name="dob"><br/>
        Contact No :<input type="text" name="contact"><br/><br/>
        <input type="submit" class="myButton" name="submit" value="submit">
    </form>
</div>
<div id="div1"></div>