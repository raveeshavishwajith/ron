<?php require_once '../php/queries.php' ?>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="../src/favicon/favicon1.png">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
        .msg {
            padding: 20px;
           
        }

        @media screen and (max-width: 1150px) {
            .msg {
                padding: 10px;
                height: auto;
                /* Reduce padding for smaller screens */
            }
        }

        /* Adjust 'register-as' for smaller screens */
        .register-as {
            display: flex;
            flex-direction: column;
            /* Stack buttons vertically */
            align-items: center;
            /* Center buttons horizontally */
        }

        @media screen and (max-width: 1150px) {
            .register-as {
                margin-top: 20px;
                width: auto;
                /* Add some spacing between 'msg' and 'register-as' for smaller screens */
            }

            .register {
                padding: 10px;
                /* Reduce padding for smaller screens */
                width: auto;
                /* Allow content to adjust to screen size */
            }
        }

        /* Make buttons responsive */
        .register button {
            padding: 10px 20px;
            /* Add padding to buttons */
            font-size: 16px;
            /* Set a base font size */
        }

        @media screen and (max-width: 768px) {
            .register-as {
                display: block; /* Show 'register-as' for smaller screens */
                text-align: center;
                width: auto; /* Center-align 'register-as' content */
            }
        }
         
        @media screen and (max-width: 768px) {
            .register button {
                padding: 8px 16px; /* Reduce padding for smaller screens */
                font-size: 14px; /* Reduce font size for smaller screens */
            }
        }
        @media screen and (max-width: 910px) {
            .msg {
                display: none;/* Reduce font size for smaller screens */
            }
        }
        
    </style>
</head>

<body>
    <div class="background" id="blur">
        <div class="msg">
            <h1>
                <pre>
                                " those who can do, do.
                                  those who can do more, <span> VOLUNTEER! </span> "
                                </pre>
            </h1>
        </div>
        <div class="register">
            <div class="register-as">
                <h3>Register As</h3>
            </div>
            <div class="member-manager">
                <div class="member">
                    <a href="userregistration.php"><button>As Member</button></a>
                </div>
                <div class="manager">
                    <a href="eventmanagerregistration.php"><button>As Event Manager</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>