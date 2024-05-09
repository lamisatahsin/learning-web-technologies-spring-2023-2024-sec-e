<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            font-size: larger;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
            margin-right: 10px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <header>
        <h1>Charity & Donation</h1>
    </header>

    <nav>
        |<a href="#">Home</a>|
        <a href="/charity/login.php">Donate</a>|
        <a href="/charity/signup.php">Request for Donation</a>|
        <a href="/charity/view/user/logout.php">Logout</a>|
    </nav>

    <div class="container">

    <?php
    session_start();
    require_once('../../model/db_connection.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    $sql = "SELECT request_donation.userID, users.userName
        FROM request_donation
        INNER JOIN users ON request_donation.userID = users.id and request_donation.status != 'inactive'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            echo "<table border='1'>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["userID"] . "</td>
                        <td>" . $row["userName"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        
        $conn->close();
        ?>

        <form action="/charity/controller/user/submit_donation.php" method="post">
            <label for="userID">User ID:</label>
            <input type="text" id="userID" name="userID" required>
            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount" required>
            <input type="submit" value="Submit">
        </form>

    </div>
</body>

</html>
