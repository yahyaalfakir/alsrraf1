<?php

include ( '../connect.php' );
// error_reporting( 0 );
$conversion_number = $_POST['conversion_number'];
$username_send = $_POST['username_send'];
$time_send = $_POST['time_send'];
$name_of_sender = $_POST['name_of_sender'];
$identity_sender = $_POST['identity_sender'];
// $attachments_identit_sender = $_POST['attachments_identit_sender'];
$country_send = $_POST['country_send'];
$purpose = $_POST['purpose'];
$cash = $_POST['cash'];

$attachments_identit_sender = $_FILES['attachments_identit_sender']['name'];
$attachments_identit_sender = date( 'mdYHis' ).'.'.pathinfo( $attachments_identit_sender, PATHINFO_EXTENSION );
$filetmp = $_FILES['attachments_identit_sender']['tmp_name'];
$upload_file = '../file/';
move_uploaded_file( $filetmp, $upload_file.$attachments_identit_sender );

$sql = "INSERT INTO move (conversion_number ,username_send ,time_send ,name_of_sender ,identity_sender , attachments_identit_sender ,country_send ,purpose ,cash,hwleh,arsl,cashl )
VALUES('$conversion_number' ,'$username_send' ,'$time_send' ,'$name_of_sender' ,'$identity_sender' ,'$attachments_identit_sender' ,'$country_send' ,'$purpose' ,'$cash',' غير مستلم الحواله','ارسال','0')";
$result = $conn->query( $sql );

session_start();
$_SESSION['conversion_number'] = $conversion_number;
header( 'location:http://localhost:8888/alsrraf1/pr_add.php' );
?>