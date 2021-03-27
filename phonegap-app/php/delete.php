<?php
 include "db.php";
 if(isset($_GET['id']))
 {
 $id=$_GET['nim'];
 $q=mysqli_query($con,"delete from `mahasiswa` where `nim`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>