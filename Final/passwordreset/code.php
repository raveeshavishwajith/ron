<?php require_once "../php/queries.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="icon" type="image/x-icon" href="../src/favicon/favicon1.png">
    <link rel="stylesheet" href="../style/style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="logincontainer"></div>
    <div class="wrapper">
        <form action="" method="POST" autocomplete="">
            <div class="form-box login">
                <h1>Code Verification</h1>
                <?php
                if (isset($_SESSION['info'])) {
                ?>
                    <div class="alert success">
                        <?php echo $_SESSION['info']; ?>
                    </div>
                <?php
                }
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
                        <ion-icon name="send-outline"></ion-icon>
                    </span>
                    <input type="number" name="otp" required>
                    <label>OTP</label>
                </div>
                <button type="submit" class="btn" name="check_otp">Submit</button>
            </div>
        </form>
    </div>
    </div>
    </div>
</body>

</html>