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


function getErrorMessageFromSession($key)
{
    if (!isset($_SESSION)) {
        return '';
    }

    if (!array_key_exists('errors', $_SESSION)) {
        return '';
    }

    if (!array_key_exists($key, $_SESSION['errors'])) {
        return '';
    }

    return $_SESSION['error'][$key];
}
