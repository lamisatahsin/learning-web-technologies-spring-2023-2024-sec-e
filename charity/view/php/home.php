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
            padding: 10px;
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

        .profile {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .profile img {
            width: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .profile button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 10px;
        }

        .transaction-details {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .transaction-details table {
            width: 100%;
            border-collapse: collapse;
        }

        .transaction-details th,
        .transaction-details td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .transaction-details th {
            background-color: #007bff;
            color: #fff;
        }

        .faq {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .faq details {
            margin-bottom: 10px;
        }

        .faq summary {
            font-weight: bold;
            cursor: pointer;
        }

        .faq p {
            margin-top: 5px;
            margin-bottom: 0;
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

        .sponsors img {
            width: 100px;
            margin-right: 10px;
        }

    </style>
</head>

<body>
    <header>
        <h1>Charity Website</h1>
    </header>

    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Donate</a>
        <a href="#">Contact</a>
    </nav>

    <div class="container">

        <div class="profile">
            <h2>Profile</h2>
            <img src="/assets/profile.png" alt="User Image">
            <p>Name: Name</p>
            <p>Email: Email</p>
            <p>Address: Dhaka, Bangladesh</p>
            <p>Phone: 017XXXXXXXX</p>
            <button>Change Password</button>
            <button>Edit Profile</button>
            <form method="POST" action="/charity/controller/upload.php" enctype="multipart/form-data">
                <input type="submit" name="Submit" value="Submit" />
                <input type="file" name="myfile" value="" />
            </form>
        </div>

        <?php
            $transactions = array(
                array("id" => 1, "amount" => "10,000", "sender" => "Jone Due", "receiver" => "Milana Don", "date" => "Jan 20, 2024", "status" => "Success"),
                array("id" => 2, "amount" => "7,500", "sender" => "Alice Smith", "receiver" => "Bob Johnson", "date" => "Feb 5, 2024", "status" => "Cancelled"),
                array("id" => 3, "amount" => "15,200", "sender" => "Emma Davis", "receiver" => "David Brown", "date" => "Mar 10, 2024", "status" => "Failed"),
                array("id" => 4, "amount" => "3,000", "sender" => "Michael Wilson", "receiver" => "Sophia Martinez", "date" => "Apr 15, 2024", "status" => "Success"),
                array("id" => 5, "amount" => "12,800", "sender" => "William Taylor", "receiver" => "Olivia Garcia", "date" => "May 20, 2024", "status" => "Failed"),
                array("id" => 6, "amount" => "9,600", "sender" => "James Anderson", "receiver" => "Emily Lopez", "date" => "Jun 25, 2024", "status" => "Failed"),
                array("id" => 7, "amount" => "6,700", "sender" => "Daniel Lee", "receiver" => "Chloe Moore", "date" => "Jul 30, 2024", "status" => "Cancelled"),
                array("id" => 8, "amount" => "18,500", "sender" => "Matthew Clark", "receiver" => "Lily Rodriguez", "date" => "Aug 5, 2024", "status" => "Success"),
                array("id" => 9, "amount" => "11,300", "sender" => "Lucas Hall", "receiver" => "Ava Hernandez", "date" => "Sep 10, 2024", "status" => "Success"),
                array("id" => 10, "amount" => "5,400", "sender" => "Ethan Lewis", "receiver" => "Mia King", "date" => "Oct 15, 2024", "status" => "Failed")
            );
        ?>



        <div class="transaction-details">
            <h2>Transaction Details</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Amount</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($transactions as $transaction) : ?>
                <tr>
                    <td>
                        <?php echo $transaction['id']; ?>
                    </td>
                    <td>
                        <?php echo $transaction['amount']; ?>
                    </td>
                    <td>
                        <?php echo $transaction['sender']; ?>
                    </td>
                    <td>
                        <?php echo $transaction['receiver']; ?>
                    </td>
                    <td>
                        <?php echo $transaction['date']; ?>
                    </td>
                    <td>
                        <?php echo $transaction['status']; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="faq">
            <h2>FAQ</h2>
            <!-- FAQ details here -->
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
                <img src="/assets/3NBC.webp" alt="Company Image">
                <img src="/assets/bmw.png" alt="Company Image">
                <img src="/assets/amazon.png" alt="Company Image">
                <img src="/assets/hyundai.png" alt="Company Image">
                <img src="/assets/nike.png" alt="Company Image">
                <img src="/assets/mcdonalds.png" alt="Company Image">
            </div>
        </div>

    </div>
</body>

</html>
