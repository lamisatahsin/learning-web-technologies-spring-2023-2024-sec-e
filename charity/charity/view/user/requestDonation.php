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

    
    .form-container {
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-container label {
      display: block;
      margin-bottom: 5px;
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
    <div class="form-container">
      <form id="insertForm" action="/charity/controller/user/requestDonationCheck.php" method="post">
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount">
        <br>
        <button type="submit">Request For Donation</button>
      </form>
    </div>
  </div>
</body>

<script>
  document.getElementById("insertForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form data
    var amount = document.getElementById("amount").value;

    // Send data to PHP controller using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "/charity/controller/user/requestDonationCheck.php", true); // Replace with your actual controller URL
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Handle successful response
        alert(xhr.responseText); // Display popup message from PHP
      } else {
        // Handle error response
        alert("Error: Request failed!");
      }
    };
    var data = "amount=" + amount; // Encode data as URL-encoded string
    xhr.send(data);
  });
</script>

</html>
