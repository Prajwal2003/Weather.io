<?php
include "conn.php";

    $sql = "SELECT * FROM users WHERE username = '$username' AND password_hash = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        header("Location: index1.html");
        exit();
    } else {
        header("Location: index1.html");    }

    $conn->close();

?>
