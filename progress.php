<?php
    if (isset($_POST["submit"])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $color = $_POST["color"];

        if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($color)) {
            $link = mysqli_connect("localhost", "root", "", "register");
            if ($link==false) {
                die(mysqli_connect_error());
            }
            $sql = "INSERT INTO users (first_name, last_name, email, color) VALUES ('$first_name', '$last_name', '$email', '$color')";
            if (mysqli_query($link,$sql)) {
                echo "<script>alert('Record inserted successfully!')</script>";
            } else {
                echo "Something went wrong";
            }
        } else {
            echo "Please provide all information";
        }
    }
?>