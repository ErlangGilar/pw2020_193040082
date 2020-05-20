<?php 
function koneksi() {
	$conn = mysqli_connect("localhost","root","")or die ("koneksi ke DB gagal");
	mysqli_select_db($conn,"tubes_193040082")or die ("Database salah!");

	return $conn;
}

function query($sql){
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

return $rows;
}
function tambah($data)
{
	$conn = koneksi();

	$img = htmlspecialchars($data['img']);
	$nama_makanan = htmlspecialchars($data['nama_makanan']);
	$asal_daerah = htmlspecialchars($data['asal_daerah']);
	$ketersediaan = htmlspecialchars($data['ketersediaan']);
	$harga = htmlspecialchars($data['harga']);

	$query = "INSERT INTO makanan
					VALUES
					(null,'$img','$nama_makanan','$asal_daerah','$ketersediaan','$harga')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
function hapus($id)
{
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

	return mysqli_affected_rows($conn);
}
function ubah($data)
{
	$conn = koneksi();

	$id = $data ['id'];
	$img = htmlspecialchars($data['img']);
	$nama_makanan = htmlspecialchars($data['nama_makanan']);
	$asal_daerah = htmlspecialchars($data['asal_daerah']);
	$ketersediaan = htmlspecialchars($data['ketersediaan']);
	$harga = htmlspecialchars($data['harga']);

	$queryubah = "UPDATE makanan 
					SET
					img = '$img',
					nama_makanan = '$nama_makanan',
					asal_daerah = '$asal_daerah',
					ketersediaan = '$ketersediaan',
					harga = '$harga'
					WHERE id = '$id' ";

	mysqli_query($conn, $queryubah);

	return mysqli_affected_rows($conn);
}
?>
