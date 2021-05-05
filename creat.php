
<?php
include 'connect.php';

  $msg = '';
if (isset($_POST["add"])) {
    $reference = $_POST['reference'];
    $lible = $_POST['lible'];
    $quantiteMinimale = $_POST['quantiteMinimale'];
    $quantite = $_POST['quantite'];
    $sql = "insert into produit values('$reference','$lible','$quantiteMinimale','$quantite')";
    $dataBase->query($sql);
    $dataBase->close();
   
    header ("location: welcome.php");
    $msg =  'Valide'; 
    
}




?>


