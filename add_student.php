<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'school_management_system';
$con =   mysqli_connect( $host, $user, $password, $db );
if ( isset( $_POST[ 'add_student' ] ) ) {
    $username = $_POST[ 'username' ];
    $email = $_POST[ 'email' ];
    $phone = $_POST[ 'phone' ];
    $password = $_POST[ 'password' ];
    $usertype = 'student';
    $check  =   "SELECT * FROM user WHERE username ='$username '";
    $check_user = mysqli_query( $con, $check );
    $row_count = mysqli_num_rows( $check_user );
    if ( $row_count>0 ) {
        echo' username exists';
    } 
    else
     {
        $sql = ( "INSERT INTO `user`(username,phone,email,usertype,password)VALUES('$username','$phone','$email','$usertype','$password')" );
        $result = mysqli_query( $con, $sql );
        if ( $result ) {
            $_SESSION[ 'message' ] = 'application successfully received';
            header( 'location:index.php' );
        } 
        else
         {
            die( mysqli_error( $con ) );
        }
    }
}

?>
<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Document</title>
<link rel = 'stylesheet' href = 'css/style.css'>
<link rel = 'stylesheet' href = ' css/adminhome.css'>
<link rel = 'stylesheet' href = 'css\bootstrap-5.0.2-dist\css\bootstrap.css'>
<script
src = 'E:\XAMPP FILE\XAMPPP\htdocs\Projects\StudentManagementSystem\css\bootstrap-5.0.2-dist\js\bootstrap.min.js'>
</script>
<!-- <link rel = 'stylesheet' href = 'https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css'
integrity = 'sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp' crossorigin = 'anonymous'> -->
</head>

<body>
<?php
include 'admin_sidebar.php';
?>
<div class = 'content'>
<h1> Add Student</h1>
<div>
<form action = '#' method = 'POST' class = 'login_form'>
<div class=>
<label class = 'label_deg' for = 'username'>Username</label>
<input class = type = 'text' name = 'username'>
</div>
<div class=>
<label class = 'label_deg' for = 'email'>Email</label>
<input class = type = 'email' name = 'email'>
</div>

<div class=>
<label class = 'label_deg' for = 'phone'>Phone</label>
<input class = type = 'number' name = 'phone'>
</div>

<div>
<label class = 'label_deg' for = 'password'>Password</label>
<input class = type = 'password' name = 'password'>
</div>
<div class=>
<input class = 'btn btn-primary' type = 'submit' name = 'add_student' value = 'Add Student'>
</div>
</form>
</div>
</div>

</body>

</html>