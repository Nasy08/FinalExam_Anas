<?php
include_once "connect.php";

$result = mysqli_query($mysqli, "SELECT * FROM info_pelajar ORDER BY id ASC");
 
if (isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $nondp = $_POST['no_ndp'];
    $namapelajar = $_POST['nama_pelajar'];
    $nokp = $_POST['no_kp'];
    $nohp = $_POST['no_hp'];
    $jantina = $_POST['jantina'];

    $add = mysqli_query($mysqli, "INSERT INTO info_pelajar (id,no_ndp,nama_pelajar,no_kp,no_hp,jantina) 
    VALUES('$id','$nondp','$namapelajar','$nokp','$nohp','$jantina' NOW())");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelajar TPP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>PELAJAR TPP</h1>
<center>
        <div class="container">
            <table>
                <tr>
                    <th>Id</th>
                    <th>NDP</th>
                    <th>Nama Pelajar</th>
                    <th>No.Kad Pengenaln</th>
                    <th>No.HP</th>
                    <th>Jantina</th>
                    <th></th>
                </tr>
                <?php
                $sql = "SELECT * FROM info_pelajar ORDER BY id ASC";
                $data = mysqli_query($mysqli, $sql);
                    while ($r = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?php echo $r['id']; ?></td>
                            <td><?php echo $r['no_ndp']; ?></td>
                            <td><?php echo $r['nama_pelajar']; ?></td>
                            <td><?php echo $r['no_kp']; ?></td>
                            <td><?php echo $r['no_hp']; ?></td>
                            <td><?php echo $r['jantina']; ?></td>
                            <td>
                            <button class="delete"><a href="padampelajar.php?id=<?php echo $r['id'] ?>">Padam</a></button>
                            </td> 
                        </tr> 
                    <?php
                    } 
                    ?> 
            </table>
            <button><a href="tambahpelajar.php">Tambah Pelajar</a></button>
        </div>
    </center>
</div>
</body>
</html>