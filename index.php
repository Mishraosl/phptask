<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
    <style>
        .form{
            display:flex;
            border:1px solid yellow;
            justify-content:center;
            align-items:auto;
            box-sizing:border-box;
            top:50%;


            
        }
    </style>
</head>
<body>
    <div class="form">
    <h1>Registration Form</h1>
    <form method="post" action="validation.php">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" ><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" ><br>

        <label for="email">Email:</label>
        <input type="email" name="email" ><br>

        <input type="submit" value="Register">
    </form>
    </div>
    <?php
    require_once 'connection.php';
    // Fetch data from the database
    $fetchQuery = "SELECT * FROM user_data";
    $result = $connection->query($fetchQuery);
    if ($result->num_rows > 0) {
        echo '<table>';
        echo '<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>';
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            
            echo '<td>' . $row['fname'] . '</td>';
            echo '<td>' . $row['lname'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'No data available.';
    }
    $connection->close();
    ?>








</body>
</html>
