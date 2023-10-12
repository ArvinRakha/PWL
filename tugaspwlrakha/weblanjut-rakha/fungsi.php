<?php
//membuat koneksi ke database mysql
// $koneksi=mysqli_connect('192.168.10.253','a122106652','polke001','a122106652');
$koneksi=mysqli_connect('localhost','root','','pwlgenap2019-akademik');


function enkripsiurl($id){
    $enc = base64_encode(rand() * strtotime(date("H:i:s"))."-".$id);
    return $enc;
}
function deskripsiurl($string)
{
    $kode = base64_decode($string);
    $id = explode("-", $kode);
    return count($id)> 1 ? $id[1] : 0;
}
?>