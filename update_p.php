

<?php 
  
  $id=$_GET['id'];
  if(isset($_POST['updat'])) {
  include ('connect.php');
  $name = $_POST['name'];
  $kali = $_POST['klah'];
  $upd = "update part set  name_p='$name', name_k='$kali' where id_p=$id";
  $resulet= mysqli_query($con, $upd);
  header('location: part.php');

  if($ins){
    $met ="your add sucssefuly";
}
else{
    die("error".mysqli_error($con));
}
mysqli_close($con);


}


?>
<?php 

 include "connect.php";
$result= mysqli_query($con,"select * from part where id_p=$id");

while($row= mysqli_fetch_array($result)){
$name = $row['name_p'];
$kali = $row['name_k'];

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_madd.css">
</head>
<body>
    
 
<div class="madd-left">
<h4> تعديل جدول الاقسام </h4> 
<?php  echo '<button class="btn1"><a href="main.php?
                    ">الرئيسية</a></button>'
                    ?><br>
<form method="POST" class="mt-5 login-input" action="">
<input type="number" name= "id" value='<?php echo $id;?>'><br>
<b> اسم القسم  </b><br>
<input type='text' name="name" value='<?php echo $name;?>'><br>

<b> الكلية</b><br>
<select name="klah" id=""> 
<?php  
 include "connect.php";
$select =mysqli_query($con,"select * from kali ");
while($row =mysqli_fetch_array($select)){
    ?>
<option value="<?php echo $row['name_k'];?>"><?php echo $row['name_k'];?></option>
    <?php
}
?>

</select><?php  echo '<button class="btnk"><a href="madd.php?
                    ">اضافة كلية</a></button>'
                    ?><br>

<input type="submit" class="btn " name="updat" value ="تعديل">
</form>
</div>

</body>
</html>