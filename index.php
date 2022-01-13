<?php

function shouldShowSubmissionData() 
{
    return count($_POST) > 0;
}

/**
 * function with parameters
 * $key is the key in the $_POST array that we want to access
 */
function getPostDataWithDefault($key)
{
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }
    return "";
}

$firstName = getPostDataWithDefault('first_name');
$lastName = getPostDataWithDefault('last_name');
$email = getPostDataWithDefault('email');
$comments = getPostDataWithDefault('comments');
$showSubmissionData = shouldShowSubmissionData();

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
        <p>
        <?php echo $comments; ?>
        </p>
    </div>
    <?php } ?>
</body>
</html>