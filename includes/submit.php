<?php

session_start();

include 'functions.php';
include 'validation.php';

$_SESSION['errors'] = [];


if (!array_key_exists('HTTP_REFERER', $_SERVER)) {
    die;
}

if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    die;
}

$firstName = getPostDataWithDefault('first_name');
$lastName = getPostDataWithDefault('last_name');
$email = getPostDataWithDefault('email');


$firstNameValid = isInputValid($firstName);
$lastNameValid = isInputValid($lastName);
$emailValid = isEmailValid($email);

if (!$firstNameValid) {
    $_SESSION['errors']['first_name'] = 'First name is not valid';
}

if (!$lastNameValid) {
    $_SESSION['errors']['last_name'] = 'Last name is not valid';
}

if (!$emailValid) {
    $_SESSION['errors']['email'] = 'Email is not valid';
}


if (!$firstNameValid || !$lastNameValid || !$emailValid) {
    // set errors to show to user here
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

$to = 'schlichting.eduardo@gmail.com';
$subject = 'new Email from Contact Form!';
$message = '';

$message .= 'First name: ' . $firstName . '\r\n';
$message .= 'Last name: ' . $lastName . '\r\n';
$message .= 'Email: ' . $email . '\r\n';

mail($to, $subject, $message);

// mail();


// var_dump($firstName);
// var_dump($firstNameValid);

// var_dump($lastName);
// var_dump($lastNameValid);

// var_dump($email);
// var_dump($emailValid);


header('Location: ' . $_SERVER['HTTP_REFERER']);

// die; stops the script from running all together