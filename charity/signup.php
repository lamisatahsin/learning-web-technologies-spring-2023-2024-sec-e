<?php
if(isset($_GET['err'])){
    if($_GET['err']=='null'){
        echo "Please fill up all the data.";
    }
    else if($_GET['err']=='passNotMatch'){
        echo "Please type the password correctly.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        fieldset {
            background-color: #fff;
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        legend {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="tel"],
        input[type="date"] {
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1em;
        }
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <form id="registrationForm" method="post" action="checkUserRegistration.php" enctype="">
        <fieldset>
            <legend>Registration For User</legend>
            <table>
                <tr>
                    <td>First Name:</td>
                    <td><input type="text" name="firstName" id="firstName" placeholder="first name"></td>
                    <td><span id="firstNameError" class="error-message"></span></td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td><input type="text" name="lastName" id="lastName" placeholder="last name"></td>
                    <td><span id="lastNameError" class="error-message"></span></td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="userName" id="userName" placeholder="user name"></td>
                    <td><span id="userNameError" class="error-message"></span></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" id="male" value="male"><label for="male">Male</label>
                        <input type="radio" name="gender" id="female" value="female"><label for="female">Female</label>
                        <input type="radio" name="gender" id="other" value="other"><label for="other">Other</label>
                    </td>
                    <td><span id="genderError" class="error-message"></span></td>
                </tr>
                <tr>
                    <td>Birthdate:</td>
                    <td><input type="date" name="birthDate" id="birthDate"></td>
                    <td><span id="birthDateError" class="error-message"></span></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="userEmail" id="userEmail" placeholder="email"></td>
                    <td><span id="userEmailError" class="error-message"></span></td>
                </tr>
                <tr>
                    <td>Phone Number:</td>
                    <td><input type="tel" name="userPhoneNum" id="userPhoneNum"></td>
                    <td><span id="userPhoneNumError" class="error-message"></span></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="userPassword" id="userPassword" placeholder="password"></td>
                    <td><span id="userPasswordError" class="error-message"></span></td>
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" name="userConfirmPassword" id="userConfirmPassword"></td>
                    <td><span id="userConfirmPasswordError" class="error-message"></span></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="button" name="" value="Register" onclick="submitForm()">
                        <input type="reset" name="" value="Reset">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

    <script>
        function submitForm() {
            var firstName = document.getElementById('firstName').value.trim();
            var lastName = document.getElementById('lastName').value.trim();
            var userName = document.getElementById('userName').value.trim();
            var gender = document.querySelector('input[name="gender"]:checked');
            var birthDate = document.getElementById('birthDate').value.trim();
            var userEmail = document.getElementById('userEmail').value.trim();
            var userPhoneNum = document.getElementById('userPhoneNum').value.trim();
            var userPassword = document.getElementById('userPassword').value.trim();
            var userConfirmPassword = document.getElementById('userConfirmPassword').value.trim();

            var firstNameError = document.getElementById('firstNameError');
            var lastNameError = document.getElementById('lastNameError');
            var userNameError = document.getElementById('userNameError');
            var genderError = document.getElementById('genderError');
            var birthDateError = document.getElementById('birthDateError');
            var userEmailError = document.getElementById('userEmailError');
            var userPhoneNumError = document.getElementById('userPhoneNumError');
            var userPasswordError = document.getElementById('userPasswordError');
            var userConfirmPasswordError = document.getElementById('userConfirmPasswordError');

            firstNameError.textContent = '';
            lastNameError.textContent = '';
            userNameError.textContent = '';
            genderError.textContent = '';
            birthDateError.textContent = '';
            userEmailError.textContent = '';
            userPhoneNumError.textContent = '';
            userPasswordError.textContent = '';
            userConfirmPasswordError.textContent = '';

            if (firstName === '') {
                firstNameError.textContent = 'First name is required.';
                return;
            }
            if (lastName === '') {
                lastNameError.textContent = 'Last name is required.';
                return;
            }
            if (userName === '') {
                userNameError.textContent = 'User name is required.';
                return;
            }
            if (!gender) {
                genderError.textContent = 'Gender is required.';
                return;
            }
            if (birthDate === '') {
                birthDateError.textContent = 'Birthdate is required.';
                return;
            }
            if (userEmail === '') {
                userEmailError.textContent = 'Email is required.';
                return;
            }
            if (userPhoneNum === '') {
                userPhoneNumError.textContent = 'Phone number is required.';
                return;
            }
            if (userPassword === '') {
                userPasswordError.textContent = 'Password is required.';
                return;
            }
            if (userConfirmPassword === '') {
                userConfirmPasswordError.textContent = 'Confirm password is required.';
                return;
            }
            if (userPassword !== userConfirmPassword) {
                userPasswordError.textContent = 'Passwords do not match.';
                userConfirmPasswordError.textContent = 'Passwords do not match.';
                return;
            }

            var formData = new FormData();
            formData.append('firstName', firstName);
            formData.append('lastName', lastName);
            formData.append('userName', userName);
            formData.append('gender', gender.value);
            formData.append('birthDate', birthDate);
            formData.append('userEmail', userEmail);
            formData.append('userPhoneNum', userPhoneNum);
            formData.append('userPassword', userPassword);
            formData.append('userConfirmPassword', userConfirmPassword);

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }
            };

            xhttp.open("POST", "checkUserRegistration.php", true);

            xhttp.send(formData);
        }
    </script>
</body>
</html>
