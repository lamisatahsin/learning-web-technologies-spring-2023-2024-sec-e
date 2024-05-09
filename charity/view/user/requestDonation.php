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
    <div class="form-container">
        <form id="insertForm" action="/charity/controller/user/requestDonationCheck.php" method="post">
            <button type="submit">Request For Donation</button>
        </form>
    </div>
</div>
</body>

</html>
