<?php 
//  $product_img_name   = $_FILES['product_img_name']['name'];
  // Apabila gambar tidak diganti
  //if (empty($product_img_name)){
    //$mysqli->query("UPDATE users SET phone     = '$_POST[phone]',
      //                  type    = '$_POST[type]
        //            WHERE id = '$_POST[id]'");
  //}else{

    $hapus= $mysqli->query("select*from users where id='$_POST[id]'");
    // menghapus gambar yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['product_img_name'];
    // alamat tempat foto
    $hapus_gambar="../images/$lokasi";
    // script untuk menghapus gambar dari folder
  //  unlink($hapus_gambar);
  //  move_uploaded_file($_FILES['product_img_name']['tmp_name'],'../images/'.$product_img_name);
    $mysqli->query("UPDATE users SET phone     = '$_POST[phone]', type = '$_POST[type]'");
  //}
echo "<script>alert('Data berhasil diubah!');history.go(-2);</script>";
?>