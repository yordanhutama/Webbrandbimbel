<?php
 require_once('koneksi.php'); 
$query_siswa = "SELECT * FROM data-siswa";
$siswa = mysql_query($query_siswa) or 
die(mysql_error());
$row_siswa = mysql_fetch_assoc($siswa);
$totalRows_siswa = mysql_num_rows($siswa);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table style="width:100%; border-spacing:0;">
        <tr>
          <th colspan="6"><div align="center">Daftar Menu Makanan </div></th>
        </tr>
        <tr>
        <td>ID Menu</td>
          <td>Nama</td>
          <td>Harga</td>
          <td>Status</td>
		  <td >Aksi</td>
        </tr>
        <?php  do { ?>
        <tr>

          <td align = 'center' bgcolor = 'silver'><?php echo $row_siswa['username']; ?></td>
          <td align = 'center' bgcolor = 'silver'><?php echo $row_siswa['password']; ?></td>
          <td align = 'center' bgcolor = 'silver'><?php echo $row_siswa['nama']; ?></td>
          <td align = 'center' bgcolor = 'silver'><?php echo $row_siswa['sekolah_asal']; ?></td>
          <td align = 'center' bgcolor = 'silver'><?php echo $row_siswa['no_telepon']; ?></td>
              <label>
              <input type="hidden" name="jumlah" id="jumlah">
              <input type="hidden" name="total" id="total">
              </label></td>
			  
			 <td><a href="edit_menu.php?id=<?php echo $row_pesanan['id_menu']; ?>" > 
                    Edit</a>       | <a href="hapus_menu.php?id=<?php echo $row_pesanan['id_menu']; ?>"   onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $row_pesanan['nama_menu']; ?>?')"> 
                    Hapus</a>   </td>

          </tr>
        </tr>
        <?php } while ($row_pesanan = mysql_fetch_assoc($pesanan));
						
						 ?>
      </table>
</body>
</html>
