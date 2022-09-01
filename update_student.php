<?php

session_start();
// if(!isset($_SESSION['username'])){
//      header("location:login.php"); }


     $host = 'localhost';
     $user = 'root';
     $password = '';
     $db = 'school_management_system';
     $con =   mysqli_connect( $host, $user, $password, $db );
     $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id ='$id' "; 
    $result = mysqli_query( $con, $sql );
    $info  =$result->fetch_assoc();

    if ( isset( $_POST[ 'update' ] ) ) {
        $username = $_POST[ 'username' ];
        $email = $_POST[ 'email' ];
        $phone = $_POST[ 'phone' ];
        $password = $_POST[ 'password' ];
        $usertype = 'student';
        $query= "UPDATE user SET username= '$username',email= '$email',phone= '$phone',password= '$password' WHERE id = '$id'";
        $result2 = mysqli_query( $con, $query );
        if($result2){
            header( 'location:view_student.php' );

        }
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update student pae</title>
    <link rel = 'stylesheet' href = 'css/style.css'>
<link rel = 'stylesheet' href = ' css/adminhome.css'>
    <link rel="stylesheet" href="css\bootstrap-5.0.2-dist\css\bootstrap.css">
    <script src='E:\XAMPP FILE\XAMPPP\htdocs\Projects\StudentManagementSystem\css\bootstrap-5.0.2-dist\js\bootstrap.min.js'>
    </script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" 
integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
</head>
<body>
<?php
include 'admin_sidebar.php';
?>
<div class="content" >
<h1>Update Student</h1>
<div>
    
<form action = '#' method = 'POST' class = 'login_form'>
<div class=>
<label class = 'label_deg' for = 'username'>Username</label>
<input class = type = 'text' name = 'username'  value ="<?php echo"{$info['username']}";?>">
</div>
<div class=>
<label class = 'label_deg' for = 'email'>Email</label>
<input class = type = 'email' name = 'email' value ="<?php echo"{$info['email']}";?>">
</div>

<div class=>
<label class = 'label_deg' for = 'phone'>Phone</label>
<input class = type = 'number' name = 'phone' value ="<?php echo"{$info['phone']}";?>">
</div>

<div>
<label class = 'label_deg' for = 'password'>Password</label>
<input class = type ='password' name = 'password' value ="<?php echo"{$info['Password']}";?>">
</div>
<div class=>
<input class = 'btn btn-primary' type = 'submit' name = 'update_student' value = 'Update Student'>
</div>
</form>
</div>
</div>

</body>
</html>