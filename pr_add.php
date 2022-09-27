     
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>طباعة التحويل</title>
     
</head>
<body>
<center>
    <?php 
    include ( 'connect.php' );
    session_start();
    $conversion_number = $_SESSION['conversion_number'];
     $sql = "SELECT * FROM move WHERE conversion_number ='$conversion_number' ";
    $RESULT = $conn->query( $sql );
    while( $row = $RESULT->fetch_assoc () ) {
    $count = $RESULT->num_rows;

// echo $count;
    ?>
    <div>
    <label>رقم الحوالة</label><br>
    <label>  <?php echo $row['conversion_number'] ?></label><br>
    <label>اسم مستخدم الارسال</label><br>
    <label>  <?php echo $row['username_send'] ?></label><br>
    <label>وقت الارسال</label><br>
    <label>  <?php echo $row['time_send'] ?></label><br> 
    <label>حالة الحواله</label><br>
    <label>  <?php echo $row['hwleh'] ?></label><br>
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
    <label>رقم هوية المستلم</label><br>
    <label>  <?php echo $row['identity_recifient'] ?></label><br>
    <label>دولة الاستلام</label><br>
    <label>  <?php echo $row['county_recifinet'] ?></label><br>
    <label>ملاحظات الاستلام</label><br>
    <label>  <?php echo $row['purpose2'] ?></label><br>
    <label>اسم مسلم الحوالة</label><br>
    <label>  <?php echo $row['username_recfient'] ?></label><br>
    <label>وقت وتاريخ تسليم الحوالة</label><br>
    <label>  <?php echo $row['time_recifient'] ?></label><br>
    
    </div>
    <?php 
    }
   ?>
   <button onclick="prints()">طباعة</button>
    </center>
</body>
<script>
    function prints(){
        window. print();
    }
</script>
</html>