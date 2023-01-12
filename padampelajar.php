<?php
include 'connect.php';

$id = $_GET['id'];
$result = mysqli_query($mysqli,"DELETE FROM info_pelajar WHERE id = '$id'");
if ($result){
    echo "<script>alert('Berjaya Padam Pelajar')</script>";  
    echo "<script>window.location='index.php'</script>";
}
else{
    echo "<script>alert('Tidak berjaya Padam Pelajar')</script>";
    echo "<script>window.location='tambahpelajar.php'</script>";
} 
 ?>
