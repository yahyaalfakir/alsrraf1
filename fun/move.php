<?php
include ( '../connect.php' );
// error_reporting( 0 );
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$sql = "SELECT * FROM user WHERE wusername ='$n1' AND wpassward='$n2'";
$RESULT = $conn->query( $sql );
while( $row = $RESULT->fetch_assoc () ) {
    $count = $RESULT->num_rows;
}
// echo $count;
if ( $count >0 ) {
    session_start();
    $_SESSION['username'] = $n1;
    header( 'location:http://localhost:8888/alsrraf1/fun/testlogin.php' );

} else {
    $dd = 'لا يوجد مستخدم بهذا الاسم اوكلمة السر غير صحيحة';
    session_start();
    $_SESSION['alsrraf'] = $dd;

    header( 'location:http://localhost:8888/alsrraf1/index.php' );
}

?>