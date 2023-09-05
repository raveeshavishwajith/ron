<?php
session_start();
require "connectdb.php";
$errors = array();

// registration
if (isset($_POST['member_register'])) {
    $regnum = $_POST['reg_number'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $gender = $_POST['gender'];
    $yos = $_POST['yos'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $re_password = $_POST['psw-repeat'];
    $course = $_POST['course'];
    $contactnumber = $_POST['contact_number'];
    $pastexperience = $_POST['past_volunteer_experience'];
    $memberships = $_POST['membership'];

    if ($password == $re_password) {
        $sql = "SELECT * FROM login WHERE email = '$email'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) == 0) {
            if (empty($_FILES['profile_picture'])) {
                $ext = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
                $file_name = $regnum . "." . $ext;
                $tmp_name = $_FILES['profile_picture']['tmp_name'];
                $location = "../src/profile_pictures/";
                move_uploaded_file($tmp_name, $location . $file_name);
                $file_location = $location . $file_name;
            } else {
                if ($gender == 'male') {
                    $file_location = "../src/dummy_profilepic/malepic.png";
                } else {
                    $file_location = "../src/dummy_profilepic/femalepic.png";
                }
            }

            $securepassword = password_hash($password, PASSWORD_DEFAULT);

            $data = $memberships[0];

            $sql = "INSERT INTO members_details VALUE ('$regnum','$firstname','$lastname','$gender','$yos','$email','$course','$contactnumber','$securepassword','$pastexperience','$data','$file_name', 0)";
            $result = mysqli_query($con, $sql);

            for ($i = 1; $i < sizeof($memberships); $i++) {
                $data = $data . " , " . $memberships[$i];
            }
            $query = "UPDATE members_details SET memberships = '$data' WHERE email = '$email'";
            mysqli_query($con, $query);

            $sql = "INSERT INTO login VALUE ('$email', '$securepassword', 'member')";
            $result = mysqli_query($con, $sql);
            session_destroy();

            header("location: ../loginpage/login.php");
        } else {
            $errors['user-error'] = "The user already exists!.";
        }
    } else {
        $errors['error'] = "Those passwords didn't match. Try again.";
    }
}
if (isset($_POST['manager_register'])) {
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $re_password = $_POST['psw-repeat'];
    $contactnumber = $_POST['contactnum'];
    $membership = $_POST['society'];
    $code = $_POST['code'];

    if ($password == $re_password) {
        $sql = "SELECT * FROM login WHERE email = '$email'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) == 0) {
            $sql = "SELECT confirm_code FROM organization WHERE organization = '$membership' ";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            if ($code == $row['confirm_code']) {
                $code = rand(9999999999, 1111111111);
                $sql = "UPDATE organization SET confirm_code = '$code' WHERE organization = '$membership' ";
                $result = mysqli_query($con, $sql);
                $securepassword = password_hash($password, PASSWORD_DEFAULT);

                if ($_FILES['profile_picture'] != null) {
                    $ext = pathinfo($_FILES['profile_picture']['name'], PATHINFO_EXTENSION);
                    $file_name = $regnum . "." . $ext;
                    $tmp_name = $_FILES['profile_picture']['tmp_name'];
                    $location = "../src/profile_pictures/";
                    move_uploaded_file($tmp_name, $location . $file_name);
                } else {
                    if ($gender == 'male') {
                        $file_name = "../src/dummy_profilepic/malepic.png";
                    } else {
                        $file_name = "../src/dummy_profilepic/femalepic.png";
                    }
                }

                $sql = "INSERT INTO managers_details VALUE ('$firstname','$lastname','$gender','$email','$securepassword','$contactnumber','$memberships', 0 ,'$file_name')";
                $result = mysqli_query($con, $sql);

                $sql = "INSERT INTO login VALUE ('$email', '$securepassword', 'manager')";

                $result = mysqli_query($con, $sql);

                session_destroy();

                header("location: ../loginpage/login.php");
            } else {
                $errors['code-error'] = "Confirmation code is wrong";
            }
        } else {
            $errors['user-error'] = "The user already exists!.";
        }
    } else {
        $errors['error'] = "Those passwords didn't match. Try again.";
    }
}

// login
if (isset($_POST['login'])) {
    session_destroy();
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT email, password, role FROM login WHERE email = '$username'";

    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            if ($row['role'] == 'manager') {
                $sql = "SELECT membership FROM managers_details WHERE email = '$username'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $_SESSION['organization'] = $row['membership'];
                header("location: ../dashboard/event_manager/index.php");
            } else {
                header("location: ../dashboard/user_dashboard");
            }
        } else {
            $errors['error'] = "Password doesn't match!";
        }
    } else {
        $errors['error'] = "This email address does not exists!";
    }
}

// forgetpassword check email
if (isset($_POST['check_email'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM login WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        $code = rand(999999, 111111);
        $row = mysqli_fetch_assoc($result);
        if ($row['role'] == 'member') {
            $sql = "SELECT * FROM members_details WHERE email = '$email'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $fullname = $row['first_name'] . " " . $row['last_name'];
            $insert_code = "UPDATE members_details SET validation = '$code' WHERE email = '$email'";
        } else if ($row['role'] == 'manager') {
            $sql = "SELECT * FROM managers_details WHERE email = '$email'";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            $fullname = $row['first_name'] . " " . $row['last_name'];
            $insert_code = "UPDATE managers_details SET validation = '$code' WHERE email = '$email'";
        }
        $result = mysqli_query($con, $insert_code);
        if ($result) {

            require '../mail_send/mailsend.php';

            $subject = "Password Reset Code";
            $message = "Dear $fullname, Your password reset code is $code";

            $mail->setFrom($email, $subject);
            $mail->addAddress($email, '$fullname');

            $mail->Subject = $subject;
            $mail->Body = $message;

            if ($mail->send()) {
                $info = "We've sent a passwrod reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: ../passwordreset/code.php');
                exit();
            } else {
                $errors['code-error'] = "Failed while sending code!";
            }
        } else {
            $errors['error'] = "Something went wrong!";
        }
    } else {
        $errors['email-error'] = "This email address does not exists!";
    }
    header('location: ../passwordreset/forget-password.php');
}

// forget password check otp
if (isset($_POST['check_otp'])) {
    $email = $_SESSION['email'];
    unset($_SESSION['info']);
    $otp = $_POST['otp'];
    $sql = "SELECT * FROM login WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['role'] == 'manager') {
        $check_otp = "SELECT * FROM managers_details WHERE email = '$email'";
        $result = mysqli_query($con, $check_otp);
    } else if ($row['role'] == 'member') {
        $check_otp = "SELECT * FROM members_details WHERE email = '$email'";
        $result = mysqli_query($con, $check_otp);
    }
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['validation'] == $otp) {
            $info = "Please create a new password.";
            $_SESSION['info'] = $info;
            header('location: ../passwordreset/password.php');
            exit();
        } else {
            $errors['error'] = "You have entered incorrect code!";
        }
    } else {
        $errors['error'] = "There is no user";
    }
}

// forget password change password
if (isset($_POST['change_password'])) {
    unset($_SESSION['info']);
    $password = $_POST['pass'];
    $repassword = $_POST['re_pass'];
    if ($password == $repassword) {
        $email = $_SESSION['email'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM login WHERE email = '$email'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row['role'] == 'manager') {
            $sql = "UPDATE managers_details SET password = '$password', validation = '0' WHERE email = '$email'";
            $result = mysqli_query($con, $sql);
        } else if ($row['role'] == 'member') {
            $sql = "UPDATE members_details SET password = '$password', validation = '$code' WHERE email = '$email'";
            $result = mysqli_query($con, $sql);
        }
        $sql = "UPDATE login SET password = '$password' WHERE email = '$email'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header("location: ../loginpage/login.php");
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }
    } else {
        $errors['password'] = "Confirm password not matched!";
    }
}

// logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("location: ../index.php");
}

if (isset($_POST['edit_member'])) {
    echo $_POST['first_name'];
}

if (isset($_POST['cancle_edit'])) {
    header('location: index.php');
}

if (isset($_POST['submitEvent'])) {
    $id = $_SESSION['username'];
    $organization = $_SESSION['organization'];
    $title = $_POST['eventTitle'];
    $venue = $_POST['eventVenue'];
    $count = $_POST['volunteerCount'];
    $details = $_POST['moreDetails'];
    $deadline = $_POST['deadline'];
    $contact = $_POST['contact'];
    if ($_FILES['flyer']) {
        $ext = pathinfo($_FILES['flyer']['name'], PATHINFO_EXTENSION);
        $file_name = $title . "." . $ext;
        $tmp_name = $_FILES['flyer']['tmp_name'];
        $location = "../../src/flyers/";
        move_uploaded_file($tmp_name, $location . $file_name);
        $file_location = $location . $file_name;
    }
    $sql = "INSERT INTO events (title, venue, no_volunteers, more_details, deadline, contact, flyer, organization) VALUE ('$title', '$venue', '$count', '$details', '$deadline', '$contact', '$file_location', '$organization')";
    $result = mysqli_query($con, $sql);
    header('location: index.php');
}

if (isset($_POST['addtodo'])){
    $id = $_SESSION['username'];
    $title = $_POST['eventtitle'];
    $date = $_POST['eventdate'];
    $sql = "INSERT INTO todo (email, title, date) VALUE ('$id', '$title', '$date')";
    $result = mysqli_query($con, $sql);
    header('location: index.php');
}

if (isset($_POST['editTodo'])){
    $id = $_POST['id'];
    $title = $_POST['eventtitle'];
    $date = $_POST['eventdate'];
    $sql = "UPDATE todo SET title = '$title', date = '$date' WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    header('location: index.php');
}