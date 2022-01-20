<?php

function isFieldEmpty($input)
{
    return $input == "";
}

function isInputValid($input)
{
    if (isFieldEmpty($input)) {
        return false;
    }

    if (strlen($input) < 3) {
        return false;
    }

    return true;
}



function isEmailValid($email)
{
    if (isFieldEmpty($email)) {
        return false;
    }

    if (strlen($email) < 6) {
        return false;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    return true;
}
