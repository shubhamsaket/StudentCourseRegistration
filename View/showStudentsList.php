<?php

echo "<br/><br/><table  style='width:50%' class='CSSTableGenerator'>
    <h3>ALL STUDENT INFORMATION</h3><tr>
        <th>ClickToEdit</th>
        <th>FirstNAme</th>

        <th>LastName</th>
        <th>ClickToDelete</th>
    </tr>";
    foreach ($results as $row){

    echo "<tr>";
        echo "<td><a href=''>Edit</a></td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td><a href=''>Delete</a></td>";//delete_student.php?id=".$row["id"]."
        echo "</tr>";
    }
    echo "</table>";