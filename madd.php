<?php 
 include "connect.php";
 $result= mysqli_query($con,"SELECT * FROM kali");
?>

<?php
       
//اضافة كلية
if(isset($_POST['add'])){
    include "connect.php";
     $id = $_POST['id_k'];
     $kal = $_POST['name'];
    $ins= mysqli_query($con,"insert into kali (name_k) values('$kal')");
    header('location: madd.php');
  //  mysqli_close($con);
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
<form action="" method="POST">

<?php  echo '<button class="btn1"><a href="main.php?
                    ">الرئيسية</a></button>'
                    ?><br>
                    <h4> جدول الكليات</h4> 
<input type="text" name="name" placeholder="ادخل الكلية" required><br>
<input type="submit" class="btn " name="add" value ="اضافة">
</form>


<?php
                 
                 // خاص بالبحث
                 include('connect.php');
                 if(isset($_GET['search'])){
                 $searchkey = $_GET['search'];
                 $sql = "SELECT * FROM kali where  id_k like '%$searchkey%' or name_k like '%$searchkey%'";
             }else{
              $sql = "SELECT * FROM kali";
              $searchkey ="";
             }
             $result = mysqli_query($con,$sql);

          ?>

</div>

 <div class="madd-rihgt"> 
         <!-- خاص بالبحث -->
         <form class="search" action="" method="GET">
              <input type="text" name="search" autocomplete="of"
           placeholder="...ابحث هنا" value="<?php echo $searchkey;?>"> <button class="bt"> بحث </button>
              
          </form>
<table border="1">
                    <th>التسلسل</th>
                    <th>اسم الكلية</th>
                    <th>العمليات</th>
                    <thody>
                <?php
                include "connect.php";
                // $result= mysqli_query($con,"SELECT * FROM kali");
                  if($result){
                while ($row = mysqli_fetch_array($result)) {
                  $id=$row['id_k'];
                  $kal=$row['name_k'];
                    echo '<tr>
                      <th scope="row"> '.$id.' </th>
                      <td>'.$kal.'</td>
                      <td>
                      <button class="btn1"><a href="update_k.php?
                      update='.$id.'" >تعديل</a></button>
                      <button class="btn2"><a href="del.php?
                      deltetei='.$kal.'">حذف</a></button>
                      </td>
                    </tr>';
                }
              }
                ?>
              </thody>
         </table>   
</div>
     
       

</body>
</html>

