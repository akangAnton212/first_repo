<html>
	<head>
	
	</head>
	<body>
	<?php
		include "koneksi.php";
		$db = new koneksiDB();
		$db->koneksiMySql();
		//$db->query ("insert into persons values ('008','Akang','Bekasi','L','08527876511')");
		$db->query ("select * from db_apotek");
		
	?>
	<table>
	<tr>
		<th>NIK</th>
		<th>Nama</th>
	</tr>
	<?php
		while ($data = $db->getData()){
	?>
	<tr>
		<td><?php echo $data->NIK;?></td>
		<td><?php echo $data->nama;?></td>
	</tr>
	<?php
	}
	?>
	</table>
	</body>

</html>