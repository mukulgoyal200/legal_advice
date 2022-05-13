<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="index.css">
    <title> Registration! </title>
</head>

<body>

    <div class="haed1">
        <p class="title"> Court Marriage </p>

    </div>
    <div class="dmct">
        <p class="dmct">Instant Same Day Court Marriage <br> Contact No. :- &nbsp 9213343315 , 9716347236 </p>
    </div>

    <div class="login" class="ou"> Registration for Legal Works</div>


    <div class="form">

        <form action="signup.php" method="post">
            <label for="name" class="ou">Username :</label> <br>
            <input type="text" class="in" name="name" required><br>
            <label for="gender" class="ou">Gender :</label> <br>
            <div class="radio"> <input type="radio" name="f1" class="dot" value="male"> &nbsp; MALE
                <input type="radio" name="f1" class="dot" value="female"> &nbsp; FEMALE <br>
            </div>
            <label for="mail" class="ou"> Email-id : </label><br>
            <input type="email" class="in" name=" email" required> <br>
            <label for="password" class="ou"> Password : </label> <br>
            <input type="password" class="in" name="password" required> <br>
            <label for="password" class="ou"> Confirm Password : </label> <br>
            <input type="password" class="in" name="confirm_password" required> <br>
            <input type="submit" value="Submit" class="btn" name="submit">
            <input type="reset" value="Clear" class="btn">


        </form>

        <p class="reg">If You have Already Account Then! Login Now</p>

    </div>
</body>

</html>