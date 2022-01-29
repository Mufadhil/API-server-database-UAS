<?php

include "../config/koneksi.php";

$buku = @$_POST['buku'];
$alamat = @$_POST['alamat'];

$data = [];

$query = mysqli_query($kon, "INSERT INTO  `buku`
  ( `buku`,`alamat``)
   VALUES
   ('". $buku ."','". $alamat ."')");

    if($query){
       $status = true;
       $pesan = "request success";
       $data[]= $query;
    }else{
        $status = false;
        $pesan = "request failed";
    }

    $json = [
       "status" => $status,
       "pesan" => $pesan,
       "data" => $data,
    ];

    header("Content-Type: application/json");
    echo json_encode($json);

    ?>