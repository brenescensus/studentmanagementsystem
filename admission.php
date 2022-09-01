<?php

// session_start();
// if(!isset($_SESSION['username'])){
//     header("location:login.php"); 
// }
// elseif($_SESSION['usertype'] == 'student'){
//     header("location:login.php"); 

// }
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'school_management_system';
$con =   mysqli_connect( $host, $user, $password, $db );
// if ( !$con )
// die( 'error connecting to db' );
// else {
//     echo( 'connected successfully' );
// }
$sql = "SELECT * FROM  admission";
$result = mysqli_query($con,$sql)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href=" css/adminhome.css">
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
<h1> Applied Admission</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>

    </tr>

    <?php
    while($info=$result->fetch_assoc()){
    ?>


  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td><?php   echo "{$info['name']}" ;?></td>
      <td><?php echo "{$info['email']}" ;  ?></td>
      <td><?php echo "{$info['phone']}" ;  ?></td>
      <td><?php echo "{$info['message']}" ;  ?></td>

    </tr>
    <?php
    }
    ?>
    <!-- <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
</div>

</body>
</html>