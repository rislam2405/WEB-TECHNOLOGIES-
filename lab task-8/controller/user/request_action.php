<?php
require_once '../../model/request.php';
session_start();

// Variable Declaration

// Variables Declaration
$name = "";
$nameError = "";

$email = "";
$emailError = "";



$phone = "";
$phoneError = "";

$address = "";
$addressError = "";

$JSON_Message = "";
$JSON_Error = "";

$everythingOK = FALSE;
$everythingOKCounter = 0;


$_SESSION['S_nameError'] = "";
$_SESSION['S_emailError'] = "";

$_SESSION['S_phoneError'] = "";
$_SESSION['S_addressError'] = "";







if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
    //*  Validation for Phone

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $phone = $_POST['phone'];
        if (empty($phone)) {
            $phoneError = "Phone is required";
            $_POST['phone'] = "";
            $phone = "";
            $everythingOK = FALSE;
            $everythingOKCounter += 1;


        }

        else {
            $everythingOK = TRUE;
        }
    }



    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $address = $_POST['address'];
        if (empty($address)) {
            $addressError = "Phone is required";
            $_POST['address'] = "";
            $address = "";
            $everythingOK = FALSE;
            $everythingOKCounter += 1;

            // echo "Address error 1";
        } else {
            $everythingOK = TRUE;
        }
    }

    //*  Validation for Profession




   
    if ($everythingOK && $everythingOKCounter == 0) {



        $tempImage = "N/A";
        $signup_data = array(

            'user_mail'          =>      $_POST['email'],
            'password'     =>     $_POST['password'],
            'user_name'               =>     $_POST['name'],
            'user_phone'     =>     $_POST['phone'],
            'user_image'     =>     $tempImage,
            'user_gender'     =>     $_POST['gender'],
            'user_address'     =>     $_POST['address'],


        );

        // TODO: Insert the data to user table

        $is_signup_successful =  add_user($signup_data);
        if ($is_signup_successful) {
            echo "Data Stored";
            header('Location:../../view/user/login.php');
        } else {
            header('Location:../../view/user/registration.php');
        }






        // 
    } else {

        $_SESSION['S_nameError'] = $nameError;
        $_SESSION['S_emailError'] = $emailError;
        $_SESSION['S_passwordError'] = $passwordError;
        $_SESSION['S_genderError'] = $genderError;
        $_SESSION['S_phoneError'] = $phoneError;
        $_SESSION['S_addressError'] = $addressError;

        echo "Everything is Not ok, There are errors and we are sending to the front page <br>";
        header('Location:../../view/user/registration.php');
    }
}
