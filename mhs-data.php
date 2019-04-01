<!DOCTYPE html>
<html>
<head>
 <title>Simple CRUD</title>
</head>
<body>
 <h2 align="center">Data Mahasiswa</h2>
 
 <h3 align="center">Created By : me</h3>
 
<a href="mhs-tmh.php" ><center>Tambah Baru</a><br><br>

<a href="hapusall.php" onclick="return  confirm('Hapus semua data Y/N ?')"><center>Delete All</a><br><br>

<div class="row">
    <form action="" method="post">
      <div class="input-group" align="center">
        <input type="text" placeholder="Pencarian Data Mahasiswa..." name="kata" class="form-control">
          <input type="submit" name="cari" class="btn btn-success" value="cari">
      </div>
    </form>
</div><br>
 
<table border="1" width="600" align="center">
    <tr>
        <th>No.</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kota</th>
		<th>Edit</th>		
    </tr>
 
    <?php
 
        include 'koneksi.php';
		
		if(isset($_POST['cari'])){
			$k = $_POST['kata'];
			if($k !==""){
				echo "<center>Hasil Pencarian untuk: ", $k;
			}
			$sql = "SELECT * FROM mhs WHERE nim LIKE '%". $k ."%' OR nama LIKE '%". $k ."%' OR alamat LIKE '%". $k ."%' OR kota LIKE '%".$k."%' ";
		   }
		   else {
			$sql = $sql = "SELECT * FROM mhs";
		   } 
		
        $que = mysqli_query($sambungan, $sql);//eksekusi perintah $sql
        $no=1;
        while ($data=mysqli_fetch_array($que))
        {
            //deklarasi database
            //var      //wajib sama dengan yg di database
            $nim   = $data['nim'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $kota   = $data['kota'];
 
            echo
            "
                <tr>
                    <td align='center'>$no</td>
                    <td>$nim</td>
                    <td>$nama</td>
                    <td>$alamat</td>
                    <td>$kota</td>
                    <td>
                        <a href='mhs-edit.php?nim=$nim'>Edit</a>
                        <a onClick=\"javascript: return confirm('Hapus data ini?');\" href='mhs-hapus.php?nim=$nim' >Hapus</a>
                    </td>
                </tr>
            ";
            $no++;
        }
 
    ?>
</table>
</body>
</html>