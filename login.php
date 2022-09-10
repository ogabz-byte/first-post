<?php

require_once 'source/session.php';
require_once 'source/db_connect.php';


if(isset($_POST['login-btn'])) {

    $username = $_POST['user-name'];
    $password = $_POST['user-pass'];


    try {
        $SQLQUERY = "SELECT * FROM users WHERE username = :username";

        $statement = $conn->prepare($SQLQUERY);
        $statement->execute(array(':username' => $username));

       while ($row = $statement->fetch()) {
            $id = $row['id'];
            $hashed_password = $row['password'];
            $username = $row['username'];

            if (password_verify($password, $hashed_password)) {
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                header('location: dashboard.php');
            }
            else{
                echo "ERROR: Ivalid username or password";
            }
       }

    }
     catch (PDOEXCEPTION $e) {
        echo "Error: " . $e->getMessage();
    }
}