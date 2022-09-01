<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\bootstrap-5.0.2-dist\css\bootstrap.css">
    <script src='E:\XAMPP FILE\XAMPPP\htdocs\Projects\StudentManagementSystem\css\bootstrap-5.0.2-dist\js\bootstrap.min.js'>
    </script>
</head>
<body>
    <h1>the student page</h1>
</body>
</html>