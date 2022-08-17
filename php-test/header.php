<?php   
     session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

     <header>
        <nav class="nav-header-main">
            <a class="header-logo" href="#">
                <img src="images/logo.jpg" width="50" height="50" alt="logo">
            </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="createContact.php">Create Contact</a></li>
        </ul>
        </nav>

        <div class="header-login">
             <?php
                    if (isset($_SESSION['userId'])) {
                        echo '<form action="includes/logout.inc.php" method="post">
                        <button class="logout" type="submit" name="logout-submit">Logout</button>
                    </form> ';
                    echo '<form action="includes/viewContact.inc.php" method="post">
                        <button class="view" type="submit" name="view-contacts">View Contacts</button>
                    </form> ';
                    }
                    else {
                        echo '<form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button class="login"type="submit" name="login-submit">Login</button>
                    </form>
                    <a class="header-signup" href="signup.php">Signup</a>';
                    }
                ?>
            
        </div> 
     </header>
</body>
</html>