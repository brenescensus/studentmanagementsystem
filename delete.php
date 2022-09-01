<?php
session_start();
// error_reporting( 0 );

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'school_management_system';
$con =   mysqli_connect( $host, $user, $password, $db );
if (isset( $_GET[ 'student_id']) ){
    $uid = $_GET['id'];
    $sql = "DELETE FROM user WHERE id ='$uid' ";
    $result = mysqli_query( $con, $sql );
    if ( $result ) {
        $_SESSION[ 'message' ] = 'delete is successful';
        header( 'location:view_student.php' );
    } 
    else {
        mysqli_error( $con );
    }
}

?>