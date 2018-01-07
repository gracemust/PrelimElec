<?php
    session_start();

    $username="";
    $email="";
    $errors =array();

    //connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'registration');

    // if the register button is clicked
    if (isset($_POST['register'])) {
        $username = $db->real_escape_string($_POST['username']);
        $email = $db->real_escape_string($_POST['email']);
        $password_1 = $db->real_escape_string($_POST['password_1']);
        $password_2 = $db->real_escape_string($_POST['password_2']);

        //ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, "username is required");
        }
        if (empty($email)) {
            array_push($errors, "email is required");
        }
        if (empty($password_1)) {
            array_push($errors, "password is required");
        }

        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        if (count($errors) == 0) {
            $password = md5($password_1);
            $sql = "INSERT INTO users (username, email, password)
              VALUES ('$username', '$email', '$password')";
              mysqli_query($db, $sql);
              $_SESSION['username'] = $username;
              $_SESSION['success'] = "You are now logged in";
              header('location: login.php'); //redirect to home page
        }
    }

    //log user in from login page
    if (isset($_POST['login'])) {
        $username = $db->real_escape_string($_POST['username']);

        $password = $db->real_escape_string($_POST['password']);

        //ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, "username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1) {
                  $_SESSION['username'] = $username;
                  $_SESSION['success'] = "You are now logged in";
                  header('location: index.php'); //redirect to home page
            }else{
                array_push($errors, "wrong username/password combination");
                header('location: login.php');
            }

        }
    }

    if (isset($_GET['delete'])) {
        $sql = "DELETE FROM users WHERE id = ".$_GET['user'];
        mysqli_query($db, $sql);

        $_SESSION['success'] = "User successfully deleted.";
    }

    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $username = $db->real_escape_string($_POST['username']);
        $email = $db->real_escape_string($_POST['email']);
        $password_1 = $db->real_escape_string($_POST['password_1']);

        //ensure that form fields are filled properly
        if (empty($username)) {
            array_push($errors, "username is required");
        }
        if (empty($email)) {
            array_push($errors, "email is required");
        }
        if (empty($password_1)) {
            array_push($errors, "password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password_1);
            $sql = "UPDATE users SET username = '".$username."', password = '".$password."', email = '".$email."' WHERE id = ".$id;
              mysqli_query($db, $sql);
              $_SESSION['success'] = "User successfully updated.";
              header('location: index.php'); //redirect to home page
        }
    }

    //logout
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');

    }
?>