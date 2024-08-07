<?php
include 'connect.php';
$result =mysqli_query($con,"SELECT * FROM dagaree")
?>

<?php   
// الاضافة في جدول الدرجات 

if(isset($_POST['add'])){
 include 'connect.php';

$name_s =$_POST['student'];
$name_k =$_POST['kaly'];
$name_p =$_POST['part'];
$name_m =$_POST['mada'];
$name_d =$_POST['degaree'];
$level =$_POST['level'];
$mess ="";
$ins =mysqli_query($con,"insert into dagaree (name_s,name_k,name_p,name_m,name_d,level) values('$name_s','$name_k','$name_p','$name_m','$name_d','$level')");
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

// include 'connect.php';
// if(isset($_GET['deldagaree'])){
//     $id=$_GET['deldagaree'];
//     $del="delete from dagaree where  id_k=$id";
//    $result=mysqli_query($con,$del);
//      header('location: dagaree.php');
// }
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylestudent.css">
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
</head>
<body>
    <div class="student-left">
        <form action="" method="POST">
        
<?php  echo '<button class="btn1"><a href="main.php?
                    ">الرئيسية</a></button>'
                    ?><br>
            <!-- اسم الطال -->
            <h4> جدول الدرجات</h4> 
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

<label class ="con-sn-2 col form-label"> المستوى </label><br>
<select name="level" id=""> <br>
<option >اختر المستوى</option>
<option >اول</option>
<option >ثاني</option>
<option >ثالث</option>
<option >رابع</option>
<option >خامس</option>
</select>
<br>
                    <!-- الدرجة -->
                    <label class ="con-sn-2 col form-label"> الدرجة </label><br>
<input type='number'name="degaree" required><br>
<br>
<br>
<input type="submit" class="btn " name="add" value ="اضافة">
        </form>
    </div>
    <?php
                   //البحث
           include 'connect.php';
                   if(isset($_GET['search']))  {
               $search =$_GET['search'];
               $sql =("SELECT * FROM dagaree WHERE id_d like '%$search%' or name_s like '%$search%' or name_k like '%$search%' or name_p  like '%$search%' or name_m like '%$search%' or name_d like '%$search%' or level like '%$search%'");
         
            }  else {
                 $sql="SELECT * FROM dagaree";
                 $search =" ";
            }        
           $result = mysqli_query($con,$sql) ;
    ?>
    <div class="student-rihgt">
    <form class="search" action="" method="GET">
              <input type="text" name="search" autocomplete="of"
              placeholder="...ابحث هنا" value="<?php echo $search;?>"> <button class="bt"> بحث </button>
          </form>
            <table border='2'>
                    <th>التسلسل</th>
                    <th>اسم الطالب</th>
                    <th>الكلية</th>
                    <th>القسم</th>
                    <th>المادة</th>
                    <th>الدرجة</th>
                    <th>المستوى</th>
                    <th> العمليات </th>
                <thody>
                <?php
                include "connect.php";
              //  $result= mysqli_query($con,"SELECT * FROM dagaree ");
                while ($row = mysqli_fetch_array($result)) {
                  $id=$row['id_d'];
                  $name_s=$row['name_s'];
                  $name_k=$row['name_k'];
                  $name_p=$row['name_p'];
                  $name_m=$row['name_m'];
                  $name_d=$row['name_d'];
                  $level=$row['level'];
                    echo '<tr>
                      <th scope="row"> '.$id.' </th>
                      <td>'.$name_s.'</td>
                      <td>'.$name_k.'</td>
                      <td>'.$name_p.'</td>
                      <td>'.$name_m.'</td>
                      <td>'.$name_d.'</td>
                      <td>'.$level.'</td>
                      <td>
                      <button class="btn1"><a href="update_d.php?
                      id='.$id.'" >تعديل</a></button>
                      <button class="btn2"><a href="del.php?
                      deldagaree='.$id.'">حذف</a></button>
                      </td>
                    </tr>';
                }
                ?>
              </thody>
            </table>
        </form>
    </div>
</body>
</html>