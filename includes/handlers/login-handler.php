<?php
if(isset($_POST['loginButton'])) {
    //Login button logic
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];


    //Login function
    $result = $account->login($username, $password);
    if($result){
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}
?>