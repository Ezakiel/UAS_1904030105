<?php 

 $conn = mysqli_connect("localhost","root","","uas_1904030105");



 function query($query) {
     global $conn;
     $result = mysqli_query( $conn, $query);
     $rows = [];
     while ( $row = mysqli_fetch_assoc($result)){
         $rows[] = $row;
     }
     return $rows;
 }
 function tambah($data)
{
global $conn;

$id= htmlspecialchars($data['id_barang']);
$nama = htmlspecialchars($data['nama_barang']);
$foto = htmlspecialchars($data['foto_barang']);
$harga =htmlspecialchars ($data['harga_barang']);
$stock =htmlspecialchars ($data['stock_barang']);

$query = "INSERT INTO data_barang
values
('','$nama','$foto','$harga','$stock');";
mysqli_query($conn,$query);

echo mysqli_error($conn);
return mysqli_affected_rows($conn);
}
function hapus($id_barang){
    global $conn;
    mysqli_query($conn,"DELETE FROM data_barang WHERE id_barang = $id_barang");
    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    $id= ($data['id_barang']);
    $nama = htmlspecialchars($data['nama_barang']);
    $foto = htmlspecialchars($data['foto_barang']);
    $harga =htmlspecialchars ($data['harga_barang']);
    $stock =htmlspecialchars ($data['stock_barang']);

    $query = "UPDATE data_barang SET 
                nama_barang ='$nama',
                foto_barang = '$foto',
                harga_barang = '$harga',
                stock_barang = '$stock'
                WHERE id_barang = '$id';
               ";

mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);

}

?>