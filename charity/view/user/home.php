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
        <a href="/charity/login.php">Donate</a>|
        <a href="/charity/signup.php">Request for Donation</a>|
        <a href="/charity/view/user/logout.php">Logout</a>|
    </nav>

    <div class="container">


        <div class="details">
            <button><a href="/charity/view/user/donate.php">Donate</a></button>
            <button><a href="/charity/view/user/requestDonation.php">Request to take Donation</a></button>
        </div>
        

        
        <div class="volunteer-opportunities">
            <h2>Volunteer Opportunities</h2>
            <button>Registration for Event</button>
            <button>Share</button>
            <button>Collaboration</button>
        </div>

        <div class="sponsors">
            <h2>Sponsors</h2>
            <div style="display: flex; align-items: center; gap: 30px;">
                <img src="/charity/assets/3NBC.webp" alt="Company Image">
                <img src="/charity/assets/bmw.png" alt="Company Image">
                <img src="/charity/assets/amazon.png" alt="Company Image">
                <img src="/charity/assets/hyundai.png" alt="Company Image">
                <img src="/charity/assets/nike.png" alt="Company Image">
                <img src="/charity/assets/mcdonalds.png" alt="Company Image">
            </div>
        </div>

    </div>
</body>

</html>
