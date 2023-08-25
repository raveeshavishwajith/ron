<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1> Volunteer Registration form</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="fullname"><b>Fullname:</b></label>
    <input type="text" placeholder="Enter Full Name" name="fullname" id="fullname" required>

    <label for="username"><b>Username:</b></label>
    <input type="text" placeholder="Enter user Name" name="username" id="username" required>

    <label for="username"><b>Gender:</b></label><br>
    <label for="male">Male</label>
    <input type="radio" name="gender" id="male" value="male" checked>
    <label for="female">Female</label>
    <input type="radio" name="gender" id="female" value="female"><br><br>


    <label for="email"><b>Email:</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="dob"><b>DOB:</b></label>
    <input type="date"   required><br><br>

    <label for="yearofstudy"><b>Year Of Study :</b></label>
    <input type="text" placeholder="Enter year of study" name="yearofstudy" id="yearofstudy" required>

    <label for="course"><b>Course:</b></label>
    <input type="text" placeholder="Enter course" name="course" id="course" required>

    <label for="contactnumber"><b>ContactNumber:</b></label>
    <input type="text" placeholder="Enter contactnumber" name="contactnumber" id="contactnumber" required>

    <label for="course"><b>Course:</b></label>
    <input type="text" placeholder="Enter course" name="course" id="course" required>


    <label for="membership"><b>Membership:</b></label><br><br>
    <label for="IEEE">IEEE</label>
    <input type="checkbox" name="society" id="IEEE" value="IEEE" checked>
    <label for="CSSL">CSSL</label>
    <input type="checkbox" name="society" id="CSSL" value="CSSL">
    <label for="Garvel">Garvel</label>
    <input type="checkbox" name="society" id="Garvel" value="Garvel" checked>
    <label for="CompSoc">CompSoc</label>
    <input type="checkbox" name="favcolor" id="CompSoc" value="CompSoc" checked><br><br>





    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password:</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
