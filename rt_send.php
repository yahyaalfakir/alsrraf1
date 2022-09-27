<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>طباعة التحويل</title>
     
</head>
<style>
    
    table{
        border:2px solid black;      
    }
 td {
    border:1px solid blue;
    text-align: center;
    background-color: whitesmoke;
}
 th {
    color: green;
    height: 33px;
    border:1.4px solid hotpink;
  text-align: center;
  background-color: gainsboro;
}
</style>
<body>
<center>
   
    <div>
    <h2>الحوالات الصادرة</h2><br>
   <table style = "width:80%">
       <tr>
           <th style = "width:15%">رقم الحوالة</th>
           <th style = "width:15%">رقم هوية المرسل</th>
           <th style = "width:15%">اسم المرسل</th>
           <th style = "width:15%">رقم هوية المستلم</th>
           <th style = "width:15%">المبلغ</th>
           <th style = "width:15%">الرصيد</th>
       </tr>
       
       <?php 
    
    session_start();
    $conversion_number = $_SESSION['conversion_number'];
    include ( 'connect.php' );
    $sql = "SELECT * FROM move ";
    $RESULT = $conn->query( $sql );
    while( $row = $RESULT->fetch_assoc () ) {
    $count = $RESULT->num_rows;
    $alrased += + $row['cash'];

    ?>
    <tr>
           <td style = "width:15%"><?php echo $row['conversion_number'] ?></td>
           <td style = "width:15%"><?php echo $row['identity_sender'] ?></td>
           <td style = "width:15%"><?php echo $row['name_of_sender'] ?></td>
           <td style = "width:15%"><?php echo $row['identity_recifient'] ?></td>
           <td style = "width:15%"><?php echo $row['cash'] ?></td>
           <td style = "width:15%"><?php echo $alrased ?></td>
    </tr>
    </div>
    <?php 
    }
   ?>
           <td style = "width:15%"></td>
           <td style = "width:15%"></td>
           <td style = "width:15%"></td>
           <td style = "width:15%"></td>
           <td style = "width:15%"><?php echo 'اجمالي الرصيد'?></td>
           <td style = "width:15%"><?php echo $alrased ?></td>
   </table>
    </center>
</body>

</html>