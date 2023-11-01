<?php
require "koneksi.php";

$result = mysqli_query($conn, "select * from mobil");

$mobil = [];

while ($row = mysqli_fetch_assoc($result)) {
    $mobil[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link rel="stylesheet" href="styleformdata.css">
</head>

<body>
    <div class="container">
        <div class="tambah-btn"><a href="BuyForm.php">Tambah</a></div>
        
        
        <h1>Your Order Data</h1>
        <p>Today : <?php date_default_timezone_set("asia/makassar"); echo date('d-m-y  | h i s a')?></p>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Birth Date</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Brand</th>
                <th>Color</th>
                <th>Model</th>
                <th>Year</th>
                <th>File</th>
                <th colspan="2">action</th>
            </tr>
            <?php $i = 1;
        foreach ($mobil as $mbl) : ?>
            <tr>
                <td> <?= $i; ?> </td>
                <td> <?php echo $mbl["Email"] ?> </td>
                <td> <?= $mbl["Phone"] ?> </td>
                <td> <?= $mbl["Birth"] ?> </td>
                <td> <?= $mbl["Gender"] ?> </td>
                <td> <?= $mbl["Address"] ?> </td>
                <td> <?= $mbl["BRAND"] ?> </td>
                <td> <?= $mbl["COLOR"] ?> </td>
                <td> <?= $mbl["MODEL"] ?> </td>
                <td> <?= $mbl["YEAR"] ?> </td>
                <td><img src="./assets/<?=$mbl['PICTURE'] ?>" alt="#"  width="100px" height="100px" ></td>
                <td><a href="edit.php?id=<?=$mbl["ID"];?>">Edit</a></td>
                <td><a href="hapus.php?id=<?=$mbl["ID"];?>" onclick="return confirm('Apa Anda Yakin ingin menghapus data ini ?')">hapus</a></td>
            </tr>
        <?php $i++;
        endforeach; ?>
    </table>
</div>
</body>
</html>