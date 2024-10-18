<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name1 = mysqli_real_escape_string($con, $_POST['name1']);
    $name2 = mysqli_real_escape_string($con, $_POST['name2']);
    $institute = mysqli_real_escape_string($con, $_POST['inst']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $txt = mysqli_real_escape_string($con, $_POST['area']);

    // SQL query to insert data
    $sql = "INSERT INTO shubham (first_name, last_name, institution, email, organizers) 
            VALUES ('$name1', '$name2', '$institute', '$email', '$txt')";

    if(mysqli_query($con, $sql)){
        echo "Registration successful. Data inserted into database.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    echo "Submitted Information:<br>";
    echo "Full name : {$name1} {$name2} <br>";
    echo "Institute : {$institute}<br>";
    echo "Email : {$email}<br>";
    echo "Name of the organization : {$txt} <br>";
}

mysqli_close($con);
?>