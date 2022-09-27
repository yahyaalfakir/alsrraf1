     
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>صفحة الاضافة</title>
     
</head>
<style>
    input{
        text-align: center;
    }
</style>
<body>
<center>
    <div>
    <form action="fun/add.php" method="post" enctype="multipart/form-data">
            <label>رقم التحول</label><br>
            <input type="text" name="conversion_number" value=" <?php echo (rand(1000000000,9999999999))?> "><br>
            <label>اسم مستخدم الارسال</label><br>
            <input type="text" name="username_send" value="
            <?php
            session_start();
           $username = $_SESSION['username'] ;
            echo $username;
            ?>
            "><br>
            <label>وقت الارسال</label><br>
            <input type="text" name="time_send" value="<?php echo(new \DateTime())->format('Y-m-d-H:i:s'); ?>"><br>
            <label>اسم المرسل</label><br>
            <input type="text" name="name_of_sender"><br>
            <label>رقم هوية المرسل</label><br>
            <input type="text" name="identity_sender"><br>
            <label>صورة هوية المرسل</label><br>
            <input type="file" name="attachments_identit_sender"><br>
            <label>دولة الارسال</label><br>
            <input type="text" name="country_send"><br>
            <label>الغرض من التحويل</label><br>
            <input type="text" name="purpose"><br>
            <label>المبلغ</label><br>
            <input type="text" name="cash"><br>
            <input type="submit">
    </form>
    </div>
    </center>
</body>
</html>