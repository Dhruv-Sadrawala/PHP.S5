<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEC PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        input[type="radio"], input[type="checkbox"] {
            width: auto;
            margin-right: 10px;
        }

        .radio-group, .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 20px;
        }

        .submit {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: -15px;
            margin-bottom: 10px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Student Registration Form</h1>
        </div>
        <form action="cec_form_action.php" method="POST">
            <label for="Name">Name:</label>
            <input type="text" id="Name" name="Name" value="<?php echo htmlspecialchars($Name ?? '');?>">
            <span class="error"><?php echo $NameErr ?? '';?></span>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($dob ?? '');?>">
            <span class="error"><?php echo $dobErr ?? '';?></span>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" value="<?php echo htmlspecialchars($time ?? '');?>">
            <span class="error"><?php echo $timeErr ?? '';?></span>

            <label for="studentId">Student ID:</label>
            <input type="text" id="studentId" name="studentId" value="<?php echo htmlspecialchars($studentId ?? '');?>">
            <span class="error"><?php echo $studentIdErr ?? '';?></span>

            <div class="radio-group">
                <label>Gender:</label>
                <input type="radio" id="male" name="gender" value="Male" <?php echo isset($gender) && $gender == "Male" ? "checked" : ''; ?>>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female" <?php echo isset($gender) && $gender == "Female" ? "checked" : ''; ?>>
                <label for="female">Female</label>
            </div>
            <span class="error"><?php echo $genderErr ?? '';?></span>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" value="<?php echo htmlspecialchars($city ?? '');?>">
            <span class="error"><?php echo $cityErr ?? '';?></span>

            <label for="state">State:</label>
            <input type="text" id="state" name="state" value="<?php echo htmlspecialchars($state ?? '');?>">
            <span class="error"><?php echo $stateErr ?? '';?></span>

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" value="<?php echo htmlspecialchars($country ?? '');?>">
            <span class="error"><?php echo $countryErr ?? '';?></span>

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email ?? '');?>">
            <span class="error"><?php echo $emailErr ?? '';?></span>

            <div class="checkbox-group">
                <label>Hobbies:</label>
                <input type="checkbox" id="hobby1" name="hobbies[]" value="Reading" <?php echo in_array("Reading", $hobbies ?? []) ? "checked" : ''; ?>>
                <label for="hobby1">Reading</label>
                <input type="checkbox" id="hobby2" name="hobbies[]" value="Traveling" <?php echo in_array("Traveling", $hobbies ?? []) ? "checked" : ''; ?>>
                <label for="hobby2">Traveling</label>
                <input type="checkbox" id="hobby3" name="hobbies[]" value="Music" <?php echo in_array("Music", $hobbies ?? []) ? "checked" : ''; ?>>
                <label for="hobby3">Music</label>
                <input type="checkbox" id="hobby4" name="hobbies[]" value="Sports" <?php echo in_array("Sports", $hobbies ?? []) ? "checked" : ''; ?>>
                <label for="hobby4">Sports</label>
            </div>
            <span class="error"><?php echo $hobbiesErr ?? '';?></span>

            <input type="submit" name="submit" value="Submit" class="submit">
        </form>
    </div>
</body>
</html>
