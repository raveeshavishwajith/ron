<?php require_once '../php/queries.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../src/favicon/favicon1.png">
    <title>Login page</title>
    <link rel="stylesheet" href="../style/style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="logincontainer"></div>
    <div class="wrapper">
        <form action="" method="post">
            <div class="form-box login">
                <h1>Login</h1>
                <form action="" method="POST">
                    <?php
                    if (count($errors) > 0) {
                    ?>
                        <div class="alert danger">
                            <?php
                            foreach ($errors as $error) {
                                echo $error;
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" name="username" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="lock-closed"></ion-icon>
                        </span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forget">
                        <label>
                            <input type="checkbox">Remember me
                        </label>
                        <a href="../passwordreset/forget-password.php">Forgot Password</a>
                    </div>
                    <button type="submit" class="btn" name="login">Login</button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="../registerpage/register.php" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
        </form>
    </div>
</body>

</html>