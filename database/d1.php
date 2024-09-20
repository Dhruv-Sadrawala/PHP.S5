<?php

$con = mysqli_connect('localhost', 'root', '', 'mydatabase');


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$qr = "SELECT * FROM student WHERE enroll_no='2022016190'";


$var = mysqli_query($con, $qr);

if ($var) {
    echo "<h1>This is student table.</h1>";
    echo "<table cellspacing=2 border=2 width=100%>
        <tr>
        <th width=33%>Enroll No.</th><th width=33%>Name</th><th width=33%>DOB</th>
        </tr>";
    
    while ($row = mysqli_fetch_row($var)) {
        
        echo"<tr><td align=center width=33%>{$row[0]}</td><td align=center width=33%>{$row[1]}</td><td align=center width=33%>{$row[2]}</td></tr>";
        
    }
    echo"</table>";
} else {
    echo "Error: " . mysqli_error($con);
}

mysqli_close($con);

?>