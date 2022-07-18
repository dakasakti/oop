<?php

class Validation extends Exception
{
}

function validateLogin(Login $request)
{
    if (!isset($request->username)) {
        throw new Validation('Username is null');
    } else if (!isset($request->password)) {
        throw new Validation('Password is null');
    } else if (trim($request->username) == '') {
        throw new Exception('Username is empty');
    } else if (trim($request->password) == '') {
        throw new Exception('Password is empty');
    }
}

class Login
{
    public $username;
    public $password;
}

$login = new Login();
$login->username = ' ';
$login->password = 'admin';

try {
    validateLogin($login);
    echo "Request" . PHP_EOL;
} catch (Validation | Exception $error) {
    echo "Error: " . $error->getMessage() . PHP_EOL;

    // debuging
    // array
    var_dump($error->getTrace());

    // string
    echo $error->getTraceAsString();
} finally {
    echo "EKSEKUSI WAJIB" . PHP_EOL;
}
