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

        .details {
            align-items: center;
        }

        .details button{
            background-color:red;
            color: #fff;
            border:#333;
            border-radius: 12px;
            padding: 10px 20px;
            margin: 10px 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .volunteer-opportunities {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .volunteer-opportunities button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 10px;
        }

        .sponsors {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .sponsors h2{
            text-align: center;
        }

        .sponsors img {
            width: 100px;
            margin-right: 10px;
        }

    </style>
</head>

<body>
    <header>
        <h1>Charity & Donation</h1>
    </header>

    <nav>
        |<a href="#">Home</a>|
        <a href="/charity/view/user/logout.php">Logout</a>|
    </nav>

    <div class="container">

    <?php
    session_start();
    require_once('../../model/db_connection.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    $sql = "SELECT th.id, 
        from_user.username AS sender_username, 
        to_user.username AS receiver_username, 
        th.amount
        FROM transaction_history th
        INNER JOIN users from_user ON th.from_userID = from_user.id
        INNER JOIN users to_user ON th.to_userID = to_user.id;";
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
    

    </div>
</body>

</html>
