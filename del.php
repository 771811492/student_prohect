<?php 
  
 include "connect.php";
if(isset($_GET['deltetei'])){
    $id=$_GET['deltetei'];
     
   $deletemad="delete from kali where name_k='$id' ";
   $select=mysqli_query($con,$deletemad);
   header('location: madd.php');

   $deletepart ="delete  from part where name_k='$id'";
   $select =mysqli_query($con,$deletepart);
//    header('location: part.php'); 

   $deletestudent ="delete  from student where name_k='$id'";
   $select =mysqli_query($con,$deletestudent);
//    header('location: student.php'); 


$deletestudent ="delete  from materal where name_k='$id'";
   $select =mysqli_query($con,$deletestudent);
//    header('location: boock.php'); 


$deletestudent ="delete  from dagaree where name_k='$id'";
   $select =mysqli_query($con,$deletestudent);
//    header('location: boock.php'); 
}

else if(isset($_GET['delpart'])){

    $id=$_GET['delpart'];

   $deletepart ="delete  from part where name_k='$id'";
   $select =mysqli_query($con,$deletepart);
   header('location: part.php'); 

   $deletestudent ="delete  from student where name_k='$id'";
   $select =mysqli_query($con,$deletestudent);
//    header('location: student.php'); 


$deletestudent ="delete  from materal where name_k='$id'";
   $select =mysqli_query($con,$deletestudent);
//    header('location: boock.php'); 


$deletestudent ="delete  from dagaree where name_k='$id'";
   $select =mysqli_query($con,$deletestudent);
//    header('locati

}

else if(isset($_GET['delstudent'])){

    $id=$_GET['delstudent'];
    $deletestudent ="delete  from student where name_k='$id'";
    $select =mysqli_query($con,$deletestudent);
    header('location: student.php'); 
 
 
 $deletestudent ="delete  from materal where name_k='$id'";
    $select =mysqli_query($con,$deletestudent);
 //    header('location: boock.php'); 
 
 
 $deletestudent ="delete  from dagaree where name_k='$id'";
    $select =mysqli_query($con,$deletestudent);
 //    header('locati
 
}


else if(isset($_GET['delboock'])){

    $id=$_GET['delboock'];
  
 
 
 $deletestudent ="delete  from materal where name_k='$id'";
    $select =mysqli_query($con,$deletestudent);
    header('location: boock.php'); 
 ذ
 
 $deletestudent ="delete  from dagaree where name_k='$id'";
    $select =mysqli_query($con,$deletestudent);

 
}

else if(isset($_GET['deldagaree'])){

    $id=$_GET['deldagaree'];
 
 $deletestudent ="delete  from dagaree where id_d='$id'";
    $select =mysqli_query($con,$deletestudent);
    header('location: dagaree.php'); 
 
}
?>