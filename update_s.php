

   <?php 
  
  $id=$_GET['id'];
  if(isset($_POST['updas'])) {
     include ('connect.php');
      $names =$_POST['name'];
      $namek =$_POST['klah'];
      $namep =$_POST['part'];
      $level =$_POST['level'];
      $upd = "update student set  name_s='$names', name_k='$namek',name_p='$namep',level='$level' where id_s=$id";
      $resulet= mysqli_query($con, $upd);
      header ('location:student.php');

  }

?>
<?php 

        include ('connect.php');
        $result= mysqli_query($con,"select * from student where id_s=$id");
      while($row= mysqli_fetch_array($result)){
               $names = $row['name_s'];
               $namek = $row['name_k'];
               $namep = $row['name_p'];
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
    <h4> تعديل جدول  </h4> 
    <?php  echo '<button class="btn1"><a href="main.php?
                    ">الرئيسية</a></button>'
                    ?><br>
        <form method="POST" class="mt-5 login-input" action="">
           <input type="number" name= "id" value='<?php echo $id;?>'><br>
           <b> اسم الطلاب  </b><br>
           <input type='text' name="name" value='<?php echo $names;?>'><br>
                  <b> الكلية</b><br>
           <select name="klah" id=""> 
            <?php  
                  include "connect.php";
              $select =mysqli_query($con,"select * from kali");
              while($row =mysqli_fetch_array($select)){
                    ?>
                    <option value="<?php echo $row['name_k'];?>"><?php echo $row['name_k'];?></option>
                    <?php
               }
              ?>
          </select><?php  echo '<button class="btnk"><a href="madd.php?
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
             </select><?php  echo '<button class="btnk"><a href="part.php?
                    ">اضافة قسم</a></button>'
                    ?><br>

                <!-- المستوى -->
                 <!-- <label > المستوى </label><br>
                 <input type='text'name="level" value='<?php echo $level;?>'><br> -->

                 <label class ="con-sn-2 col form-label"> المستوى </label><br>
<select name="level" id=""> <br>
<option >اول</option>
<option >ثاني</option>
<option >ثالث</option>
<option >رابع</option>
<option >خامس</option>
</select>
<br>
                 <br>
                 <input type="submit" class="btn " name="updas" value ="تعديل">
        </form>
    </div>
</body>
</html>