<?php
$NameErr = $dobErr = $timeErr = $studentIdErr = $genderErr = $cityErr = $stateErr = $countryErr = $emailErr = $hobbiesErr = "";
$Name = $dob = $time = $studentId = $gender = $city = $state = $country = $email = "";
$hobbies = [];

$con=mysqli_connect('localhost','root','','mydatabase');

if (isset($_REQUEST['submit_show'])) {
    

    if (empty($_REQUEST["Name"])) {
        $NameErr = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_REQUEST["Name"])) {
        $NameErr = "Only letters and white spaces allowed";
    } else {
        $Name = htmlspecialchars($_REQUEST["Name"]);
    }

    if (empty($_REQUEST["dob"])) {
        $dobErr = "Date of Birth is required";
    } else {
        $dob = htmlspecialchars($_REQUEST["dob"]);
    }


    if (empty($_REQUEST["time"])) {
        $timeErr = "Time is required";
    } else {
        $time = htmlspecialchars($_REQUEST["time"]);
    }


    if (empty($_REQUEST["studentId"])) {
        $studentIdErr = "Student ID is required";
    } elseif (!preg_match("/^[0-9]{6,10}$/", $_REQUEST["studentId"])) {
        $studentIdErr = "Student ID must be 6-10 digits";
    } else {
        $studentId = htmlspecialchars($_REQUEST["studentId"]);
    }

    
    if (empty($_REQUEST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = htmlspecialchars($_REQUEST["gender"]);
    }

    
    if (empty($_REQUEST["city"])) {
        $cityErr = "City is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_REQUEST["city"])) {
        $cityErr = "Only letters and white spaces allowed";
    } else {
        $city = htmlspecialchars($_REQUEST["city"]);
    }

    
    if (empty($_REQUEST["state"])) {
        $stateErr = "State is required";
    } else {
        $state = htmlspecialchars($_REQUEST["state"]);
    }

    // Country validation
    if (empty($_REQUEST["country"])) {
        $countryErr = "Country is required";
    } else {
        $country = htmlspecialchars($_REQUEST["country"]);
    }


    if (empty($_REQUEST["email"])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $email = htmlspecialchars($_REQUEST["email"]);
    }

    
    if (empty($_REQUEST["hobbies"])) {
        $hobbiesErr = "Please select at least one hobby";
    } else {
        $hobbies = $_REQUEST["hobbies"];
        $hobbies_array=implode("", $hobbies);
    }

    if (empty($NameErr) && empty($dobErr) && empty($timeErr) && empty($studentIdErr) && empty($genderErr) && 
        empty($cityErr) && empty($stateErr) && empty($countryErr) && empty($emailErr) && empty($hobbiesErr)) {


        $insert_qr="INSERT INTO reg_details(Name,dob,time,studentId,gender,city,state,country,email,hobbies) VALUES ('$Name','$dob','$time','$studentId','$gender','$city','$state','$country','$email','$hobbies_array')";

        $show_qr="SELECT * FROM reg_details ORDER BY studentId ASC";
        
        $mysqli_qr_1=mysqli_query($con,$insert_qr);
        $tb_sh=mysqli_query($con,$show_qr);



        if ($mysqli_qr_1) {
            echo "<style>
                table {
                    width: 90%;
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
        echo "<table cellspacing=2 border=2 align=center>
        <tr>
        <th style='min-height:20px;'>Name</th>
        <th style='min-height:20px;'>DOB</th>
        <th style='min-height:20px;'>Time</th>
        <th style='min-height:20px;'>Student ID</th>
        <th style='min-height:20px;'>Gender</th>
        <th style='min-height:20px;'>City</th>
        <th style='min-height:20px;'>State</th>
        <th style='min-height:20px;'>Country</th>
        <th style='min-height:20px;'>Email</th>
        <th style='min-height:20px;'>Hobbies</th>
        </tr>";
    
        while ($row=mysqli_fetch_row($tb_sh)) {
        
        echo"<tr><td align=center width=33%>{$row['0']}</td>
        <td align=center width=33%>{$row['1']}</td>
        <td align=center width=33%>{$row['2']}</td>
        <td align=center width=33%>{$row['3']}</td>
        <td align=center width=33%>{$row['4']}</td>
        <td align=center width=33%>{$row['5']}</td>
        <td align=center width=33%>{$row['6']}</td>
        <td align=center width=33%>{$row['7']}</td>
        <td align=center width=33%>{$row['8']}</td>
        <td align=center width=33%>{$row['9']}</td></tr>";
        
        }
            echo"</table></html>";
            echo "<h3 style=font-family:sans-serif;text-align:center;>Above data is stored in database.</h3>";
        }
        
        else{
            echo "<h3 style=font-family:sans-serif;text-align:center;>Data insertion failed.</h3>";
        }

    } 
    else {
        include 'cec_form.php';
    }
}

if (isset($_REQUEST['insert'])) {

     if (empty($_REQUEST["Name"])) {
        $NameErr = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_REQUEST["Name"])) {
        $NameErr = "Only letters and white spaces allowed";
    } else {
        $Name = htmlspecialchars($_REQUEST["Name"]);
    }

    if (empty($_REQUEST["dob"])) {
        $dobErr = "Date of Birth is required";
    } else {
        $dob = htmlspecialchars($_REQUEST["dob"]);
    }


    if (empty($_REQUEST["time"])) {
        $timeErr = "Time is required";
    } else {
        $time = htmlspecialchars($_REQUEST["time"]);
    }


    if (empty($_REQUEST["studentId"])) {
        $studentIdErr = "Student ID is required";
    } elseif (!preg_match("/^[0-9]{6,10}$/", $_REQUEST["studentId"])) {
        $studentIdErr = "Student ID must be 6-10 digits";
    } else {
        $studentId = htmlspecialchars($_REQUEST["studentId"]);
    }

    
    if (empty($_REQUEST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = htmlspecialchars($_REQUEST["gender"]);
    }

    
    if (empty($_REQUEST["city"])) {
        $cityErr = "City is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_REQUEST["city"])) {
        $cityErr = "Only letters and white spaces allowed";
    } else {
        $city = htmlspecialchars($_REQUEST["city"]);
    }

    
    if (empty($_REQUEST["state"])) {
        $stateErr = "State is required";
    } else {
        $state = htmlspecialchars($_REQUEST["state"]);
    }

    // Country validation
    if (empty($_REQUEST["country"])) {
        $countryErr = "Country is required";
    } else {
        $country = htmlspecialchars($_REQUEST["country"]);
    }


    if (empty($_REQUEST["email"])) {
        $emailErr = "Email is required";
    } elseif (!filter_var($_REQUEST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $email = htmlspecialchars($_REQUEST["email"]);
    }

    
    if (empty($_REQUEST["hobbies"])) {
        $hobbiesErr = "Please select at least one hobby";
    } else {
        $hobbies = $_REQUEST["hobbies"];
        $hobbies_array=implode(',', $hobbies);
    }

    if (empty($NameErr) && empty($dobErr) && empty($timeErr) && empty($studentIdErr) && empty($genderErr) && 
        empty($cityErr) && empty($stateErr) && empty($countryErr) && empty($emailErr) && empty($hobbiesErr)) {


        $insert_qr="INSERT INTO reg_details(Name,dob,time,studentId,gender,city,state,country,email,hobbies) VALUES ('$Name','$dob','$time','$studentId','$gender','$city','$state','$country','$email','$hobbies_array')";
        
        $mysqli_qr_1=mysqli_query($con,$insert_qr);


        if ($mysqli_qr_1) {
            echo "<style>
                table {
                    width: 90%;
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
        echo "<table cellspacing=2 border=2 align=center>
        <tr>
        <th style='min-height:20px;'>Name</th>
        <th style='min-height:20px;'>DOB</th>
        <th style='min-height:20px;'>Time</th>
        <th style='min-height:20px;'>Student ID</th>
        <th style='min-height:20px;'>Gender</th>
        <th style='min-height:20px;'>City</th>
        <th style='min-height:20px;'>State</th>
        <th style='min-height:20px;'>Country</th>
        <th style='min-height:20px;'>Email</th>
        <th style='min-height:20px;'>Hobbies</th>
        </tr>
        <tr>
        <td>$Name</td>
        <td>$dob</td>
        <td>$time</td>
        <td>$studentId</td>
        <td>$gender</td>
        <td>$city</td>
        <td>$state</td>
        <td>$country</td>
        <td>$email</td>
        <td>$hobbies_array</td>
        </tr></table></html>";
        echo "<h3 style=font-family:sans-serif;text-align:center;>Above data is stored in database.</h3>";
        }
        
        else{
            echo "<h3 style=font-family:sans-serif;text-align:center;>Data insertion failed.</h3>";
        }

    } 
    else {
        include 'cec_form.php';
    }
}

if (isset($_REQUEST['update'])) {
    
    if (empty($_REQUEST["Name"])) {
            $NameErr = "New name is required";
        } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_REQUEST["Name"])) {
            $NameErr = "Only letters and white spaces allowed";
        } else {
            $Name = htmlspecialchars($_REQUEST["Name"]);
        }
    if (empty($_REQUEST["studentId"])) {
            $studentIdErr = "Student ID is required for updation";
        } elseif (!preg_match("/^[0-9]{6,10}$/", $_REQUEST["studentId"])) {
            $studentIdErr = "Student ID must be 6-10 digits";
        } else {
            $studentId = htmlspecialchars($_REQUEST["studentId"]);
        }



        if (empty($NameErr) && empty($studentIdErr)) {


        $update_qr="UPDATE reg_details SET Name='$Name' WHERE studentId=$studentId";

        $mysqli_qr_2=mysqli_query($con,$update_qr);


        if ($mysqli_qr_2) {
             echo "<style>
                table {
                    width: 90%;
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
        echo "<table cellspacing=2 border=2 align=center>
        <tr>
        <th style='min-height:20px;' width=50%>Name</th>
        <th style='min-height:20px;' width=50%>Student ID</th>
        </tr>
        <tr>
        <td>$Name</td>
        <td>$studentId</td>
        </tr></table></html>";
            echo "<h3 style=font-family:sans-serif;text-align:center;>Above data updated successfully.</h3>";
        }
        
        else{
            echo "<h3 style=font-family:sans-serif;text-align:center;>Data updation failed.</h3>";
        }

        } 
        else {
            include 'cec_form.php';
        }

}

if (isset($_REQUEST['delete'])) {
    

    if (empty($_REQUEST["studentId"])) {
            $studentIdErr = "Student ID is required for deletion";
        } elseif (!preg_match("/^[0-9]{6,10}$/", $_REQUEST["studentId"])) {
            $studentIdErr = "Student ID must be 6-10 digits";
        } else {
            $studentId = htmlspecialchars($_REQUEST["studentId"]);
        }


        if (empty($studentIdErr)) {


        $delete_qr="DELETE FROM reg_details WHERE studentId=$studentId";

        $mysqli_qr_2=mysqli_query($con,$delete_qr);


        if ($mysqli_qr_2) {
            echo "<h3 style=font-family:sans-serif;text-align:center;>Data deleted successfully.</h3>";
        }
        
        else{
            echo "<h3 style=font-family:sans-serif;text-align:center;>Data deletion failed.</h3>";
        }

        } 
                else {
                    include 'cec_form.php';
                }
}
?>
