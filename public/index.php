<?php

session_start();

include '../includes/functions.php';

$firstName = getPostDataWithDefault('first_name');
$lastName = getPostDataWithDefault('last_name');
$email = getPostDataWithDefault('email');
// $comments = getPostDataWithDefault('comments');

$showSubmissionData = shouldShowSubmissionData();

$firstNameError = getErrorMessageFromSession('first_name');
$lastNameError = getErrorMessageFromSession('last_name');
$emailError = getErrorMessageFromSession('email');

// var_dump($_SESSION);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>

<body>

    <?php
    include '../includes/partials/navigation.php'
    ?>

    <form method="POST" action="../includes/submit.php">
        <input type="text" name="first_name" placeholder="First Name">
        <br>
        <input type="text" name="last_name" placeholder="Last Name">
        <br>
        <input type="text" name="email" type="email" placeholder="Email">
        <br>
        <!-- <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
        <br> -->
        <button type="submit">Submit</button>
    </form>

    <?php if ($showSubmissionData) { ?>
        <div>
            <?php echo "<h2>You submitted:</h2>" ?>
            <p>
                <?php echo $firstName; ?>
            </p>
            <p>
                <?php echo $lastName; ?>
            </p>
            <p>
                <?php echo $email; ?>
            </p>

        </div>
    <?php } ?>
</body>

</html>