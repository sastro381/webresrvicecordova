<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"INSERT INTO `mahasiswa` (`nim`,`nama`,`alamat`) VALUES ('$nim','$nama','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>