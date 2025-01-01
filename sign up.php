<?php 
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phoneNumber"];
    $place = $_POST["place"];
    $gender = $_POST["gender"];
    $emi = $_POST["emi"];

    $sql = "INSERT INTO users (username, dob, pass, email, address, phone, place, gender, emi) VALUES ('$username', '$dob', '$password', '$email', '$address', '$phoneNumber', '$place', '$gender', '$emi')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Sign up successful');</script>";
    } else {
        echo "<script>alert('Sign up failed');</script>";
    }
}
?>

<html>
<head>
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="cs 2.css">
    <style>
        body {
            background: url('wallpaper 4.jpg');
            background-size: 190% 190%;
            animation: fadeInAnimation ease 2s;
            animation-iteration-count: 1;
            animation-fill-mode: forwards;
        }

        @keyframes fadeInAnimation {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

                input[type="text"], input[type="password"], input[type="email"], input[type="tel"], input[type="date"] {
            padding: 10px;
            border: 1px solid white;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus, input[type="email"]:focus, input[type="tel"]:focus, input[type="date"]:focus {
            border-color: red;
            outline: solid;
        }
    </style>
</head>
<body onload="handleLoad()">
    <font face="Consolas" size="5" color="black">
        <center>
            <b>
                <h1 class="rounded box">Sign Up</h1>
            </b>
            <br/> <br/>
        </center>
    </font>
    <center>
        <table border="1">
            <form action="#" onsubmit="return validateForm()" method="POST">
                <tr>
                    <td><b>Username</b></td>
                    <td><input type="text" name="username" id="username" required onmouseover="highlightInput(this)" onmouseout="normalInput(this)" /></td>
                </tr>
                <tr>
                    <td><b>DOB</b></td>
                    <td><input type="date" name="dob" id="dob" required onmouseover="highlightInput(this)" onmouseout="normalInput(this)" /></td>
                </tr>
                <tr>
                    <td><b>Password</b></td>
                    <td><input type="password" name="password" id="password" required onmouseover="highlightInput(this)" onmouseout="normalInput(this)" maxlength="8"/></td>
                </tr>
                <tr>
                    <td><b>Confirm Password</b></td>
                    <td><input type="password" name="confirmPassword" id="confirmPassword" required onmouseover="highlightInput(this)" onmouseout="normalInput(this)" maxlength="8" /></td>
                </tr>
                <tr>
                    <td><b>Email-ID</b></td>
                    <td><input type="email" name="email" id="email" required onmouseover="highlightInput(this)" onmouseout="normalInput(this)" onchange="myFunction()" /></td>
                </tr>
                <tr>
                    <td><b>Address</b></td>
                    <td><textarea name="address" id="address" maxlength="150" required onmouseover="highlightInput(this)" onmouseout="normalInput(this)" ></textarea></td>
                </tr>
                <tr>
                    <td><b>Phone Number</b></td>
                    <td><input type="tel" name="phoneNumber" id="phoneNumber" maxlength="10" required pattern="[0-9]{10}" onmouseover="highlightInput(this)" onmouseout="normalInput(this)" /></td>
                </tr>
                <tr>
                    <td><b>Place</b></td>
                    <td>
                        <select name="place" id="place" required onmouseover="highlightInput(this)" onmouseout="normalInput(this)" >
                            <option value="" disabled selected>Select your place</option>
                            <option value="Banglore">Banglore</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Mumbai">Mumbai</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Gender</b></td>
                    <td>M<input type="radio" name="gender" value="Male" id="male" required/> F<input type="radio" name="gender" value="Female" id="female" required/></td>
                </tr>
                <tr>
                    <td><b>EMI - OPTIONS</b></td>
                    <td>YES<input type="radio" name="emi" value="Yes" required/> NO<input type="radio" name="emi" value="No" required/></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" id="agreeCheckbox" required><b> I agree to the terms and conditions</b>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" /></td>
                    <td><input type="reset" value="Reset" /></td>
                </tr>
            </form>
        </table>
        <p><a href="main.html" onclick="goBack()">Go Back</a></p>
    </center>

    <script>
        
    function validateForm() {
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        var email = document.getElementById("email").value;

        var usernameRegex = /^[a-zA-Z]+$/;
        if (!usernameRegex.test(username)) {
            alert("Username can only contain alphabetic characters");
            return false;
        }

        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/;
        if (!passwordRegex.test(password)) {
            alert("String should contain lowercase letters, uppercase letters, numbers, and special characters.");
            return false;
        }

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address");
            return false;
        }

        if (password !== confirmPassword) {
            alert("Passwords do not match");
            return false;
        }

        return true;
    }

    function handleLoad() {
        var requiredFields = document.querySelectorAll('[required]');
        var allFieldsFilled = true;
        requiredFields.forEach(function(field) {
            if (!field.value.trim()) {
                allFieldsFilled = false;
                return;
            }
        });

        if (allFieldsFilled) {
            alert("Page is loaded");
        } else {
            console.log("Required fields are not filled");
        }
    }

    function handleKeyDown(event) {
        if (event.keyCode === 13) { 
            event.preventDefault(); 
            validateForm(); 
        }
    }

    function highlightInput(element) {
        element.style.background = "yellow";
        element.style.color = "red";
        element.style.border = "5px double green";
    }

    function normalInput(element) {
        element.style.background = "white";
        element.style.color = "black";
        element.style.border = "1px solid green";
    }

    function myFunction() {
        var x = document.getElementById("gmail");
        x.value = x.value.toLowerCase();
    }

    function goBack() {
        window.history.back();
    }
</script>
</body>
</html>
