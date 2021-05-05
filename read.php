
    
<link rel="stylesheet" href="css/style2.css">
<div id="img"></div>
 
 <thead  >
                    <tr>
                        <th> reference</th>
                        <th> libelle</th>
                        <th > Quantite minimale</th>
                        <th> Quantite en stock </th>
                        <th></th>
                        <th></th>
                    </tr>
                    <table id="tbl" class="table table-dark table-striped">
                    </thead>
             
                <!-- <table id="tbl" class="table table-dark table-striped"> -->
                  
                    <tbody>
                    <?php
                    include "connect.php";
                  

                    $sql = "SELECT * FROM produit";
                    $result = $dataBase -> query($sql);

                    while ($row = mysqli_fetch_array($result)) {
                        
   ?> 
   
  

                        <tr>
                         <td> <?php echo $row['reference']?> </td>
                         <td> <?php echo $row['libelle']?>   </td>
                         <td> <?php echo $row['quantite_minimale']?>  </td>
                         <td> <?php echo $row['quantite_en_stock']?>  </td>
                         <td id="delet"><a href="delete.php?id=<?php echo $row["reference"];?>" > Delete</a></td>
                         <td><a href="edit.php?id=<?php echo $row["reference"];?>" > Edit</a></td>
                         </tr>
                 <?php   }
               
                    $dataBase->close();
                    ?>
                    </tbody>
                      </table>