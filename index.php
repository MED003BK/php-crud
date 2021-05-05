<?php
   ob_start();
   session_start();
?>
<?php 

require "connect.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/style.css">
    
   
    <title>Document</title>
</head>
<style>
<?php
   include "css/style.css"
?>
</style>
<body class="body">


<?php
            $msg = '';
            $err = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'med' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'med';
                  
                  $msg =  'Valide Account';  
                  header ("location: welcome.php");
               }else {
                  $err = 'Wrong username or password';
               }
            }
         ?>
         
         <form method = "POST" class = "produit">
<div class="container">
 
    <label id="user1" class="user1"  for="uname"><b>Username</b></label><br>
    <input class="user" type="text" placeholder="Enter Username" name="username" required>  <br>

</br>

    <label class="user1" for="psw"><b>Password</b></label><br>
    <input class="user" type="password" placeholder="Enter Password" name="password" required><br>

    <button class="btn" name = "login" type="submit">Login</button> 
    <h4 class="form"><?php echo $msg; ?></h4>
    <h4 class="forms"><?php echo $err; ?></h4>
    
  </div>

</form>

</body>
</html>



