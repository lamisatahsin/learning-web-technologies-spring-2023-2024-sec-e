<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Email Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    form {
        width: 50%;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="radio"] {
        margin: 5px;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
 
<form action="#" method="post">
    <h2>Email Registration Form</h2>
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="firstname" required>
 
    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lastname" required>
 
    <label for="dob">Date of Birth:</label>
    <select id="dob" name="dob" required>
        <option value="">Select</option>
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <!-- Add other months -->
    </select>
 
    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female" required>
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other" required>
    <label for="other">Other</label>
 
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required>
 
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
 
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
 
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
 
    <input type="submit" value="Submit">
</form>
 
</body>
</html>