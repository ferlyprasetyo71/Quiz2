<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname, $username, $password);

    if($connect){
        echo "Berhasil Terkoneksi ke MySQL<br>";
    }else{
        echo "Koneksi ke MySQL tidak berhasil" . mysqli_connect_error();
    }

    $query = "CREATE DATABASE tokobuku";
    if(mysqli_query($connect, $query)){
        echo "Database berhasil dibuat";
    }else{
        echo "Database gagal dibuat <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>