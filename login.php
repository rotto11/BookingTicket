<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM user where username='$username' and password='$password'");
$x = mysqli_num_rows($result);

if($x == 1){
	?>
	<script type="text/javascript">
						alert("Selamat Datang ");
						window.location = "forum.php";						
					</script>

	<?php
	 while($row = mysql_fetch_assoc($result))
                    {
                        $_SESSION['username']  = $row['username'];
                    }
	
}
else{ 
	?>
	<script type="text/javascript">
						alert("Akun anda tidak valid");
						window.location = "index.html";						
					</script>
<?php
}
?>