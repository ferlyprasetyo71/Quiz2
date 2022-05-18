<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tokobuku";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    if($connect){
        echo "KBerhasil Terkoneksi ke MySQL<br>";
    }else{
        echo "Koneksi ke MySQL tidak Berhasil" . mysqli_connect_error();
    }

    $query = "CREATE TABLE admin(
            id_admin INT PRIMARY KEY AUTO_INCREMENT,
            username VARCHAR(20) NOT NULL,
            password VARCHAR(50) NOT NULL
            )";

    if(mysqli_query($connect, $query)){
        echo "Tabel admin berhasil dibuat di dalam database tokobuku";
    }else{
        echo "Tabel admin gagal <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>