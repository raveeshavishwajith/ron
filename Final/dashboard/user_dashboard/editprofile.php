
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="../../src/favicon/favicon1.png">
  <title>Edit profile Form</title>
  <link rel="stylesheet" href="styleeditform.css?=<?php echo time(); ?>">
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
      <a href="index.php"><i class="fa-solid fa-house fa-4x" style="color: #ccced1;"></i></a>
    </div>
    <div class="wrapper">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-box login">
          <h1>Edit profile</h1>
          <p>You are editing your profile which already exist.</p>
          
          <div class="input-box">
            <input  type="text" name="first_name" id="first_name" required>
            <label>First Name</label>
          </div>
          <div class="input-box">
            <input  type="text" name="last_name" id="last_name" required>
            <label>Last Name</label>
          </div>
          <div class="input-box">
            <input  type="number" name="yos" id="yos" required>
            <label>Year of Study</label>
          </div>
          <div class="input-box">
            <input type="number" name="contact_number" id="contact_number" required>
            <label>Contact Number</label>
          </div>
          <div class="input-box">
            <input  type="text" name="past_volunteer_experience" id="past_volunteer_experience" required>
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
            <input type="file" name="profile_picture" id="profile_picture" required>
            <label for="profile_picture">
              <i class="fa-solid fa-arrow-up-from-bracket"></i> &nbsp;
              Choose a profile Picture
            </label>
          </div>
          <br>
          <hr>
          <button type="submit" class="btn" name="member_register" style="margin-top: 10px;">Save</button>
          <button type="submit" class="btn" name="member_register" style="margin-top: 10px;">Canel</button>

      </form>
    </div>
  </div>
</body>
</html>