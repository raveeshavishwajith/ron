<?php
    require_once "connectdb.php";
    session_start();
    $id = $_SESSION['username'];
    $sql = "SELECT reg_number, first_name, last_name, gender, yos, email, course, contact_no, past_volunteer_experience, memberships, prof_location from members_details WHERE reg_number = '$id' or email = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="../src/profile_pictures/<?php echo $row['prof_location']; ?>" alt="" style="border-radius: 10000px;">
</body>
</html>