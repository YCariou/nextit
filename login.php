<?php

    if(isset($_POST["submitButton"])) {
        echo "Form was submitted";
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
                    <h3>Sign In</h3>
                    <span>To continue to Next It</span>
                    
                </div>
            
                <form action="" method="POST">

                    <input type="text" name="username" placeholder="Username" required>

                    <input type="password" name="password" placeholder="Password" required>

                    <input type="submit" name="submitButton" value="SUBMIT">

                </form>

                <a href="register.php" class="signInMessage">Need a account ? Sign up here!</a>

            </div>

        </div>

    </body>
</html>