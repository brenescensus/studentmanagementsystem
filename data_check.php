<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'school_management_system';
$con =   mysqli_connect( $host, $user, $password, $db );
if ( !$con )
die( 'error connecting to db' );
else {
    echo( 'connected successfully' );

}


if ( isset( $_POST[ 'apply' ] ) ) {
    $name = $_POST[ 'name' ];
    $email = $_POST[ 'email' ];
    $phone = $_POST[ 'phone' ];
    $message = $_POST[ 'message' ];
    $sql = ( "INSERT INTO `admission`(name,email,phone,message)VALUES('$name','$email','$phone','$message')" );
    $result = mysqli_query( $con, $sql );
    if ( $result ) {
        $_SESSION[ 'message' ] = "application successfully received";
        header("location:index.php");
    }
    else{
        die( mysqli_error( $con ) );
    }
}
?>