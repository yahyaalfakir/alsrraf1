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
           <th style = "width:10%">الاجمالي</th>
           <th style = "width:10%">المبلغ</th>
           <th style = "width:10%">تاريخ مستلمه</th>
           <th style = "width:10%">حال الحواله</th>
           <th style = "width:10%">دوله مستلمه</th>
           <th style = "width:10%">المبلغ</th>
           <th style = "width:10%">تاريخ ارسال</th>
           <th style = "width:10%">حال الحواله</th>
           <th style = "width:10%">دوله مرسله</th>
           <th style = "width:10%"> رقم الحواله</th>
        </tr>
       <?php 
    
    session_start();
    $conversion_number = $_SESSION['conversion_number'];
    include ( 'connect.php' );
    $sql = "SELECT * FROM move ";
    $RESULT = $conn->query( $sql );
    while( $row = $RESULT->fetch_assoc () ) {
    $count = $RESULT->num_rows;
    $alrased1 += $row['cash'];
    $alrased2 += $row['cashl'];
    $alrased= $alrased1-$alrased2;
    ?>
    <tr>
            <td style = "width:15%"><?php echo $alrased ?></td>
           <!-- <td style = "width:10%"><?php echo $row['identity_sender'] ?></td> -->
           <td style = "width:10%"><?php echo $row['cashl'] ?></td>
           <td style = "width:10%"><?php echo $row['time_recifient'] ?></td>
           <td style = "width:10%"><?php echo $row['astlm'] ?></td>
           <td style = "width:10%"><?php echo $row['county_recifinet'] ?></td>
           <td style = "width:10%"><?php echo $row['cash'] ?></td>
           <td style = "width:10%"><?php echo $row['time_send'] ?></td>
           <td style = "width:10%"><?php echo $row['arsl'] ?></td>
           <td style = "width:10%"><?php echo $row['country_send'] ?></td>
           <td style = "width:10%"><?php echo $row['conversion_number'] ?></td>
    </tr>
    </div>
    <?php 
    }
   ?>
           <td style = "width:10%"></td>
           <td style = "width:10%"></td>
           <td style = "width:10%"></td>
           <td style = "width:10%"></td>
           <td style = "width:10%"></td>
           <td style = "width:10%"></td>
           <td style = "width:10%"></td>
           <td style = "width:10%"></td>
           <td style = "width:10%"><?php echo 'اجمالي الرصيد'?></td>
           <td style = "width:10%"><?php echo $alrased?></td>
   </table>
    </center>
</body>

</html>