<?php include '../php/queries.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        .container{
            display: block;
            width: 35%;
            height: fit-content;
            border: 1px solid black;
            border-radius: 10px;
            margin: auto;
            padding: 20px;
            margin-top: 10%;
        }
        label{
            font-size: 20px;
        }

        input{
            width: 95%;
            padding: 2%;
        }

        button{
            font-size: 20px;
            padding: 5px 10px;
            background: blueviolet;
        }

        button:hover{
            background: grey;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label for="email">Email</label>
            <br>
            <input type="email" name="email">
            <br><br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password">
            <br><br>
            <button type="submit" name="submitAdmin">Submit</button>
        </form>
    </div>
</body>
</html>