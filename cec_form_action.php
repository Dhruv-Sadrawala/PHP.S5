<?php
$NameErr = $dobErr = $timeErr = $studentIdErr = $genderErr = $cityErr = $stateErr = $countryErr = $emailErr = $hobbiesErr = "";
$Name = $dob = $time = $studentId = $gender = $city = $state = $country = $email = "";
$hobbies = [];

if (isset($_REQUEST['submit'])) {
    

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
    }

    if (empty($NameErr) && empty($dobErr) && empty($timeErr) && empty($studentIdErr) && empty($genderErr) && 
        empty($cityErr) && empty($stateErr) && empty($countryErr) && empty($emailErr) && empty($hobbiesErr)) {
        // Redirect to success page or process data
        echo "
    <style>
    .table-container {
        width: 100%;
        max-width: 800px;
        margin: 50px auto;
        padding: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    .form-data-table {
        width: 100%;
        border-collapse: collapse;
    }

    .form-data-table th, .form-data-table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .form-data-table th {
        background-color: #f4f4f4;
        font-weight: bold;
        color: #333;
    }

    .form-data-table td {
        color: #555;
    }
</style>
    <div class='table-container'>
        <table class='form-data-table'>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Name</td>
                    <td>" . htmlspecialchars($Name) . "</td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>" . htmlspecialchars($dob) . "</td>
                </tr>
                <tr>
                    <td>Time</td>
                    <td>" . htmlspecialchars($time) . "</td>
                </tr>
                <tr>
                    <td>Student ID</td>
                    <td>" . htmlspecialchars($studentId) . "</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>" . htmlspecialchars($gender) . "</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>" . htmlspecialchars($city) . "</td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>" . htmlspecialchars($state) . "</td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>" . htmlspecialchars($country) . "</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>" . htmlspecialchars($email) . "</td>
                </tr>
                <tr>
                    <td>Hobbies</td>
                    <td>" . implode(', ', $hobbies) . "</td>
                </tr>
            </tbody>
        </table>
    </div>";
    } else {
        include 'cec_form.php';
    }
}
?>
