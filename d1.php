<?php

// Connect to the database using mysqli
$con = mysqli_connect('localhost', 'root', '', 'mydatabase');

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch the student data
$qr = "SELECT * FROM student WHERE enroll_no='2022016190'";

// Execute the query
$var = mysqli_query($con, $qr);

// Check if the query was successful
if ($var) {
    // Loop through the results and display each row
    while ($row = mysqli_fetch_row($var)) {
        echo "<table cellspacing=5>
        <tr><td>{$row[0]}{$row[1]}{$row[2]}</td>
        <td>{$row[0]}{$row[1]}{$row[2]}</td>
        <td>{$row[0]}{$row[1]}{$row[2]}</td></tr>
        </table>";
    }
} else {
    echo "Error: " . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);

?>
