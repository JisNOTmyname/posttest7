<?php
session_start();

$nama = 'jack';
$password = '123';

if(isset($_POST["username"]) && isset($_POST["password"])  ){
    $username = $_POST["username"];
	$password = $_POST["password"];
    
}

if($username == $nama && $password == $password){
    $_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
    ?>
	<script type="text/javascript">
		window.alert("Berhasil Login");
		window.location.assign("htmljacktrue.php");
	</script>
<?php 
}

else{?>
	<script type="text/javascript">
		window.alert("Gagal Login");
		window.location.assign("indexjack.php");
	</script>
<?php 
} 
?>
