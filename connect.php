<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'alsrraf1';
$conn = new mysqli( $servername, $username, $password, $dbname );
$conn->set_charset( 'utf8' );
if ( $conn->connect_errno ) {
    die( 'خطا' );
}

?>