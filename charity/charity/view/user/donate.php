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

    
    .form-container {
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-container label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-container input[type="number"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .form-container button[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .form-container button[type="submit"]:hover {
      background-color: #3e8e41; 
    }

        .form-container select {
    width: 50%; /* Make the select element fill the label width */
    padding: 10px; /* Adjust padding for a better look */
    border: 1px solid #ccc;
    border-radius: 3px; /* Add subtle rounded corners */
    box-sizing: border-box; /* Ensure padding doesn't affect width */
    /* Optional: Add a subtle shadow for a more modern feel */
    -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
    /* Optional: Add a focus style to highlight the selected option */
    &:focus {
        border-color: #4CAF50; /* Change border color on focus */
    }
        }    
    </style>
</head>

<body>
    <header>
        <h1>Charity & Donation</h1>
    </header>

    <nav>
        |<a href="/charity/view/user/home.php">Home</a>|
        <a href="/charity/view/user/donate.php">Donate</a>|
        <a href="/charity/view/user/requestDonation.php">Request for Donation</a>|
        <a href="/charity/view/user/logout.php">Logout</a>|
    </nav>

    <div class="container">

    <?php
    // session_start();
    require_once('../../model/db_connection.php');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }



    $sql = "SELECT request_donation.userID, users.userName, request_donation.amount
        FROM request_donation
        INNER JOIN users ON request_donation.userID = users.id and request_donation.status != 'inactive'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            echo "<table border='1'>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Amount</th>
                    </tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["userID"] . "</td>
                        <td>" . $row["userName"] . "</td>
                        <td>" . $row["amount"] . "</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }

        
        $conn->close();
        ?>

        <div class="contaier">
            <div class="form-container">
            <form action="/charity/controller/user/submit_donation.php" method="post">
                <label for="userID">User ID:</label>
                <select id="userID" name="userID" required>
                </select>
                <label for="amount">Amount:</label>
                <input type="text" id="amount" name="amount" required>
                <input type="submit" value="Submit">
            </form>
            </div>
        </div>
        

    </div>
</body>
        
<script>
    function getUserList() {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "/charity/controller/user/get_user_list.php", true); 
      xhr.onload = function() {
        if (xhr.status === 200) {
          var userData = JSON.parse(xhr.responseText); 
          populateUserDropdown(userData);
        } else {
          console.error("Error fetching user data"); 
        }
      };
      xhr.send();
    }

    function populateUserDropdown(userData) {
      var select = document.getElementById("userID");
      select.innerHTML = ""; 

      for (var i = 0; i < userData.length; i++) {
        var user = userData[i];
        var option = document.createElement("option");
        option.value = user.id;
        option.text = user.userName;
        select.appendChild(option);
      }
    }

    window.onload = function() {
      getUserList(); 
    };
  </script>

</html>
