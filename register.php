<?php
require_once("includes/classes/FormSanitizer.php");

    if(isset($_POST["submitButton"])) {
        
        $firstName = FormSanitizer::sanitizeFormString($_POST["firstName"]);
        $lastName = FormSanitizer::sanitizeFormString($_POST["lastName"]);
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);

        echo $firstName . "<br>";
        echo $lastName . "<br>";
        echo $username . "<br>";
        echo $email . "<br>";
        echo $email2 . "<br>";
        echo $password . "<br>";
        echo $password2 . "<br>";
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>NEXT IT</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css"/>
    </head>

    <body>

        <div class="signInContainer">

            <div class="column" align="center">

                <div class="header">
                    <img src="https://fontmeme.com/permalink/200303/403e07707e8e262864d57fbdeafe0367.png" title="Logo" alt="Site logo">
                    <h3>Sign Up</h3>
                    <span>To continue to Next It</span>
                    
                </div>
            
                <form action="" method="POST">

                    <input type="text" name="firstName" placeholder="First name" required>

                    <input type="text" name="lastName" placeholder="Last name" required>

                    <input type="text" name="username" placeholder="Username" required>

                    <input type="email" name="email" placeholder="Email" required>

                    <input type="email" name="email2" placeholder="Confirm email" required>

                    <input type="password" name="password" placeholder="Password" required>

                    <input type="password" name="password2" placeholder="Confirm password" required>

                    <input type="submit" name="submitButton" value="SUBMIT">

                </form>

                <a href="login.php" class="signInMessage">Already have a account ? Sign in here!</a>

            </div>

        </div>

    </body>
</html>