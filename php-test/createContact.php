<?php
    require "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Contact</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php
                 if (isset($_GET['error']))
                 {
                    if ($_GET['error'] = "emptyfields") {
                        echo '<p class="signuperror">Fill in all fields!</p>';
                    }
                    else if ($_GET['error'] = "invaliduidmail") {
                        echo '<p class="signuperror">Invalid username and email!</p>';
                    }
                    else if ($_GET['error'] = "invaliduid") {
                        echo '<p class="signuperror">Invalid username and email!</p>';
                    }  
                    else if ($_GET['error'] = "invalidmail") {
                        echo '<p class="signuperror">Invalid e-mail!!</p>';
                    }  
                    else if ($_GET['error'] = "passwordcheck") {
                        echo '<p class="signuperror">Your passwords do not match!</p>';
                    }  
                    else if ($_GET['error'] = "usertaken") {
                        echo '<p class="signuperror">Username is already taken!</p>';
                    }
                 }
                //     else if ($_GET['contact'] = "success") {
                //     echo '<p class="signupsuccess">Added Contact!</p>';
                // }
                ?>
    <div class="wrapper-main">
        <section class="section-default">
            <form class="form-signup" action="includes/createContact.inc.php" method="post">
                    <input type="text" name="firstName" placeholder="First Name">
                    <input type="text" name="lastName" placeholder="Last Name">
                    <input type="text" name="nickName" placeholder="Nick Name">
                    <input type="text" name="phoneNum" placeholder="Phone Number">
                    <input type="text" name="mail" placeholder="Email">
                    <input type="text" name="company" placeholder="Company">
                    <input type="text" name="street" placeholder="street">
                    <input type="text" name="city" placeholder="city">
                    <input type="text" name="zip" placeholder="zip">
                    <input type="text" name="notes" placeholder="Notes">
                    <button type="submit" name="add-contact">Add Contact</button>
            </form>
        </section>
    </div>
</body>
</html>
<?php
    require "footer.php";
?>