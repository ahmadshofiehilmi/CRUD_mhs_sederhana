<!DOCTYPE html>
<html>
<head>
 <title>Simple CRUD</title>
</head>
<body>
 <h2 align="center">Tambah Data Mahasiswa</h2>
 
<!--enctype="multipart/form-data", wajib ada kalo ada upload file-->
						
<form action="mhs-smp.php" method="post" enctype="multipart/form-data" align="center">
    <p>
        NIM : <br>
        <input type="number" name="nim" required="">
    </p>
	
	<p>
        Nama : <br>
        <input type="text" name="nama" required="">
    </p>
	
	<p>
        Alamat : <br>
        <input type="text" name="alamat" required="">
    </p>
 
    <p>
        Kota : <br>
        <input type="text" name="kota" required="">
    </p>
 
    <p>
        <input type="submit" value="SIMPAN">
		<button type="button" onclick="history.back();">Back</button>
    </p>
	
</form>
</body>
</html>