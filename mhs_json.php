<?php
    include "koneksi.php";

    $sql="select * from mahasiswa order by Nim";
    $tampil = mysqli_query($con,$sql); 
    if (mysqli_num_rows($tampil) > 0) {
    $no=1;
    $response = array();
    $response["data"] = array();
   
    while ($r = mysqli_fetch_array($tampil)) {
    $h['Nim'] = $r['Nim'];
    $h['Nama'] = $r['Nama'];
    $h['Jenis_Kelamin'] = $r['Jenis_Kelamin'];
    $h['Alamat'] = $r['Alamat'];
    $h['Tgl_Lahir'] = $r['Tgl_Lahir']; 
    array_push($response["data"], $h);
    }
    echo json_encode($response);
    }
    else {
    $response["message"]="tidak ada data"; 
    echo json_encode($response);
    }
?>
