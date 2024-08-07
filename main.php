
<?php 
include 'connect.php';
if(isset($_POST['student.php']))
{
  header ('location:student.php');

}else if(isset($_POST['madd.php'])){
    header ('location:madd.php');

}else if(isset($_POST['part.php'])){
    header ('location:part.php');

}else if(isset($_POST['boock.php'])){
    header ('location:boock.php');
}

else if(isset($_POST['dagaree.php'])){
    header ('location:dagaree.php');
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style_main.css">
</head>
<body>
<?php  echo '<button class="btny"><a href="log.php?
                    ">تسجيل خروج</a></button>'
?>
     <div class="main">
         <form action="" method="GET">
            <h4> الصفحة الرئيسية </h4>
      <?php  echo '<button class="btn1"><a href="madd.php?
                    ">الكليات</a></button>'
                    ?>
        <br>
<?php  echo '<button class="btn1"><a href="part.php?
                    ">الاقسام</a></button>'
                    ?>

<br>
<?php  echo '<button class="btn1"><a href="student.php?
                    ">الطلاب</a></button>'
                    ?>
<br>
<?php  echo '<button class="btn1"><a href="boock.php?
                    ">المواد </a></button>'
                    ?>

<br>
<?php  echo '<button class="btn1"><a href="dagaree.php?
                    ">الدرجات</a></button>'
             
             ?>
              <p id="p"> <a href="hol.php?"> المزيد</a> </p>

         </form>
     </div>
 
</body>
</html>