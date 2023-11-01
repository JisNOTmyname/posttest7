<?php
require "koneksi.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "delete from mobil where ID = '$id'");


if ($result) {
    echo "
    <script>
    alert('Data Berhasil Dihapus!');
    document.location.href = 'formdata.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Data Gagal Dihapus!');
    document.location.href = 'formdata.php';
</script>
";
}