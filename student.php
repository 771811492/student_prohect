

<!-- كود الربط بصفحة الربط بقاعدة البيانات -->
<?php
include 'connect.php';
$result =mysqli_query($con,"SELECT * FROM student")
?>



<?php   
// الاضافة في جدول الطلاب 

if(isset($_POST['add'])){
 include 'connect.php';
$names =$_POST['name'];
$namek =$_POST['kaly'];
$namep =$_POST['part'];
$level =$_POST['level'];
$mess ="";
$ins =mysqli_query($con,"insert into student (name_s,name_k,name_p,level) values('$names','$namek','$namep','$level')");
if($ins){
    $met ="your add sucssefuly";
}
else{
    die("error".mysqli_error($con));
}
mysqli_close($con);

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
    <!-- <link rel="stylesheet" href="bootstrap.min.css"> -->
</head>
<body>
    <div class="student-left">
        <form action="" method="POST">
        
<?php  echo '<button class="btn1"><a href="main.php?
                    ">الرئيسية</a></button>'
                    ?><br>
                    <h4> جدول الطلاب</h4> 
            <!-- اسم الطال -->
        <label> اسم الطالب </label>   <br>
<input type='text'name="name" required><br>
  
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

<!-- المستوى -->
<!-- <label class ="con-sn-2 col form-label"> المستوى </label><br>
<input type='text'name="level" required><br> -->
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


<input type="submit" class="btn " name="add" value ="اضافة">
        </form>
    </div>

    <?php
                   //البحث
           include 'connect.php';
               if(isset($_GET['search']))  {
               $search =$_GET['search'];
               $sql =("SELECT * FROM student WHERE id_s like '%$search%' or name_s like '%$search%' 
               or name_k like '%$search%' or name_p like '%$search%' or level like '%$search%'");
         
            }  else {
                 $sql="SELECT * FROM student";
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
                    <th>المستوى</th>
                    <th> العمليات </th>
                <thody>
                <?php
                include "connect.php";
              //  $result= mysqli_query($con,"SELECT * FROM student ");
                  
                while ($row = mysqli_fetch_array($result)) {
                  $id=$row['id_s'];
                  $names=$row['name_s'];
                  $namek=$row['name_k'];
                  $namep=$row['name_p'];
                  $level=$row['level'];
                    echo '<tr>
                      <th scope="row"> '.$id.' </th>
                      <td>'.$names.'</td>
                      <td>'.$namek.'</td>
                      <td>'.$namep.'</td>
                      <td>'.$level.'</td>
                      <td>
                      <button class="btn1"><a href="update_s.php?
                      id='.$id.'" >تعديل</a></button>
                      <button class="btn2"><a href="del.php?
                      delstudent='.$namek.'">حذف</a></button>
                      </td>
                    </tr>';
                }
                ?>
              </thody>
            </table>
      
    </div>
</body>
</html>