<html>
    <head>
        <title>Tugas Modul 11</title>
    </head>
    <body>
        <h1></h1> 
        <?php
        $host = "localhost";//untuk host
        $username = "root";//username
        $password = "";//password
        $database = "db_sekolah";//nama db
        
        $koneksi = new mysqli($host,$username,$password,$database);

        //cek
        if ($koneksi->connect_error) {
            die("Koneksi gagal: " . $koneksi->connect_error);
        }
        ?>
    </body>
    </html>