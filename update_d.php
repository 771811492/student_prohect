




   <?php 
  
  $id=$_GET['id'];
  if(isset($_POST['updated'])) {
     include ('connect.php');
      $name_s =$_POST['student'];
      $name_k =$_POST['kaly'];
      $name_p =$_POST['part'];
      $name_m =$_POST['mada'];
      $name_d =$_POST['degaree'];
      $level =$_POST['level'];
      $upd = "update dagaree set  name_s='$name_s', name_k='$name_k',name_p='$name_p',name_m='$name_m',name_d='$name_d',level='$level' where id_d=$id";
      $resulet= mysqli_query($con, $upd);
      header ('location:dagaree.php');

  }

?>
<?php 

        include ('connect.php');
        $result= mysqli_query($con,"select * from dagaree where id_d=$id");
      while($row= mysqli_fetch_array($result)){
               $name_s = $row['name_s'];
               $name_k = $row['name_k'];
               $name_p = $row['name_p'];
               $name_m = $row['name_m'];
               $name_d = $row['name_d'];
               $level = $row['level'];
         }
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylestudent.css">
</head>
<body>
   

<div class="student-left">
<h4> تعديل جدول الدرجات </h4> 
        <form action="" method="POST">
        
<?php  echo '<button class="btnk"><a href="main.php?
                    ">الرئيسية</a></button>'
                    ?><br>
            <!-- اسم الطال -->
  
<label class ="con-sn-2 col form-label"> اسم الطالب</label><br>
<select name="student" id="" class="form-select"> 
<?php  
 include "connect.php";
$select =mysqli_query($con,"select * from student");
while($row =mysqli_fetch_array($select)){
    ?>
<option value="<?php echo $row['name_s'];?>"><?php echo $row['name_s'];?></option>
    <?php
}
?>
</select> <?php  echo '<button class="btnk"><a href="student.php?
                    ">اضافة طالب</a></button>'
                    ?><br>
  
<!-- اسم الكلية -->
<label class ="con-sn-2 col form-label"> اسم الكلية</label><br>
<select name="kaly" id="" class="form-select"> 
<?php  
 include "connect.php";
$select =mysqli_query($con,"select * from kali");
while($row =mysqli_fetch_array($select)){
    ?>
<option value="<?php echo $row['name_k'];?>"><?php echo $row['name_k'];?></option>
    <?php
}
?>
</select> <?php  echo '<button class="btnk"><a href="madd.php?
                    ">اضافة كلية</a></button>'
                    ?><br>
<!-- اسم الفسم -->
<label class ="con-sn-2 col form-label"> :اسم القسم</label><br>
<select name="part" id=""> <br>
<?php  
 include "connect.php";
$select =mysqli_query($con,"select * from part");

while($row =mysqli_fetch_array($select)){
    ?>
<option value="<?php echo $row['name_p'];?>"><?php echo $row['name_p'];?></option>
    <?php
}
?>
</select>
<?php  echo '<button class="btnk"><a href="part.php?
                    ">اضافة قسم</a></button>'
                    ?><br>

                    
<label class ="con-sn-2 col form-label"> اسم المادة</label><br>
<select name="mada" id="" class="form-select"> 
<?php  
 include "connect.php";
$select =mysqli_query($con,"select * from materal");
while($row =mysqli_fetch_array($select)){
    ?>
<option value="<?php echo $row['name_b'];?>"><?php echo $row['name_b'];?></option>
    <?php
}
?>
</select> <?php  echo '<button class="btnk"><a href="boock.php?
                    ">اضافة مادة</a></button>'
                    ?><br>
                    <!-- الدرجة -->
                    <label class ="con-sn-2 col form-label"> الدرجة </label><br>
<input type='number'name="degaree" value='<?php echo $name_d;?>'><br>


<!-- المستوى -->
<!-- <label class ="con-sn-2 col form-label"> المستوى </label><br>
<input type='text'name="level" value='<?php echo $level;?>'><br>
<br> -->

<label class ="con-sn-2 col form-label"> المستوى </label><br>
<select name="level" id=""> <br>

<option >اول</option>
<option >ثاني</option>
<option >ثالث</option>
<option >رابع</option>
<option >خامس</option>
</select>
<br>

<input type="submit" class="btn " name="updated" value ="تعديل">
        </form>
    </div>
</body>
</html>