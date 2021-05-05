<?php
include "connect.php";
$id =$_GET['id'];



mysqli_query($dataBase,"DELETE FROM produit  WHERE reference =$id");
?> 
<script type="text/javascript">
window.location="Welcome.php";
</script>