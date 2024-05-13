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

        .label {
        color: white;
        padding: 8px;
        }

        .success {background-color: #04AA6D;} /* Green */

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

    <h1>Trasaction History</h1>

    <?php
    session_start();
    require_once('../../model/db_connection.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT th.id,
    u1.userName AS from_user_name,
    u2.userName AS to_user_name,
    th.amout
    FROM transaction_history AS th
    INNER JOIN users AS u1 ON th.from_userID = u1.id
    INNER JOIN users AS u2 ON th.to_userID = u2.id;
    ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            echo "<table border='1'>
                    <tr>
                        <th>From User Name</th>
                        <th>To User Name</th>
                        <th>Amount</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["from_user_name"] . "</td>
                        <td>" . $row["to_user_name"] . "</td>
                        <td>" . $row["amout"] . "</td>
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
