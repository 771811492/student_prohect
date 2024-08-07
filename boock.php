


<?php
include 'connect.php';
$result =mysqli_query($con,"SELECT * FROM materal")
?>
<?php   
// الاضافة في جدول الطلاب 

if(isset($_POST['add'])){
 include 'connect.php';
$name_b =$_POST['name'];
$name_k =$_POST['kaly'];
$name_p =$_POST['part'];

$mess ="";
$ins =mysqli_query($con,"insert into materal (name_b,name_k,name_p) values('$name_b','$name_k','$name_p')");
header ('location:boock.php');
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
           <h4> جدول المواد</h4> 
        <label> اسم الكتاب </label>   <br>
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





<input type="submit" class="btn " name="add" value ="اضافة">
        </form>
    </div>

    <?php
                   //البحث
           include 'connect.php';
                   if(isset($_GET['search']))  {
               $search =$_GET['search'];
               $sql =("SELECT * FROM materal WHERE id_b like '%$search%' or name_b like '%$search%' or name_k like '%$search%' or name_p like '%$search%'");
         
            }  else {
                 $sql="SELECT * FROM materal";
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
                    <th>اسم الكتاب</th>
                    <th>اسم الكلية</th>
                    <th>القسم</th>
                    <th> العمليات </th>
              

                <thody>
                <?php
                include "connect.php";
              //  $result= mysqli_query($con,"SELECT * FROM materal ");
                  
                while ($row = mysqli_fetch_array($result)) {
                  $id=$row['id_b'];
                  $name_b=$row['name_b'];
                  $name_k=$row['name_k'];
                  $name_p=$row['name_p'];
                
                    echo '<tr>
                      <th scope="row"> '.$id.' </th>
                      <td>'.$name_b.'</td>
                      <td>'.$name_k.'</td>
                      <td>'.$name_p.'</td>

                      <td>
                      <button class="btn1"><a href="update_b.php?
                      id='.$id.'" >تعديل</a></button>
                      <button class="btn2"><a href="del.php?
                      delboock='.$name_k.'">حذف</a></button>
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