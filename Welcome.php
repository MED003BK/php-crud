<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/style2.css">
    </head>
<body>
  <section id="headpage">
    <div></div>
    <div>
<h1>Welcome to SouqStock</h1>
<p>Manage Your Stock!</p>
</div>
<div class="ICON" ></div>
</section>
  <div class="container">
<form action="creat.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Reference</label>
    <input type="number" class="form-control w-50" id="reference" name="reference">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">lible</label>
    <input type="text" class="form-control w-50" id="lible" name="lible">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">quantite en stock</label>
    <input type="number" class="form-control w-50" id="quantite" name="quantite">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">quantite Minimale:</label>
    <input type="number" class="form-control w-50" id="quantiteMinimale" name="quantiteMinimale">
  </div>
 
  <button id="btn1" type="submit" class="btn btn-primary" name="add">add</button>
</form>
<form  method="POST">
<button id="btn1" type="submit" class="btn btn-primary" name="filter">Filter</button>
</form>
<?php
    if(isset($_POST['filter']))
    {header('location: filter.php');} 
?>
</div>


<table id="tbl" class="table table-dark table-striped">
    <tbody>
 
    <?php include 'read.php'; 
     $msg =  'Valide'; 
    ?>
  

    </tbody>

  

</table>


  
</body>
</html>