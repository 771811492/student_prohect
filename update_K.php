<?php 
  
   
  
    $id=$_GET['update'];
    if(isset($_POST['submit-1'])) {
    include ('connect.php');
    $id=$_POST['id'];
    $name = $_POST['name'];
    $upd = "update kali set id_k=$id, name_k='$name' where id_k=$id";
    $resulet= mysqli_query($con, $upd);
    header('location: madd.php');
  }

  
?>
<?php 

   include "connect.php";
 $result= mysqli_query($con,"select * from kali where id_k=$id");
while($row= mysqli_fetch_array($result)){
  $id = $row['id_k'];
  $name = $row['name_k'];

   
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_madd.css">
 
</head>
<body>
    <!-- يسار الصفحة -->
   <div class=".madd-left">
   <h4> تعديل جدول الكليات </h4> 
   <?php  echo '<button class="btn1"><a href="main.php?
                    ">الرئيسية</a></button>'
                    ?><br>
     <form method="POST" action="">
      <input type="number" name= "id" value='<?php echo $id;?>'><br>
      <input type="text" name= "name"  value='<?php echo $name;?>'><br>
      <button type="submit" class="btn" name="submit-1">تعديل</button>
     </form>
   </div>  
             
            
</body>
</html>

