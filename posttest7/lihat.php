<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM hotel");
?>

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

        <div class="list-table">
            <h3>Daftar Hotel</h3>
            <form action="" method="GET" id="cari_data">
            <table>
                <tr>
                    <td>
                    <div class="form-outline">
                        <input type="text" name="keyword" id="keyword" class="form-control" placeholder = "Cari Informasi...">
                    </div>
                    </td>
                    <td>
                    <input type="submit" name="cari" value="cari">
                    </td>
                </tr>
            </table>
            </form>
            
            <table>
                <tr class="thead">
                    <th>No</th>
                    <th nowrap>Nama Hotel</th>
                    <th>Harga</th>
                    <th>No Telpon</th>
                    <th class="alamat">Alamat</th>
                    <th class="pict">Gambar Hotel</th>
                    <th>Tanggal Upload</th>
                </tr>

                <?php 
                    require 'config.php';
                    $result = $db->query("SELECT * FROM hotel");
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){

                ?>

                <tr>
                    <td><?=$i;?></td>
                    <td nowrap><?=$row['nama_hotel']?></td>
                    <td><?=$row['harga']?></td>
                    <td><?=$row['no_hp']?></td>
                    <td><?=$row['alamat']?></td>
                    <td><img src="img/<?=$row['pict']?>" alt="" width="100px"></td>
                    <td><?=$row['tglready']?></td>
                </tr>
                
                <?php
                    $i++; 
                        }
                ?>

            </table>
        </div>
        
    </body>
</html>