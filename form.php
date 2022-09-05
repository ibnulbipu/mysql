<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" type = "text/css" href="style.css">
</head>

<body>
    <div class="container">
        <div class="title">Registration</div>

        <form action="create.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Student Id: </span>
                    <input type="text" name="St_Id">
                </div> 
                <div class="input-box">
                    <span class="details"> Student Name: </span>
                    <input type="text" name="St_Name">
                </div> <br>
                <div class="input-box">
                    <span class="details">Student Fathers Name: </span>
                    <input type="text" name="St_FName">
                </div>
                <div class="input-box">
                    <span class="details">Student Mothers Name: </span>
                    <input type="text" name="St_MName">
                </div>
                <div class="input-box">
                    <span class="details">Student Mobile Number: </span>
                    <input type="number" name="St_Mobile">
                </div>
                <input type="submit">
            </div>
        </form>
    </div>
</body>

</html>

