<?php

function sanitizeFormUsername($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    return $inputText;
}
function sanitizeFormPassword($inputText) {
    $inputText = strip_tags($inputText);
    return $inputText;
}

function sanitizeFormString($inputText) {
    $inputText = strip_tags($inputText);
    $inputText = str_replace(" ", "", $inputText);
    $inputText = ucfirst(strtolower($inputText));
    return $inputText;
}




if(isset($_POST['registerButton'])) {
    //Register button logic
    $username  = sanitizeFormUsername($_POST['username']);
    $firstname  = sanitizeFormString($_POST['firstName']);
    $lastname  = sanitizeFormString($_POST['lastName']);
    $email  = sanitizeFormString($_POST['email']);
    $email2  = sanitizeFormString($_POST['email2']);
    $password = sanitizeFormPassword($_POST['password']);
    $password2 = sanitizeFormPassword($_POST['password2']);

    $wasSuccessful = $account->register($username, $firstname, $lastname, $email, $email2, $password, $password2);

    if($wasSuccessful){
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}


?>