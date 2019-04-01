<?php
    include 'koneksi.php';
    $sql = "DELETE FROM mhs";
    $que = mysqli_query($sambungan, $sql); 
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah dihapus');
                window.location='mhs-data.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal dihapus');
                window.location='mhs-data.php';
            </script>
        ";
    }
 
?>