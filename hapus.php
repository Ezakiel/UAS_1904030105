<?php 
require "function.php";
$id_barang = $_GET["id_barang"];
if(hapus($id_barang) > 0 ){
    echo
    "<script>
    alert('data berhasil di hapus');
    document.location.href = 'tables.php';
    </script>";
  }else{
    "<script>
    alert('data tidak berhasil di hapus');
    </script>";
  }

  





?>