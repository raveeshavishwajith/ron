<?php require_once "../php/queries.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="../src/favicon/favicon1.png">
    <title>Forget Password</title>
    <link rel="stylesheet" href="../style/style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="logincontainer"></div>
    <div class="wrapper">
        <form action="" method="POST" autocomplete="">
            <div class="form-box login">
                <h1>Forgot Password</h1>
                <p>Enter your email address</p>
                <br>
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
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <button type="submit" class="btn" name="check_email">Login</button>
            </div>
        </form>
    </div>
</body>

</html>