<form action="" method="post">
<input type="text" name='updated'>
<input type="hidden" name='id-to-edit' value='<?php echo $_GET['id'];?>'>
 <button type="submit" value="edit" name='submit'>edit</button></form>
<?php
if(isset($_POST['submit'])){
    include "connect.php";
    $id = $_POST['id-to-edit'];
    $updated = $_POST['updated'];
    mysqli_query($dataBase,"UPDATE produit SET quantite_en_stock = $updated WHERE reference = $id");
    ;
 header('location: Welcome.php');
}
?> 
