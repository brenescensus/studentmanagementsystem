<?php
session_start();
error_reporting( 0 );
// session_start();
// if ( !isset( $_SESSION[ 'username' ] ) ) {
//     header( 'location:login.php' );

// }
// elseif ( $_SESSION[ 'usertype' ] == 'student' ) {
//     header( 'location:login.php' );

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
$sql = "SELECT * FROM  `user` WHERE usertype = 'student'";
$result = mysqli_query( $con, $sql )
?>

<!DOCTYPE html>
<html lang = 'en'>

<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<title>Document</title>
<link rel = 'stylesheet' href = 'admin.css'>
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
<div class ='content'>
<h1> ALL STUDENTS</h1>
<?php
if ( $_SESSION[ 'message' ] ) {
    echo $_SESSION[ 'message' ];
}
unset( $_SESSION[ 'message' ] );
?>
<table class = 'table'>
<thead>
<tr>
<th scope = 'col'>#</th>
<th scope = 'col'>Username</th>
<th scope = 'col'>Phone</th>
<th scope = 'col'>Email</th>
<th scope = 'col'>Delete</th>
<th scope = 'col'>Update</th>


</tr>

<?php
while( $info = $result->fetch_assoc() ) {
    ?>

    </thead>
    <tbody class = 'table-group-divider'>
    <tr>
    <th scope = 'row'></th>

    <td><?php   echo "{$info['username']}" ;
    ?></td>
    <td><?php echo "{$info['phone']}" ;
    ?></td>
    <td><?php echo "{$info['email']}" ;
    ?></td>
    <td><?php
    echo "<a onClick=\"javascript:return confirm( 'are you sure?');\"
                     href='delete.php?id={$info['id']}
        '>DELETE</a>";

        ?>
        </td>
        <td><?php echo "<a  class= 'btn btn-primary' href='update_student.php?id={$info[ 'id' ]}' >Update</a>";
    ?></td>
        </tr>
        <?php
    }
    ?>
    >

    </tbody>
    </table>
    </div>

    </body>

    </html>