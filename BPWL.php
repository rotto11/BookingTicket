<!doctype.html>
<head></head>
<body>
<?php
include "koneksi.php";?>
<a href="FormInputMhs.php">Daftar Bus</a>
<table width="600" border="1" cellspacing="0" cellpadding="0">
<tr>
<th align="center">No</th>
<th>Nama</th>
<th>Asal</th>
<th>Tujuan</th>
<th>Berangkat</th>
<th>Sisa Ticket</th>
</tr>
<?php
$i=0;
$query =mysqli_query($con,"select*from ticket order by Nama_Bus");
while ($m= mysqli_fetch_array($query)){
	$i++;?>
	<tr>
	<td align="center"><?php print $i;?></td>
	<td><?php print $m['Nama_Bus'];?></td>
	<td><?php print $m['Asal'];?></td>
	<td><?php print $m['Tujuan'];?></td>
	<td><?php print $m['Jam_Berangkat'];?></td>
	<Td><?php print $m['Ticket_tersisa'];?></td>
	</tr>
<?php
}
?>
</table></body></html>	