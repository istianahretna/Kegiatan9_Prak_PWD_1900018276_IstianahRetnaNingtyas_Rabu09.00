<?php
$host="localhost";  //mendefinisi nama host database nya yaitu "localhost"
$username="root";    //mendefinisi nama username  database nya yaitu "root"
$password="";   //mendefinisikan password nya, kalo tidak pake password maka di kosongkan
$databasename="akademik"; //mendefinisikan nama database yang dibuat pada projek ini yaitu "akademik" dan disesuaikan dengan yang ada di database

    // mebuat koneksi , fungsi @ berguna ketika script yang dijalankan itu eror maka tetep bisa runing programnya
    $con=@mysqli_connect($host,$username,$password,$databasename);

    // mengecek koneksi, jika fungsi con/koneksi error maka akan gagal dan keluar
    if (!$con) {

     echo "Error: ".mysqli_connect_error(); //berfungsi untuk memberika informasi ke kita terkait bagian syntak yang salah
        exit();
    }
?>
