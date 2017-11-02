<?php
include('config.php');

//session_destroy();

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
} else {
    header("Location: register.php");
}

?>

<html>
<title>Welcome to Slotify</title>
<body>
    <h1>YO YO YO</h1>
</body>
</html>