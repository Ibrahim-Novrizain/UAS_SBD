<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_pembeli'];

	$id_pembeli=$_POST['id_pembeli'];
	$nama_pembeli=$_POST['nama_pembeli'];
	$no_telp=$_POST['no_telp'];
	$alamat=$_POST['alamat'];

	// update user dataa
	$result = mysqli_query($conn, 
	"UPDATE pembeli SET id_pembeli='$id_pembeli',nama_pembeli='$nama_pembeli',no_telp='$no_telp',alamat='$alamat' 
	WHERE id_pembeli=$id");

    header("Location: index.php");
}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Pembeli</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM pembeli WHERE id_pembeli=$id");

while($user_data = mysqli_fetch_array($result))
{
	$id_pembeli = $user_data['id_pembeli'];
	$nama_pembeli = $user_data['nama_pembeli'];
	$no_telp = $user_data['no_telp'];
	$alamat = $user_data['alamat'];
}
?>
<?php include('header1.php');?>

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit_pembeli.php">
		<table border="0">
			<tr> 
				<td>ID Pembeli</td>
				<td><input type="text" name="id_pembeli" value=<?php echo $id_pembeli;?>></td>
			</tr>
			<tr> 
				<td>Nama Pembeli</td>
				<td><input type="text" name="nama_pembeli" value=<?php echo $nama_pembeli;?>></td>
			</tr>
			<tr> 
				<td>No.Telp</td>
				<td><input type="text" name="no_telp" value=<?php echo $no_telp;?>></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html> 