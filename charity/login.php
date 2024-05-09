<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #fff;
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-right: 5px;
            vertical-align: middle;
        }

        label {
            font-size: 0.9em;
            color: #666;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1em;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <form method="POST" action="loginCheck.php" enctype="multipart/form-data">
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password"><br>

        <table align="center">
                                <tr>
                                    <td colspan="2"><b>Please Select User Type:</b></td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="radio" name="userType" value="admin">
                                    </td>
                                    <td>
                                        <b>Admin</b>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <input type="radio" name="userType" value="user">
                                    </td>
                                    <td>
                                        <b>User</b>
                                    </td>
                                </tr>
        </table>

        <input type="checkbox" name="remember_me" id="remember_me"><label for="remember_me">Remember Me</label><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
