     
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    
   
</head>
<body>
    <?php
    session_start();
    if (  $_SESSION['tchfer1'] !==  $_SESSION['tchfer2']){
echo  ("هيكر");
exit;
    }else{
   
    $_SESSION['tchfer1'] = rand( 1000000000, 9999999999 );
    $_SESSION['tchfer2'] = rand( 1000000000, 9999999999 );
   
}
    ?>
<center>
    
    <div>
   <a href="add.php"><button>تسجيل حوالة جديدة</button></a><br>
   <a href="search.php"><button>البحث عن حوالة</button></a><br>
   <a href="rt_send.php"><button>الصادر والوارد</button></a><br>
   <a href="rt_mqassh.php"><button>كشف حساب</button></a><br>
   <a href="index.php"><button>تسجيل خروج</button></a><br>

       </div>
</center>
</body>
</html>