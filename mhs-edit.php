<!DOCTYPE html>
<html>
<head>
 <title>Simple CRUD</title>
</head>
<body>
<h2 align="center">Edit Data Mahasiswa</h2>
 
<?php
    include 'koneksi.php';
    $nim  = $_GET['nim'];
    $sql = "SELECT *FROM mhs WHERE nim='$nim'";
    $que = mysqli_query($sambungan, $sql);
 
    while ($data=mysqli_fetch_array($que))
    {
        $nim   = $data['nim'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $kota  = $data['kota'];
    }
?>
 
<form action="mhs-ubah.php" method="post" enctype="multipart/form-data" align="center">
    <input type="hidden" name="idm" value="<?php echo"$nim"; ?>">
    <p>
        NIM : <br>
        <input type="number" name="nim" required="" value="<?php echo "$nim"; ?>" readonly>
    </p>
	
	<p>
        Nama : <br>
        <input type="text" name="nama" required="" value="<?php echo "$nama"; ?>">
    </p>
	
	<p>
        Alamat : <br>
        <input type="text" name="alamat" required="" value="<?php echo "$alamat"; ?>">
    </p>
	
	<p>
        Kota : <br>
        <input type="text" name="kota" required="" value="<?php echo "$kota"; ?>">
    </p>
 
    <p>
        <input type="submit" value="SIMPAN">
		<button type="button" onclick="history.back();">Back</button>
    </p>
</form>
</body>
</html>