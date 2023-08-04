<?php
// taking data
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];

    
    if (empty($first_name) ){ echo "name daalo";}
    elseif(empty($last_name) ){echo"surname daalo";}
    elseif(empty($email)) {
        echo "pura form bharo";
    } 
    
    else{
    require 'connection.php';

    //check for user 
    $query = "SELECT * FROM user_data WHERE email = '$email'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        
        echo "User with this email already exists!";
    } else {
    
        $insert_query = "INSERT INTO user_data (fname, lname, email) VALUES ('$first_name', '$last_name', '$email')";
        if (mysqli_query($connection, $insert_query)) {
            echo "User registration successful!";
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }

    
    mysqli_close($connection);
}
}
?>
