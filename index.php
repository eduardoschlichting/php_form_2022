<?php

function shouldShowSubmissionData() 
{
    return count($_POST) > 0;
}

/**
 * Gets the first name, users variable assignemnt (setting a variable to a value)
 * and returns that variable 
 */
function getFirstName() 
{
    $firstName = null;
    if (array_key_exists('first_name', $_POST)) {
        $firstName = $_POST['first_name'];
    }
    return $firstName;
}
/**
 * Users an early retiurn to return the submitted la\st_name
 */
function getLastName()
{
    if (array_key_exists('last_name', $_POST)) {
        return $_POST['first_name'];
    }

    return "No Last Name";
}

function getEmail()
{
    if (array_key_exists('email', $_POST)) {
        return $_POST['email'];
    } else {    
        return "No Email";
    }

}

var_dump(getFirstName());
var_dump(getLastName());

die;

$postData = $_POST;
$firstName = null;
$lastName = null;
$email = null;
$showSubmissionData = shouldShowSubmissionData();



if (array_key_exists('email', $postData)) {
    $email = $postData['email'];
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <form method="POST" action="#">
        <input type="text" name="first_name" placeholder="First Name">
        <br>
        <input type="text" name="last_name" placeholder="Last Name">
        <br>
        <input type="text" name="email" type="email" placeholder="Email">
        <br>
        <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php if($showSubmissionData) { ?>
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