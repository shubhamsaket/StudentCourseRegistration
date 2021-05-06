<?php

echo "<table  style='width:50%' class='CSSTableGenerator'>
    <h3>ALL STUDENT - COURSES INFORMATION</h3><tr>
        <th>Student Name</th>
        <th>Course Name</th>
    </tr>";
    foreach ($results as $row){

    echo "<tr>";
        echo "<td>" . $row['student_name'] . "</td>";
        echo "<td>" . $row['course_name'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";