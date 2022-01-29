<?php

include "../config/koneksi.php";

$id = @$_POST['id'];
$nama = @$_POST['nama'];
$alamat = @$_POST['alamat'];

$data = [];

$query = mysqli_query($kon, "UPDATE `buku tamu` SET

`nama` = '". $nama."',
`alamat` = '". $alamat."',
WHERE  `id` = '". $id ."'");

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