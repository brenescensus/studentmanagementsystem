<?php
error_reporting( 0 );
session_start();

$host = '127.0.0.1';
$user = 'root';
$db = 'school_management_system';
$password = '';
$con = new mysqli( $host, $user, $password, $db );
if ( !$con ) {
    die ( mysqli_error( $con ) );

}
/*
else {
    echo 'login success';
}
*/
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
    $name = $_POST[ 'username' ];
    $password = $_POST[ 'password' ];
    $sql = "select * from user where username ='".$name."' AND password  = '".$password."' ";

    $result = mysqli_query( $con, $sql );
    $row  = mysqli_fetch_array( $result );

    if ( $row[ 'usertype' ] == 'student' ) {
        $_SESSION[ 'USERNAME' ] = $name;
        header( "Location:studenthome.php" );
    }
     elseif ( $row[ 'usertype' ] == 'admin' ) {
        $_SESSION[ 'USERNAME' ] = $name;
        header( "Location:adminhome.php" );
    }
     else {
        $message = 'password and username does not match';
        $_SESSION[ 'loginMessage' ] = $message;
        header( 'location:login.php' );

    }

}

?>