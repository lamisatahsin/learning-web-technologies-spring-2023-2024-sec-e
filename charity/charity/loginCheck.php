<?php
session_start();
require_once('model/db_connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userType = $_POST['userType'];
    $remember_me = isset($_POST['remember_me']) ? true : false;

    $errors = array();

    if(empty($username)) {
        $errors[] = "Username is required";
    }

    if(empty($password)) {
        $errors[] = "Password is required";
    }

    if(!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {

        if($userType == 'admin'){
            $query = "SELECT * FROM admins WHERE username = '$username'";
            $result = mysqli_query($conn, $query);
            
            if ($result && mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if ($password === $row['userPassword']) {
                    if ($remember_me) {
                        $cookie_name = 'remember_me_cookie';
                        $cookie_value = $username . '|' . $password;
                        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                    }

                    session_regenerate_id();
                    $_SESSION['username'] = $username;
                    header('Location: /charity/view/admin/home.php');
                    exit;
                } else {
                    echo "Invalid username/password";
                }
            } else {
                echo "Invalid username/password";
            }
        }

        if($userType == 'user'){
            $query = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $query);
            
            if ($result && mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if ($password === $row['userPassword']) {
                    if ($remember_me) {
                        $cookie_name = 'remember_me_cookie';
                        $cookie_value = $username . '|' . $password;
                        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                    }

                    setcookie('status', 'true', time()+60*60*72, '/');
                    setcookie('userid', $row['id'], time()+60*60*72, '/');
                    session_regenerate_id();
                    $_SESSION['username'] = $username;
                    header('Location: /charity/view/user/home.php');
                    exit;
                } else {
                    echo "Invalid username/password";
                }
            } else {
                echo "Invalid username/password";
            }
        }
    }
} else {
    header('Location: login.php');
    exit;
}
?>