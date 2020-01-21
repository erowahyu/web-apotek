<?php 
  $product_img_name   = $_FILES['product_img_name']['name'];
  // Apabila gambar tidak diganti
  if (empty($product_img_name)){
    $mysqli->query("UPDATE products SET product_name     = '$_POST[product_name]',
                        product_code    = '$_POST[product_code]',
                        qty = '$_POST[qty]',
                        price  = '$_POST[price]'
                    WHERE id = '$_POST[id]'");
  }else{

    $hapus= $mysqli->query("select*from products where id='$_POST[id]'");
    // menghapus gambar yang lama
    $nama_gambar=mysqli_fetch_array($hapus);
    // nama field gambar
    $lokasi=$nama_gambar['product_img_name'];
    // alamat tempat foto
    $hapus_gambar="../images/$lokasi";
    // script untuk menghapus gambar dari folder
    unlink($hapus_gambar);
    move_uploaded_file($_FILES['product_img_name']['tmp_name'],'../images/'.$product_img_name);
    $mysqli->query("UPDATE products SET product_name     = '$_POST[product_name]', product_code = '$_POST[product_code]', qty = '$_POST[qty]', price  = '$_POST[price]' WHERE id = '$_POST[id]'");
  }
  echo "<script>alert('Data berhasil di ubah!');history.go(-2);</script>";
  //header('location:index.php');
?>