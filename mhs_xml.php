<?php
    include "koneksi.php"; 
    header('Content-Type: text/xml');
    $query = "SELECT * FROM mahasiswa";
    $hasil = mysqli_query($con,$query);
    $jumField = mysqli_num_fields($hasil);

    echo "<?xml version='1.0'?>"; 
    echo "<data>";
    
    while ($data = mysqli_fetch_array($hasil))
    {
    echo "<mahasiswa>"; 
    echo"<nim>",$data['Nim'],"</nim>"; 
    echo"<nama>",$data['Nama'],"</nama>"; 
    echo"<jkel>",$data['Jenis_Kelamin'],"</jkel>"; 
    echo"<alamat>",$data['Alamat'],"</alamat>"; 
    echo"<tgllhr>",$data['Tgl_Lahir'],"</tgllhr>"; 
    echo "</mahasiswa>";
    }
    echo "</data>";
?>
