<?php
require "koneksi.php";
$id = $_GET["id"];

$result = mysqli_query($conn, "select * from mobil where ID = '$id'");

$mobil = [];

while ($row = mysqli_fetch_assoc($result)) {
    $mobil[] = $row;
}

$mobil = $mobil[0];

if (isset($_POST["ubah"])) {
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $Gender = $_POST["Gender"];
    $Address = $_POST["Address"];
    $BRAND = $_POST["BRAND"];
    $color = $_POST["COLOR"];
    $model = $_POST["MODEL"];
    $year = $_POST["YEAR"];
    $birth = $_POST["Birth"];

    $result = mysqli_query($conn, "update mobil set Email = '$email', Phone = '$phone', Gender = '$Gender', Address = '$Address', BRAND = '$BRAND', COLOR = '$color', MODEL = '$model', YEAR = '$year', Birth = '$birth' where ID = '$id'");

    if ($result) {
        echo "
                <script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'formdata.php';
                </script>
            ";
    } else {
        echo "
            <script>
            alert('Data Gagal Diubah!');
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="styleedit.css">
</head>
<body>
    <form action="" method="post">
        <label for="">Email : </label>
        <input type="text" name="Email" id="" value="<?=$mobil["Email"]?>"> <br>

        <label for="">Phone</label>
        <input type="number" name="Phone" id="" value="<?=$mobil["Phone"]?>"> <br>
        
        <label for="">Birth</label>
        <input type="date" name="Birth" id="" value="<?=$mobil["Birth"]?>"> <br>

        <label for="">Gender</label> <br>
        <input type="radio" name="Gender" id="" value="Male" <?= $mobil['Gender'] == "Male" ? "checked" : "" ?>> Male <br>
        <input type="radio" name="Gender" id="" value="Female" <?= $mobil['Gender'] == "Female" ? "checked" : "" ?>> Female <br>
        
        <label for="">Address</label>
        <input type="text" name="Address" value="<?=$mobil["Address"]?>"> <br>

        <label for="">Brand</label>
        <input type="text" name="BRAND" value="<?=$mobil["BRAND"]?>"> <br>
        
        <label for="">Color</label>
        <input type="text" name="COLOR" value="<?=$mobil["COLOR"]?>"> <br>
        
        <label for="">model</label>
        <input type="text" name="MODEL" value="<?=$mobil["MODEL"]?>"> <br>
        
        <label for="">year</label>
        <input type="text" name="YEAR" value="<?=$mobil["YEAR"]?>"> <br>

        <button type="submit" name="ubah">Ubah</button>
    </form>
    <a href="htmljacktrue.php">Kembali ke home</a>
</body>

</html>