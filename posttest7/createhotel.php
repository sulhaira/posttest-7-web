<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoWisata</title>
    <link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <header>
        <h2>Informasi List Hotel InfoWisata</h2>
    </header>
    
    <div class="form-class">
        <h3>Tambah Hotel</h3>
        <form action="" method="post" enctype="multipart/form-data" >
            
            <label for="">Nama Hotel</label><br>
            <input type="text" name="nama_hotel" class="form-text"><br>
            
            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text"><br>
            
            <label for="">No Telpon</label><br>
            <input type="text" name="no_hp" class="form-text"><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="135" rows="10"></textarea><br>

            <label for="">Nama File</label><br>
            <input type="text" name="namafile"><br>

            <label for="">Upload Gambar Hotel</label>
            <input type="file" name="gambar"><br>
            
            <label for="">Tanggal Upload</label>
            <input type="date" name="tglready" value="<?=date("d-m-Y")?>"><br>
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>
<?php
    
    require 'config.php';

    if(isset($_POST['submit'])){
        // ambil dari name html
        $namahotel = $_POST['nama_hotel'];
        $harga = $_POST['harga'];
        $nohp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $tglready = $_POST['tglready'];
        $namafile = $_POST['namafile'];
        $gambar = $_FILES['gambar']['name'];
        // $ukuran = $_FILES['gambar']['size'];

        $x = explode('.',$gambar);
        $ekstensi = strtolower(end($x));
        $gambar_baru = "$namafile.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        
        if(move_uploaded_file($tmp, 'img/'.$gambar_baru)){
            
            $kirim = mysqli_query($db, "INSERT INTO hotel (nama_hotel,harga,no_hp,alamat,pict ,tglready) VALUES ('$namahotel','$harga','$nohp','$alamat','$gambar_baru', '$tglready')");


            if($kirim){
                header("Location:index.php");
            }else {
                echo "gagal mengirim";
            }

        }

        
    }

?>

