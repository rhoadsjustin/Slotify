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

<div id="mainContainer">

    <div id="topContainer">
         <?php include('./includes/navBarContainer.php'); ?>
         
    </div>

        <?php include('./includes/nowPlayingBarContainer.php'); ?>





</div>

</body>
</html>