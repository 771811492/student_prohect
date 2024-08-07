<?php 

$id=$_GET['id'];
if(isset($_POST['add'])) {
   include ('connect.php');
    $name_b =$_POST['name'];
    $name_k =$_POST['kaly'];
    $name_p =$_POST['part'];
  
    $upd = "update materal set  name_b='$name_b', name_k='$name_k',name_p='$name_p' where id_b=$id";
    $resulet= mysqli_query($con, $upd);
    header ('location:boock.php');

}

?>

<?php 

        include ('connect.php');
        $result= mysqli_query($con,"select * from materal where id_b=$id");
      while($row= mysqli_fetch_array($result)){
               $name_b = $row['name_b'];
               $name_k = $row['name_k'];
               $name_p = $row['name_p'];
           
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
<h4> تعديل جدول الكتب </h4> 
        <form action="" method="POST">
        
<?php  echo '<button class="btn1"><a href="main.php?
                    ">الرئيسية</a></button>'
                    ?><br>
           
        <label> اسم الكتاب </label>   <br>
<input type='text'name="name" value='<?php echo $name_b;?>'><br>
  
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


<br>


<input type="submit" class="btn " name="add" value ="اضافة">
        </form>
    </div> 
</body>
</html>