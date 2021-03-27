<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $nim=$_POST['nim'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"UPDATE `mahasiswa` SET `nama`='$nama',`alamat`='$alamat' where `nim`='$nim'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>