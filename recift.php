     
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>تسليم التحويل</title>
     <style>
         input{
             text-align: center;
         }
     </style>
</head>
<body>
<center>
    <?php 
    // $n1 = $_POST['n1'];
    // echo $n1;
    session_start();
    // $_SESSION['conversion_number'] = $n1;
    $conversion_number =$_POST['n1'] ;
    include ( 'connect.php' );
    $sql = "SELECT * FROM move WHERE conversion_number = $conversion_number ";
    $RESULT = $conn->query( $sql );
    while( $row = $RESULT->fetch_assoc () ) {
    $count = $RESULT->num_rows;
  
    $_SESSION['conversion_number'] = $row['conversion_number'];
    ?>
    <div>
    <label>رقم الحوالة</label><br>
    <label>  <?php echo $row['conversion_number'] ?></label><br>
    <label>حالة الحواله</label><br>
    <label>  <?php echo $row['hwleh'] ?></label><br>
    <label>اسم مستخدم الارسال</label><br>
    <label>  <?php echo $row['username_send'] ?></label><br>
    <label>وقت الارسال</label><br>
    <label>  <?php echo $row['time_send'] ?></label><br>
    <label>اسم المرسل</label><br>
    <label>  <?php echo $row['name_of_sender'] ?></label><br>
    <label>رقم هوية المرسل</label><br>
    <label>  <?php echo $row['identity_sender'] ?></label><br>
    <!-- <label>صورة هوية المرسل</label><br>
    <label>  <?php echo $row['attachments_identit_sender'] ?></label><br> -->
    <label>دولة الارسال</label><br>
    <label>  <?php echo $row['country_send'] ?></label><br>
    <label>الغرض من التحويل</label><br>
    <label>  <?php echo $row['purpose'] ?></label><br>

    <label>المبلغ</label><br>
    <label>  <?php echo $row['cash'] ?></label><br>

<form action="fun/recift.php" method="post" enctype="multipart/form-data">
<input type="text" name="cash"><br>
    <label>رقم هوية المستلم</label><br>
    <input type="text" name="identity_recifient"><br>
     <label>صورة هوية المستلم</label><br>
    <input type="file" name="attachments_identit_recifinet"><br>
    <label>دولة الاستلام</label><br>
    <input type="text" name="county_recifinet"><br>
     <label>ملاحظات الاستلام</label><br>
    <input type="text" name="purpose2"><br>
   
    <input type="text" name="username_recfient" value="
            <?php
            // session_start();
           $username = $_SESSION['username'] ;
           echo $username;
            ?>
            "><br>
            <input type="text" name="time_recifient" value="<?php echo(new \DateTime())->format('Y-m-d-H:i:s'); ?>"><br>
            <input type="submit" value="ارسال">
</FROM>
    </div>
    </center>
    <?php 
    }
   ?>
    
</body>
</html>