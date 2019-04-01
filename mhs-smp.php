<?php
 
    include 'koneksi.php';
    $nim   = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kota  = $_POST['kota'];
 
     
    $sql = "INSERT INTO mhs VALUES('$nim', '$nama', '$alamat', '$kota')";
    $que = mysqli_query($sambungan, $sql); 
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah disimpan');
                window.location='mhs-data.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal disimpan');
                window.location='mhs-tmh.php';
            </script>
        ";
    }
    //penyimpanan
 
?>