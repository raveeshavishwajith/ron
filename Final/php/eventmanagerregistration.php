<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Event Manager Registration Form</title>
  <link rel="icon" type="image/x-icon" href="../src/favicon/favicon1.png">
  <link rel="stylesheet" href="../style/style.css">
</head>

<body>
  <div class="background" style="filter: blur(15px)"></div>
  <div class="managerreg">
    <div class="form">
      <form action="" method="POST">

        <h1 style="text-align: center">Event Manager Registration Form</h1>
        <br>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="firstname">First Name:</label>
        <input type="text" placeholder="Enter First Name" name="firstname" id="firstname" required>

        <label for="lastname">Last Name:</label>
        <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required>

        <label for="gender">Gender:</label><br>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male" class="normal">Male</label>
        <br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female" class="normal">Female</label>
        <br><br>

        <label for="email">Email</label>
        <input type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="psw">Password</label>
        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

        <label for="psw-repeat">Repeat Password</label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

        <label for="membership">Organization you are representing:</label><br>
        <input type="radio" name="society" id="IEEE" value="IEEE">
        <label for="IEEE" class="normal">IEEE</label>
        <br>
        <input type="radio" name="society" id="CSSL" value="CSSL">
        <label for="CSSL" class="normal">CSSL</label>
        <br>
        <input type="radio" name="society" id="Garvel" value="Garvel">
        <label for="Gavel" class="normal">Gavel</label>
        <br>
        <input type="radio" name="society" id="CompSoc" value="CompSoc">
        <label for="CompSoc" class="normal">CompSoc</label>
        <br><br>

        <label for="upload">Upload approval letter:</label><br>
        <label for="myfile">Select a file:</label>
        <input type="file" id="myfile" name="myfile"><br>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

        <button type="submit" class="registerbtn">Register</button>

      </form>
    </div>
  </div>
</body>

</html>