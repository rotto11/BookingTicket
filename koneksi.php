<?php
$con=mysqli_connect("localhost","root","123456","prot_bpwl");
if(mysqli_connect_errno($con))
{echo "Koneksi dengan mysql gagal" .mysqli_connect_error;
}
else
{echo "";}
?>