<?php  

  session_start();

$admins = ("ahmed");
$admin = ("123 ");
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

         $user= $_POST['username'];
         $pass = $_POST['password'];
 
     if( $user == $admins and $pass == $admin){
       $_SESSION['user'] = $user;
       $_SESSION['pass'] = $pass;
       header('location:main.php');
    //    echo  'مرحبا', $_SESSION['user'] = $user;
     }else{
echo 'هناك خطا في كلمة السر او اسم المستخدم';
     }

   }else {

      echo 'error';

   }
?>