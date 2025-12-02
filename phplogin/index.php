<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">

        
        <div id="form">
            <h1>Login</h1>
            <form name="form" action="login.php" method="POST" onsubmit="return isValid()">
                <label for="user">Username:</label>
                <input type="text" id="user" name="user" required>

                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" required>

                <input type="submit" id="btn" value="Login" name="submit">
            </form>
            <br>
            <button id="showInfoBtn" onclick="showInfo()"> Personal Information <i class="fa-solid fa-circle-info" aria-hidden="true"></i></button>
        </div>

        
        <div id="personal-info" style="display: none;">
            <h1>My Information</h1>
            <div class="info-content">
                <p><strong>Name:</strong> Elven A. Casipong</p>
                <p><strong>Email:</strong> elvencasipong@email.com</p>
                <p><strong>Address:</strong> NPA</p>
                <p><strong>Phone:</strong> 09999999999</p>
                <p class="about-me"><strong>About Me:</strong><br>I'm not good at everything</br>
                I'm just go with the flow!!!</p>
            </div>

            
            <br>
            <button onclick="hideInfo()" class="secondary-btn">Back to Login</button>
        </div>

    </div>

    <script>
        function isValid() {
            var user = document.form.user.value;
            var pass = document.form.pass.value;

            if (user === "" && pass === "") {
                alert("Username and Password fields are empty!");
                return false;
            }
            if (user === "") {
                alert("Username is empty!");
                return false;
            }
            if (pass === "") {
                alert("Password is empty!");
                return false;
            }
            return true;
        }

        function showInfo() {
            document.getElementById("form").style.display = "none";
            document.getElementById("personal-info").style.display = "block";
        }

        function hideInfo() {
            document.getElementById("personal-info").style.display = "none";
            document.getElementById("form").style.display = "block";
        }
    </script>

</body>
</html>