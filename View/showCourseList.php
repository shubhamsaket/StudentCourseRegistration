<?php

echo "<br/><br/><table  style='width:50%' class='CSSTableGenerator'>
    <h3>ALL COURSES INFORMATION</h3><tr>
        <th>ClickToEdit</th>
        <th>Course Name</th>
        <th>ClickToDelete</th>
    </tr>";
    foreach ($results as $row){

    echo "<tr>";
        echo "<td><a href=''>Edit</a></td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td><a href=''>Delete</a></td>";//delete_student.php?id=".$row["id"]."
        echo "</tr>";
    }
    echo "</table>";