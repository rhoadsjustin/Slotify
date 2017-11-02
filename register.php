<?php
    include('config.php');
    include('includes/classes/Account.php');
    include('includes/classes/Constants.php');

    $account = new Account($con);

    include('includes/handlers/register-handler.php');
    include('includes/handlers/login-handler.php');

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Slotify!</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm" method="POST">
            <h2>Login to your account</h2>
            <p>
            <?php echo $account->getError(Constants::$loginFailed); ?>            

            <label for="loginUsername">Username</label>
            <input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. bartSimpson" required>
            
            </p>
            <p>
            <label for="loginPassword">Password</label>
            <input type="password" id="loginPassword" name="loginPassword"  placeholder="your password" required>

            </p>
            <button type="submit" name="loginButton">Log In</button>
        </form>
        <form action="register.php" id="registerForm" method="POST">
            <h2>Create your free account</h2>
            <p>
            <?php echo $account->getError(Constants::$usernameCharacters); ?>            
            <?php echo $account->getError(Constants::$usernameTaken); ?>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="e.g. bartSimpson" value="<?php getInputValue('username'); ?>" required>
            </p>
             <p>
             <?php echo $account->getError(Constants::$firstNameCharacters); ?>
            <label for="firstName">First name</label>
            <input type="text" id="firstName" name="firstName" placeholder="e.g. Bart" value="<?php getInputValue('firstName'); ?>" required>
            </p> 
            <p>             
            <?php echo $account->getError(Constants::$lastNameCharacters); ?>
            <label for="lastName">Last name</label>
            <input type="text" id="lastName" name="lastName" placeholder="e.g. Simpson" value="<?php getInputValue('lastName'); ?>" required>
            </p>
             <p>
            <?php echo $account->getError(Constants::$emailInvalid); ?>
            <?php echo $account->getError(Constants::$emailDoNotMatch); ?>
            <?php echo $account->getError(Constants::$emailTaken); ?>


            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email'); ?>" required>
            </p>
            <p>
            <label for="email2">Confirm Email</label>
            <input type="email" id="email2" name="email2" placeholder="e.g. bart@gmail.com" value="<?php getInputValue('email2'); ?>" required>
            </p>
            <p>
            <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
            <?php echo $account->getError(Constants::$passwordCharacters); ?>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="your password" required>
            </p>
            <p>
            <label for="password2">Confirm password</label>
            <input type="password" id="password2" name="password2" placeholder="your password" required>

            </p>
            <button type="submit" name="registerButton">Sign Up</button>
        </form>
    </div>
</body>
</html>