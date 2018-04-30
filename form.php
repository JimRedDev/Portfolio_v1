<?php
    if(isset($_POST['submit'])){
        // Declarations
        $name = $_POST['name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $company = $_POST['company'];
        $message = $_POST['message'];

        $from = 'My Website Contact Form';
        $to = 'j.bowler2017@gmail.com';
        $subject = 'Message from Contact Form';
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
        
        //Validation for selected fields
        if(!$_POST['name']){
            $errName = 'Please enter your name';
        }

        if(!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errEmail = 'Please enter a valid email address';
        }

        if(!$_POST['message']){
            $errMessage = 'Please enter a message';
        }
    
        // If no errors, send mail
        if(!$errName && !$errEmail && !$errMessage){
            if(mail ($to, $subject, $body, $form)){
                $result = '<div class="alert alert-success">Thank you for your message!</div>';
            }else {
                $result = '<div class="alert alert-danger"Sorry there was an error, try again later.</div>';
            }
        }
    }
?>