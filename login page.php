<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $id = mysqli_fetch_assoc($result)["uid"];
        echo $uid;
        $_SESSION["username"] = $username;
        $cookie_name = "username";
        setcookie($cookie_name, $username, time() + 3600);
        $cookie_name = "uid";
        setcookie($cookie_name, $id, time() + 3600);
        echo "<script>alert('Login successful. Welcome, $username!');</script>";
        header("Location: cars.php");
    } else {
        echo "<script>alert('Login failed. Please check your username and password.');</script>";
    }
}

?>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="cs 3.css">
    <style>
        body {
            background: url('wallpaper 5.jpg');
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

        /* CSS Effect for Input Fields */
        input[type="text"], input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #5cb85c;
            outline: solid;
        }
    </style>
</head>
<body>
    <font face="Consolas" size="5" color="black">
        <center>
            <b>
                <h2 class="rounded box">Login Page</h2>
            </b>
            <br/> <br/>
        </center>
    </font>
    <form action="#" onsubmit="return validateForm()" method="POST">
        <center>
            <p><b>Please Enter Username And Password</b> <br/><br/></p>
            <table class="login-table">
                <tr>
                    <td><b>User Name</b></td><td><input type="text" id="username" name="username" required></td>
                </tr>
                <tr>
                    <td><b>Password</b></td><td><input type="password" id="password" name="password" required></td>
                </tr>
            </table>
            <br/>
            <input type="submit" value="Login"/>
        </center>
    </form>
    <p><a href="main.html" onclick="goBack()">Go Back</a></p>

    <script>
        function validateForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            var usernamePattern = /^[a-zA-Z]+$/;
            if (!usernamePattern.test(username)) {
                alert("Invalid username. Username must contain only alphabets and at least one special character.");
                return false;
            }

            var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).+$/;
            if (!passwordRegex.test(password)) {
                alert("String should contain lowercase letters, uppercase letters, numbers, and special characters.");
                return false;
            }

            if (username.trim() === '' || password.trim() === '') {
                alert("Please enter both username and password.");
                return false;
            }

            alert("Login successful. Welcome, " + username + "!");

            return true;
        }
    </script>
</body>
</html>
