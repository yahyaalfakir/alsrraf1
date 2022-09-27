<?php
include ( '../connect.php' );
$n1 = $_POST['n1'];
$sql = "SELECT * FROM move WHERE conversion_number = $n1";
$RESULT = $conn->query( $sql );
while( $row = $RESULT->fetch_assoc () ) {
    $count = $RESULT->num_rows;
    $hwleh = $row['hwleh'];
    $date_time = $row['time_recifient'];
}

if ( $hwleh == 'false' ) {
    session_start();
    $_SESSION['conversion_number']  = $_POST['n1'] ;
    header( 'location:http://localhost:8888/alsrraf1/recift.php' );
} else {
    ?>
    <center>

    <?php
    echo  ( ' قد تم تسليم الحوالة في تاريخ  : <br>' ) ;
    echo  $date_time ;
    ?>

    </center>
    <?php
}

?>