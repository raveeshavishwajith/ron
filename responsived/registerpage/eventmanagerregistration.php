<?php require_once '../php/queries.php' ?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Event Manager Registration Form</title>
  <link rel="icon" type="image/x-icon" href="../src/favicon/favicon1.png">
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
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-box login">
          <h1>Event Manager Registration Form</h1>
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
            <input type="text" name="first_name" id="first_name" required>
            <label for="first_name">First Name</label>
          </div>
          <div class="input-box">
            <input type="text" name="last_name" id="last_name" required>
            <label for="last_name">Last Name</label>
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
            <input type="text" name="email" id="email" required>
            <label for="email">Email</label>
          </div>
          <div class="input-box">
            <input type="password" name="psw" id="psw" required>
            <label for="psw">Password</label>
          </div>
          <div class="input-box">
            <input type="password" name="psw-repeat" id="psw-repeat" required>
            <label for="psw-repeat">Repeat Password</label>
          </div>
          <div class="input-box">
            <input type="number" id="contactnum" name="contactnum" required>
            <label for="contactnum">Contact Number</label>
          </div>
          <label>Organization you are representing</label>
          <div class="input-box-select">
            <label class="radio">
              <input type="radio" name="society" value="IEEE">
              IEEE
              <span></span>
            </label>
            <br>
            <label class="radio">
              <input type="radio" name="society" value="CSSL">
              CSSL
              <span></span>
            </label>
            <br>
            <label class="radio">
              <input type="radio" name="society" value="CompSoc">
              CompSoc
              <span></span>
            </label>
            <br>
            <label class="radio">
              <input type="radio" name="society" value="Gavel">
              Gavel
              <span></span>
            </label>
          </div>
          <div class="input-pic">
            <input type="file" name="profile_picture" id="profile_picture" placeholder="Upload your profile picture">
            <label for="profile_picture">
              <i class="fa-solid fa-arrow-up-from-bracket"></i> &nbsp;
              Choose a profile Picture
            </label>
          </div>
          <div class="input-box">
            <input type="number" id="code" name="code" required>
            <label for="code">Confirmation Code</label>
          </div>
          <br>
          <hr>
          <div class="input-box-select">
            <label class="checkbox">
              <input type="checkbox" required /> By creating an account you agree to our <a href="#">Terms & Privacy</a>.
              <span></span>
            </label>
          </div>
          <br>
          <button type="submit" class="btn" name="manager_register">Register</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>