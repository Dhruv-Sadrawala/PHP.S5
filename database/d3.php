
<!DOCTYPE html>
<html>
<head>
	<title>Insert and Display</title>
	<style type="text/css">
		.headings{
			min-height: 20px;
		}
	</style>
</head>
<body>
	<form method="POST">
		Enrollment Number <input type="number" name="enroll_no"><br><br>
		Name <input type="text" name="name"><br><br>
		<input type="submit" name="submit" value="Add to Table">
	</form>
</body>

<?php

if (isset($_POST['submit'])) {

	$enroll_no=$_POST['enroll_no'];
	$name=$_POST['name'];
	
	$con=mysqli_connect('localhost','root','','mydatabase');

	$tb_2="INSERT INTO student1 (enroll_no, name) VALUES ($enroll_no,'$name')";
	$tb_3="SELECT * FROM student1 ORDER BY enroll_no ASC";

	$tb_qr=mysqli_query($con,$tb_2);
	$tb_sh=mysqli_query($con,$tb_3);


	if ($tb_sh) {
		echo "Added to Student table.";
		echo "<style>
				table {
					width: 30%;
					margin: 20px auto;
					border-collapse: collapse;
				}
				th, td {
					padding: 5px;
					text-align: center;
					border: 1px solid #000;
					font-family: Arial, sans-serif;
					font-size: 16px;
				}
				th {
					background-color: #d1d1d1;
					color: #000;
					font-weight: bold;
				}
				td {
					background-color: #e5e5e5;
				}
			  </style>";
    	echo "<table cellspacing=2 border=2 align=center width=50%>
        <tr><th style='min-height:20px;' width=33%>Enroll No.</th><th style='min-height:20px;' width=33%>Name</th></tr>";
    
    while ($row=mysqli_fetch_row($tb_sh)) {
        
        echo"<tr><td align=center width=33%>{$row['0']}</td>
        <td align=center width=33%>{$row['1']}</td></tr>";
        
    }
    echo"</table></html>";
		
	}
	else{
		echo "Insert Failed.";
	}
}

?>
</html>