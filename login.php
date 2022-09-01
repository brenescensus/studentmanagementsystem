<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css\bootstrap-5.0.2-dist\css\bootstrap.css">
    <script src='E:\XAMPP FILE\XAMPPP\htdocs\Projects\StudentManagementSystem\css\bootstrap-5.0.2-dist\js\bootstrap.min.js'>
    </script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" 
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" 
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --> -->
</head>
<body  background  ="school4.jpg">
    <center>
        <h2  class = "login_deg"> Login Form</h2>
        <h4>
        <?php
        error_reporting(0);
        session_start();
        // session_destroy();
        echo $_SESSION['loginMessage'];
        ?>
        </h4>
        
        <div>
            <form action="login_check.php" method = "POST" class = "login_form">
                <div class =>
                    <label  class = "label_deg" for="username" >Username</label>
                    <input   class = type="text" name="username">
                </div>
                <div>
                <label  class = "label_deg" for="password" >Password</label>
                    <input   class = type="password" name="password">
                </div>
                <div class =>
                    <input class = "btn btn-primary" type="submit"  name value="Login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>