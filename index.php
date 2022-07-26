


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SSLC RESULT</title>
</head>

<body>
    <div class="container">
        <h2>SSLC EXAMINATION RESULT 2021-22</h2>
        <h4>CHECK YOUR RESULT FROM THIS FORM </h4>
        <hr>
        <form action="function.php" method="POST">
            <label for="regno">Register no :</label>
            <input type="phone" name="regno" id="regno" maxlength='6' placeholder="Register number" required>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" placeholder="Date of Birth" required>
            <div class="btnbox">
            <input type="submit" name="get" id="get" value="Get Result" class="btn">
            <input type="reset" name="cancel" id="cancel" value="Cancel" class="btn">
        </div>
        </form>
    </div>
</body>

</html>