

<?php 
 include "connect.php";
 $result= mysqli_query($con,"SELECT * FROM part");
?>


<?php 
 //كود الاضافة للقسم
if(isset($_POST['add'])){
    include "connect.php";
    $name =$_POST['name'];
    $kaly =$_POST['kaly'];
    $mess ="";
    $ins= mysqli_query($con,"insert into part (name_p,name_k) values(' $name','$kaly')");
    
//  if($ins){
//      $met ="your add sucssefuly";
//  }
//  else{
//      die("error".mysqli_error($con));
//  }
//  mysqli_close($con);

 } 
 
?>


    <?php
            

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

 
<div class="madd-left">
<body><?php  echo '<button class="btn1"><a href="main.php?
                    ">الرئيسية</a></button>'
                    ?><br>

<h4> جدول الاقسام</h4> 
<form method="POST" class="mt-5 login-input" action="">
<b> اسم القسم  </b><br>
<input type='text' name="name" required><br>

<b> الكلية</b> <br>
<select name="kaly" id=""> 
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
<br>
<input type="submit" class="btn " name="add" value ="اضافة">
</form>
</div>


<?php
                 
                 // خاص بالبحث
                 include('connect.php');
                 if(isset($_GET['search'])){
                 $searchkey = $_GET['search'];
                 $sql = "SELECT * FROM part where  id_p like '%$searchkey%' or name_p like '%$searchkey%' or name_k like '%$searchkey%'";
             }else{
              $sql = "SELECT * FROM part";
              $searchkey ="";
             }
             $result = mysqli_query($con,$sql);

          ?>
<div class="madd-rihgt"> 

<form class="search" action="" method="GET">
              <input type="text" name="search" 
           placeholder="...ابحث هنا" value="<?php echo $searchkey;?>"> <button class="bt"> بحث </button>
              
          </form>
 
<table border="1">
                    <th>التسلسل</th>
                    <th>اسم القسم</th>
                    <th>اسم الكلية </th>
                    <th>العمليات</th>
                    <thody>
                <?php
                include "connect.php";
               // $result= mysqli_query($con,"SELECT * FROM part");
             
                while ($row = mysqli_fetch_array($result)) {
                   $id=$row['id_p'];
                   $name=$row['name_p'];
                   $kaly=$row['name_k'];
                    echo '<tr>
                      <th scope="row"> '.$id.' </th>
                      <td>'.$name.'</td>
                      <td>'.$kaly.'</td>
                      <td>
                      <button class="btn1"><a href="update_p.php?
                      id='.$id.'" >تعديل</a></button>
                      <button class="btn2"><a href="del.php?
                      delpart='. $kaly.'">حذف</a></button>
                      </td>
                    </tr>';
                }
                ?>
              </thody>
         </table>   
</div>
</body>
</html>