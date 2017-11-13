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
<head>
<link rel="stylesheet" href="./assets/css/style.css">

<title>Welcome to Slotify</title>


</head>
<body>



<div id="nowPlayingBarContainer">


</div>




</body>
</html>