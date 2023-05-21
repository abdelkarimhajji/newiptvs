<?php
    include "connecte.php";
    session_start();
    if (isset($_POST['submit']))
    {
        
        $firstname = htmlspecialchars($_POST['firstname'], ENT_QUOTES, 'UTF-8');
        $lastname = htmlspecialchars($_POST['lastname'], ENT_QUOTES, 'UTF-8');
        $phone = htmlspecialchars($_POST['number'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
        $message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
        if (!empty($email) && !empty($message) && strlen($message) <= 300)
        {
            $sql = "INSERT INTO dataClients (firstname, lastname, phone, email, message) 
            VALUES ('$firstname', '$lastname', '$phone', '$email', '$message')";
            mysqli_query($conn, $sql);
            $_SESSION['valid'] = false;
            header('Location: index.php');
            exit;
        }
        else
        {
            $_SESSION['valid'] = true;
            header('Location: index.php');
        }
    }
    
    
?>
