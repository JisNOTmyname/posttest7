<?php
session_start();
require "koneksi.php";
if(!isset($_SESSION['username'])){
    header('Location: login.php');
    exit;
  }

if (isset($_POST["tambah"])) {
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $Gender = $_POST["Gender"];
    $Address = $_POST["Address"];
    $BRAND = $_POST["BRAND"];
    $color = $_POST["COLOR"];
    $model = $_POST["MODEL"];
    $year = $_POST["YEAR"];
    $birth = $_POST["Birth"];

    $img = $_FILES ["PICTURE"]['name'];
    $explode = explode('.', $img);
    $ekstensi =strtolower(end($explode));
    $picture = "$email.$ekstensi";
    $file = $_FILES['PICTURE']['tmp_name'];
//     echo "
//     <script>
//     alert('Data Berhasil Ditambahkan! dan file berhasil di upload');
//     // document.location.href = 'formdata.php';
//     </script>
// ";
    var_dump($file);
    if (move_uploaded_file($file, 'assets/'.$picture)) {
        $result = mysqli_query($conn, "insert into mobil values ('', '$BRAND', '$model', '$year', '$color', '$email','$phone', '$birth', '$Gender','$Address','$picture')");

        if ($result) {
            echo "
                <script>
                alert('Data Berhasil Ditambahkan! dan file berhasil di upload');
                document.location.href = 'formdata.php';
                </script>
            ";
        } else {
            echo error_log($result) . "
            <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = BuyForm.php';
            </script>
        ";
        }
    }
    


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type-number] {
        -moz-appearance: textfield;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Form</title>
    <link rel="stylesheet" href="styleforform.css">
</head>
<body>


<section class="container">
    <header>Buy Form</header>
    <form action="" method="post" class="form" enctype="multipart/form-data" >
        <div class="input-box">
            <label>Email Address</label>
            <input type="email" name="Email" placeholder="Enter Your Email Address" required>
        </div>

        <div class="column">
        <div class="input-box">
            <label>Phone Number</label>
            <input type="number" name="Phone" placeholder="Enter Your Phone Number" required>
        </div>

        <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="Birth" placeholder="Enter Your Birth Date" required>
        </div>
        </div>
        
        <div class="gender-box">
            <h3>Gender</h3>
            <div class="gender-option">
                <div class="gender">
                    <input type="radio" name="Gender" id="check-male" value="Male">
                    <label for="check-male">Male</label>
                </div>
                <div class="gender">
                    <input type="radio" name="Gender" id="check-female" value="Female">
                    <label for="check-female">Female</label>
                </div>
            </div>
        </div>





        <div class="input-box addres">
            <label>Address</label>
            <input type="text" name="Address" placeholder="Enter Your Street Address" required>
            <div class="column">
                <div class="select-box">
                    <select name ="BRAND" required>
                        <option hidden>Brand</option>
                        <option value = "BMW">BMW</option>
                        <option value = "Ferrari">Ferrari</option>
                        <option value = "Honda">Honda</option>
                        <option value = "Lexus">Lexus</option>
                        <option value = "Mercedes">Mercedes</option>
                        <option value = "McLaren">McLaren</option>
                        <option value = "Nissan">Nissan</option>
                        <option value = "Porsche">Porsche</option>
                        <option value = "Toyota">Toyota</option>
                        <option value = "Volkswagen">Volkswagen</option>
                    </select>
                </div>
            </div>
            <div class="select-box">
                <select name="COLOR" required>
                    <option hidden>color</option>
                    <option value="Black">Black</option>
                    <option value="White">White</option>
                    <option value="Red">Red</option>
                    <option value="Blue">Blue</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Orange">Orange</option>
                    <option value="Green">Green</option>
                    <option value="Gray">Gray</option>
                    <option value="Brown">Black</option>
                    <option value="Beige">Beige</option>
                    <option value="Costum">Costum</option>
                </select>
            </div>
            <!-- <input type="text" placeholder="Car Color" name="COLOR" required> -->
            <div class="column">
            <input type="text" placeholder="Car Model" name="MODEL" required>
            <input type="text" placeholder="Car Model Year" name="YEAR" required>
            <input type="file" placeholder ="Car Picture"  name = "PICTURE">
        </div>
            </div>
        <input class = "subbtn" type="submit" name="tambah">
    </form>
</section>
    
</body>
</html>