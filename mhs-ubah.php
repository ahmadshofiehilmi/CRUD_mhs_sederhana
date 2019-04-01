<?php
 
    include 'koneksi.php';
    $nim     = $_POST['nim'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
 
    //perintah sql untuk menyimpan ke database
    $sql = "UPDATE mhs SET nim='$nim', nama='$nama', alamat='$alamat', kota ='$kota' WHERE nim='$nim'";
     
    $que = mysqli_query($sambungan, $sql); 
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah diubah');
                window.location='mhs-data.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal diubah');
                window.location='mhs-edit.php?id=$id';
            </script>
        ";
    }
    //penyimpanan
?>