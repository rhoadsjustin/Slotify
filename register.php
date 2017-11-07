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
    <link rel="stylesheet" href="./assets/css/register.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./assets/js/register.js"></script>
</head>
<body>

    <?php
        if(isset($_POST['registerButton'])) {
           echo '<script>
                    $(document).ready(function(){
                
                        $("#registerForm").show();
                        $("#loginForm").hide();

                    });
                </script>';
        } else {
            echo ' <script>
                    $(document).ready(function(){
                
                        $("#registerForm").hide();
                        $("#loginForm").show();

                    });
                </script>';
        }
    ?>

    
    <div id="background">
        <div id="loginContainer">
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
                    <button type="submit" name="loginButton">LOG IN</button>

                    <div class="hasAccountText">
                        <span id="hideLogin">Don't have an Account Yet? Sign up Here</span>
                    </div>
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
                    <button type="submit" name="registerButton">SIGN UP</button>

                    <div class="hasAccountText">
                        <span id="hideRegister">Already have an Account? Login Here</span>
                    </div>
                </form>
            </div>


            <div id="loginText">
                <h1>
                    Get great music, right now!
                </h1>
                <h2>
                    Listen to loads of songs for free.
                </h2>
                <ul>
                    <li>Discover music you'll like</li>
                    <li>Create your own playlists</li>
                    <li>Follow artists to keep up to date</li>
                </ul>
                
            </div>
        </div>
    </div>
</body>
</html>