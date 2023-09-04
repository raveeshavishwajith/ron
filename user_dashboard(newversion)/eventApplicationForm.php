<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Event Application Form</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
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
        <div class="wrapper">
            <form action="" method="post">
                <div class="form-box login">
                    <h1>Volunteer Application Form</h1>
                    <p>Please fill in this form to apply</p>
                    <hr>
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
                        <input type="number" name="contact_number" id="contact_number" required>
                        <label>Contact Number</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="memid" id="memid" required>
                        <label>Membership Id:</label>
                    </div>
                    <label>Prefered Role as Volunteer:</label>
                    <div class="input-box-select">
                        <label class="checkbox">
                            <input type="checkbox" name="membership[]" id="role1" value="Computer Technician">
                            Computer Technician
                            <span></span>
                        </label>
                        <br>
                        <label class="checkbox">
                            <input type="checkbox" name="membership[]" id="role2" value="role2">
                            Designer
                            <span></span>
                        </label>
                        <br>
                        <label class="checkbox">
                            <input type="checkbox" name="membership[]" id="role3" value="role3">
                            Content Writer
                            <span></span>
                        </label>
                        <br>
                        <label class="checkbox">
                            <input type="checkbox" name="membership[]" id="Other" value="Other">
                            Other
                            <span></span>
                        </label>
                    </div>
                    <div class="input-pic">
                        <input type="file" name="flyer" id="flyer" placeholder="Upload evnet flyer" required>
                        <label for="flyer">
                            <i class="fa-solid fa-arrow-up-from-bracket"></i> &nbsp;
                            Choose a file
                        </label>
                    </div>
                    <br>

                    <hr>
                    <div class="input-box-select">
                        <label class="checkbox">
                            <input type="checkbox" required /> By filling this form, I agree to work as a volunteer.
                            <span></span>
                        </label>
                    </div>

                    <button type="submit" class="btn" name="register" style="margin-top: 10px;">Apply</button>

            </form>
        </div>
    </div>
</body>

</html>