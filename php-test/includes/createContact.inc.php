<?php 

if (isset($_POST['add-contact'])) {

    require 'dbh.inc.php';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $nickName = $_POST['nickName'];
    $phoneNumber = $_POST['phoneNum'];
    $email = $_POST['mail'];
    $company = $_POST['company'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];


    // $addressTwo = $_POST['addressTwo'];
    $notes = $_POST['notes'];
    
    //contact MUST have atleast a name and phone number
    if (empty($firstName) || empty($lastName) || empty($phoneNumber)) {
        header("Location: ../createContact.php?error=emptyfields&uid=".$firstName."&phone=".$phoneNumber);
        exit();
    }
    //validate email, if invalid return to signup page with username filled out
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../createContact.php?error=invalidmailuid");
        exit();
    } 
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../createContact.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../createContact.php?error=invaluid&mail=".$mail);
        exit();
    }  
    
    else {       
                $sql = "INSERT INTO contacts (firstName, lastName, nickName, phoneNumber, email, company, street, city, zip, notes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../createContact.php?error=sqlerror");
                    exit();
                }     
                else {
                    mysqli_stmt_bind_param($stmt, "sssissssss", $firstName, $lastName, $nickName, $phoneNumber, $email, $company, $street, $city, $zip, $notes);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../createContact.php?signup=success");
                    exit();            
                }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../createContact.php?");
    exit();
}
    
?>