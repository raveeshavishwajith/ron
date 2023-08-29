<?php require 'queries.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="../src/favicon/favicon1.png">
  <title>Volunteer Registration Form</title>
  <link rel="stylesheet" href="../style/style.css?=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <style>
    .wrapper {
      overflow: hidden;
      overflow-y: scroll;
      width: 30%;
      height: 80%;
      top: 10%;
      left: 35%;
      -ms-overflow-style: none;
      /* IE and Edge */
      scrollbar-width: none;
      /* Firefox */
    }

    .wrapper::-webkit-scrollbar {
      display: none;
      /*Chrome , Opera and Safari */
    }
  </style>
</head>

<body>
  <div class="registercontainer">
  <div class="home-icon">
      <a href="../index.php"><i class="fa-solid fa-house fa-4x" style="color: #ccced1;"></i></a>
    </div>
    <div class="wrapper">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-box login">
          <h1>Volunteer Registration Form</h1>
          <p>Please fill in this form to create an account.</p>
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
          <div class="input-box">
            <input class="text" type="text" name="reg_number" id="reg_number" required>
            <label>Registration Number</label>
          </div>
          <div class="input-box">
            <input type="text" name="first_name" id="first_name" required>
            <label>First Name</label>
          </div>
          <div class="input-box">
            <input type="text" name="last_name" id="last_name" required>
            <label>Last Name</label>
          </div>
          <label>Gender</label>
          <div class="input-box-select">
            <label class="radio">
              <input type="radio" name="gender" id="male" value="male">
              Male
              <span></span>
            </label>
            <label class="radio">
              <input type="radio" name="gender" id="female" value="female">
              Female
              <span></span>
            </label>
          </div>
          <div class="input-box">
            <input type="number" name="yos" id="yos" required>
            <label>Year of Study</label>
          </div>
          <div class="input-box">
            <input type="email" name="email" id="email" required>
            <label>Email</label>
          </div>
          <div class="input-box">
            <input type="password" name="psw" id="psw" required>
            <label>Password</label>
          </div>
          <div class="input-box">
            <input type="password" name="psw-repeat" id="psw-repeat" required>
            <label>Re-Password</label>
          </div>
          <div class="input-box">
            <input type="text" name="course" id="course" required>
            <label>Course</label>
          </div>
          <div class="input-box">
            <input type="number" name="contact_number" id="contact_number" required>
            <label>Contact Number</label>
          </div>
          <div class="input-box">
            <input type="text" name="past_volunteer_experience" id="past_volunteer_experience" required>
            <label>Past Volunteer Experiences</label>
          </div>
          <label>Membership:</label>
          <div class="input-box-select">
            <label class="checkbox">
              <input type="checkbox" name="membership[]" id="IEEE" value="IEEE">
              IEEE
              <span></span>
            </label>
            <br>
            <label class="checkbox">
              <input type="checkbox" name="membership[]" id="CSSL" value="CSSL">
              CSSL
              <span></span>
            </label>
            <br>
            <label class="checkbox">
              <input type="checkbox" name="membership[]" id="gavel" value="gavel">
              Gavel
              <span></span>
            </label>
            <br>
            <label class="checkbox">
              <input type="checkbox" name="membership[]" id="CompSoc" value="CompSoc">
              CompSoc
              <span></span>
            </label>
          </div>
          <div class="input-pic">
            <input type="file" name="profile_picture" id="profile_picture" placeholder="Upload your profile picture" required>
            <label for="profile_picture">
              <i class="fa-solid fa-arrow-up-from-bracket"></i> &nbsp;
              Choose a profile Picture
            </label>
          </div>
          <br>
          <hr>
          <div class="input-box-select">
            <label class="checkbox">
              <input type="checkbox" required /> By creating an account you agree to our <a href="#">Terms & Privacy</a>.
              <span></span>
            </label>
          </div>
          <button type="submit" class="btn" name="member_register" style="margin-top: 10px;">Register</button>
      </form>
    </div>
  </div>
</body>
</html>