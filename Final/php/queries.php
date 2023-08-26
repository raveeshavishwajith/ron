<?php
    session_start();
    require "connectdb.php";
    $errors = array();
    
    // registration
    if(isset($_POST['register'])){
        $regnum = $_POST['reg_number'];
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $gender = $_POST['gender'];
        $yos = $_POST['yos'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $contactnumber = $_POST['contact_number'];
        $password = $_POST['psw'];
        $re_password = $_POST['psw-repeat'];
        $pastexperience = $_POST['past_volunteer_experience'];
        $memberships = $_POST['membership'];
        
        if($password == $re_password){
            $sql = "SELECT * FROM members_details WHERE reg_number = '$regnum' or email = '$email'";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) == 0){
                if(isset($_FILES['profile_picture'])){
                    $ext = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
                    $file_name = $regnum.".".$ext;
                    $tmp_name = $_FILES['profile_picture']['tmp_name'];
                    $location = "../src/profile_pictures/";
                    move_uploaded_file($tmp_name,$location.$file_name);
                }
                else{
                    $file_name="";
                }

                $securepassword = password_hash($password,PASSWORD_DEFAULT);
        
                $sql = "INSERT INTO members_details VALUES ('$regnum','$firstname','$lastname','$gender','$yos','$email','$course','$contactnumber','$securepassword','$pastexperience','$memberships','$file_name', 0)";
        
                $result = mysqli_query($con,$sql);
        
                header("location: login.php");
            }
            else{
                $errors['user-error'] = "The user already exists!.";
            }
        }
        else{
            $errors['error'] = "Those passwords didn't match. Try again.";
        }

    }

    // login
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT reg_number, password FROM members_details WHERE reg_number = '$username' or email = '$username'";

        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
    
            if(password_verify($password, $row['password'])){
                $_SESSION['username'] = $username;
                header("location: ../user_dashboard/user_dashboard.php");
            }
            else{
                $errors['error'] = "Password doesn't match!";
            }
        }
        else {
            $errors['error'] = "This email address does not exists!";
        }

    }

    // forgetpassword check email
    if(isset($_POST['check_email'])){
        $email = $_POST['email'];
        $sql = "SELECT reg_number FROM members_details WHERE email = '$email'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE members_details SET validation = '$code'";
            $result = mysqli_query($con, $insert_code);
            if ($result){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: info.reachoutnow@gmail.com";
                // if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: code.php');
                    exit();
                // }else{
                //     $errors['code-error'] = "Failed while sending code!";
                // }
            }else{
                $errors['error'] = "Something went wrong!";
            }
        }
        else{
            $errors['email-error'] = "This email address does not exists!" ;
        }
    }

    // forget password check otp
    if(isset($_POST['check_otp'])){
        unset($_SESSION['info']);
        $otp = $_POST['otp'];
        $check_otp = "SELECT * FROM members_details WHERE validation = '$otp'";
        $result = mysqli_query($con, $check_otp);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $info = "Please create a new password.";
            $_SESSION['info'] = $info;
            header('location: password.php');
            exit();
        }
        else{
            $errors['error'] = "You have entered incorrect code!";
        }
    }

    // forget password change password
    if(isset($_POST['change_password'])){
        unset($_SESSION['info']);
        $password = $_POST['pass'];
        $repassword = $_POST['re_pass'];
        if($password == $repassword){
            $code = 0;
            $email = $_SESSION['email'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "UPDATE members_details SET password = '$password', validation = '$code'";
            $result = mysqli_query($con, $sql);
            if($result){
                header("location: login.php");
            }
            else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
        else{
            $errors['password'] = "Confirm password not matched!";
        }
    }
?>