

<!-- require 'config.php';

if(isset($_POST['submit'])){
    $nama_hotel = $_POST['nama_hotel'];
    $harga = $_POST['harga'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $gambar = $_POST[''];

    $kirim = mysqli_query($db, "INSERT INTO hotel (nama_hotel,harga,no_hp,alamat) VALUES ('$nama_hotel','$harga','$no_hp','$alamat')");


    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:index.php");
    }else {
        echo "gagal mengirim";
    }
} -->

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
            $query = "INSERT INTO hotel (nama_hotel, harga, no_hp, alamat,pict ,tglready)
                        VALUES ('$namahotel', '$harga, $nohp, '$alamat','$gambar_baru', '$tglready')";
            $result = $db->query($query);

            if($result){
                header("location:index.php");
            }else{
                echo "gagal kirim";
            }

        }

        
    }

?>