<?php 
     //inputan
     $u="Admin";
     $p="123";

     //proses
     $iu = $_POST['Username'];
     $ip = $_POST['password'];

     //percabangan
     if ($iu == $u && $ip == $p){
          header ("location:dashboard.php");
     }else{
          echo "username dan password salah!";
     }
      
      ?>

      <!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Get di php</title>
</head>
<body>
     
     <h1>Get di php</h1>
     <form action="" method="post">
          <input type="text" name="Username" placeholder="Username"> <br>
          <input type="password" name="password"> <br>
          <input type="submit" value="Login">
     </form>

</body>
</html>