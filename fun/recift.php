<?php

include ( '../connect.php' );
// error_reporting( 0 );
session_start();
// $_SESSION['conversion_number'] = $conversion_number;
// echo $_SESSION['conversion_number'];
$conversion_number = $_SESSION['conversion_number'];
// $conversion_number = $_SESSION['conversion_number'];
$identity_recifient = $_POST['identity_recifient'];
$cash = $_POST['cash'];
$username_recfient = $_POST['username_recfient'];
// $attachments_identit_sender = $_POST['attachments_identit_sender'];
$county_recifinet = $_POST['county_recifinet'];
$purpose2 = $_POST['purpose2'];
$time_recifient = $_POST['time_recifient'];

$attachments_identit_recifinet = $_FILES['attachments_identit_recifinet']['name'];
$attachments_identit_recifinet = date( 'mdYHis' ).'.'.pathinfo( $attachments_identit_recifinet, PATHINFO_EXTENSION );
$filetmp = $_FILES['attachments_identit_recifinet']['tmp_name'];

$upload_file = '../file/';
move_uploaded_file( $filetmp, $upload_file.$attachments_identit_recifinet );

$sql = "UPDATE move SET identity_recifient = '$identity_recifient',username_recfient = '$username_recfient', county_recifinet = '$county_recifinet', purpose2 = '$purpose2', time_recifient = '$time_recifient', attachments_identit_recifinet = '$attachments_identit_recifinet' ,hwleh='مستلم الحواله',astlm='استلام', cashl='$cash' WHERE conversion_number= $conversion_number";
$result = $conn->query( $sql );

// $sql = "INSERT INTO move (conversion_number ,username_send ,time_send ,name_of_sender ,identity_sender , attachments_identit_sender ,country_send ,purpose ,cash )
// VALUES('$conversion_number' ,'$username_send' ,'$time_send' ,'$name_of_sender' ,'$identity_sender' ,'$attachments_identit_sender' ,'$country_send' ,'$purpose' ,'$cash')";
// $result = $conn->query( $sql );

header( 'location:http://localhost:8888/alsrraf1/pr_add.php' );
?>