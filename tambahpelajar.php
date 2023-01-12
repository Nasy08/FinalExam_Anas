<?php
include "connect.php";

if(isset($_POST['id'])) {    
    $id = $_POST['id'];
    $nondp = $_POST['no_ndp'];
    $namapelajar = $_POST['nama_pelajar'];
    $nokp = $_POST['no_kp'];
    $jantina = $_POST['jantina'];
    $nohp = $_POST['no_hp'];

    $sql = "INSERT INTO info_pelajar (id,no_ndp,nama_pelajar,no_kp,jantina,no_hp)
            VALUES ('$id','$nondp','$namapelajar','$nokp','$jantina','$nohp')";
    $result = mysqli_query($mysqli, $sql); 
    if ($result)
        echo "<script>alert('Berjaya Menambah Pelajar')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
        echo "<script>window.location='index.php'</script>";
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Pelajar</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <button class="back"><a href="index.php">Back</a></button>
        <center>
        <form action="tambahpelajar.php" method="POST">
            <table>
                <tr>
                    <td> Id </td>
                    <td> <input type="text" name="id" placeholder="01"> </td>
                </tr>
                <tr>
                    <td> No Daftar Pelajar </td>
                    <td> <input type="text" name="no_ndp" placeholder="2322XXXX"> </td>
                </tr>
                <tr>
                    <td> Nama Pelajar </td>
                    <td> <input type="text" name="nama_pelajar" placeholder=""> </td>
                </tr>
                <tr>
                    <td> No Kad Pengenalan </td>
                    <td> <input type="text" name="no_kp" placeholder="030512140435"></td>
                </tr>    
                <tr>
                    <td> Jantina</td>
                    <td> <input type="text" name="jantina" placeholder="Lelaki/Perempuan"></td>
                </tr> 
                <tr>       
                    <td> Nombor HP</td>
                    <td> <input type="text" name="no_hp" placeholder="019999999"></td>
                </tr>    
            </table>
            <button type="reset">Reset</button>
            <button type="submit" class="simpan">Simpan</button>
            
        </form>
        </center>
    </body>
    </html>
