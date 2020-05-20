<?php $mahasiswa = [
    ["nama" => "Sandhika Galih", 
     "nrp" => "043040023",
     "email" => "sandhikagalih@unpas.ac.id", 
     "jurusan" => "Teknik Informatika"],

     ["nama" => "Doddy Ferdiansyah", 
     "nrp" => "144040004",
     "email" => "doddy@gmail.com", 
     "jurusan" => "Teknik Mesin"]
     ]
  ?>
<table border="2" cellpadding="10" cellspacing="1">
	<tr>
		<th>no.</th>
		<th>NRP</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>
	<?php foreach($mahasiswa as $mhs) :?>
		<tr>
			<td>1</td>
			<td><?php echo $mhs['nama']; ?></td>
			<td><?php echo $mhs['nrp']; ?></td>
			<td><?php echo $mhs['email']; ?></td>
			<td><?php echo $mhs['jurusan']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>