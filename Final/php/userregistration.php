<?php require_once 'queries.php' ?>

<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <link rel="icon" type="image/x-icon" href="../src/favicon/favicon1.png">
  <meta charset="UTF-8">
  <title>User Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/style.css">
</head>

<body>
  <div class="background" style="filter: blur(15px)"></div>
  <div class="userreg">
    <div class="form">
      <form action="" method="POST">
        <h1>Volunteer Registration Form</h1>
        <p>Please fill in this form to create an account.</p>
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

        <hr>
        <label for="reg_number">Registration Number:</label>
        <input class="text" type="text" placeholder="Enter Full Name" name="reg_number" id="reg_number" required>

        <label for="first_name">First Name:</label>
        <input type="text" placeholder="Enter First Name" name="first_name" id="first_name" required>

        <label for="last_name">Last Name:</label>
        <input type="text" placeholder="Enter Last Name" name="last_name" id="last_name" required>

        <label for="gender">Gender:</label><br>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male" class="normal">Male</label>
        <br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female" class="normal">Female</label>
        <br><br>

        <label for="yos">Year Of Study :</label>
        <input type="number" placeholder="Enter year of study" name="yos" id="yos" required>

        <label for="email">Email:</label>
        <input type="email" placeholder="Enter Email" name="email" id="email" required>

        <label for="course">Course:</label>
        <input type="text" placeholder="Enter course" name="course" id="course" required>

        <label for="contact_number">Contact Number:</label>
        <input type="text" placeholder="Enter contact number" name="contact_number" id="contact_number" required>

        <label for="psw">Password:</label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="psw-repeat">Repeat Password:</label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

        <label for="past_volunteer_experience">Past Volunteer Experience:</label>
        <input type="text" placeholder="Enter past volunteer experiences" name="past_volunteer_experience" id="past_volunteer_experience" required>

        <label for="membership">Membership:</label><br>
        <input type="checkbox" name="membership[]" id="IEEE" value="IEEE">
        <label for="IEEE" class="normal">IEEE</label>
        <br>
        <input type="checkbox" name="membership[]" id="CSSL" value="CSSL">
        <label for="CSSL" class="normal">CSSL</label>
        <br>
        <input type="checkbox" name="membership[]" id="Garvel" value="Garvel">
        <label for="Gavel" class="normal">Gavel</label>
        <br>
        <input type="checkbox" name="membership[]" id="CompSoc" value="CompSoc">
        <label for="CompSoc" class="normal">CompSoc</label>
        <br><br>

        <label for="profile_picture">Profile Picture</label>
        <input type="file" name="profile_picture" id="profile_picture" required>

        <br>

        <hr>
        <p><input type="checkbox" required /> By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="registerbtn" name="register">Register</button>
      </form>
    </div>
  </div>

</body>

</html>