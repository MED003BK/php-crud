<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style2.css">
  <title>Document</title>
</head>
<body>
  
</body>
</html>
<table id="tbl" class="table table-dark table-striped">
<thead  >
                    <tr>
                        <th> reference</th>
                        <th> libelle</th>
                        <th > Quantite minimale</th>
                        <th> Quantite en stock </th>
                        <th></th>
                        <th></th>
                    </tr>
                 
                    </thead>
                   <tbody>
 
              <?php
                    include "connect.php";
                    $sql= "SELECT  * FROM  Produit where 	quantite_minimale > quantite_en_stock";
                    $result = $dataBase->query($sql);
                    while ($row = mysqli_fetch_array($result)) {                      
                  ?> 
                        <tr class="fil">
                         <td> <?php echo $row['reference']?> </td>
                         <td> <?php echo $row['libelle']?>   </td>
                         <td> <?php echo $row['quantite_minimale']?>  </td>
                         <td> <?php echo $row['quantite_en_stock']?>  </td>
                         <td id="delet"><a href="delete.php?id=<?php echo $row["reference"];?>" > Delete</a></td>
                         <td><a href="edit.php?id=<?php echo $row["reference"];?>" > Edit</a></td>
                         </tr>
                 <?php  }
               
                    $dataBase->close();
                    ?>
  </tbody>

  

</table>
