<?php 
include "librari/koneksi.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BukuTamu</title>
<style type="text/css">
<!--
.style10 {font-weight: bold; color: #000000;}
.style12 {color: #FFFFFF; font-weight: bold; }
.style14 {color: #FFFFFF}
.style15 {font-weight: bold; color: #0000FF; }
-->
</style></head>

<body>
<div align="center">
  <form action="../webHolicS/?page=bukutamu" method="post" name="form2" >
      <table width="500" border="1" cellpadding="0" cellspacing="0" bordercolor="#ff6633">
        <tr>
          <td bgcolor="#ff6633"><div align="center"><span class="style12 style14">DAFTAR BUKU TAMU </span></div></td>
        </tr>
        <tr>
          <td><table width="500" align="center">
        
        <tr valign="baseline" bgcolor="#FFFFFF">
          <td align="right" nowrap><div align="left" class="style15">Nama Lengkap </div></td>
          <td><div align="left" class="style10">
            <input name="TxtNama" type="text" id="TxtNama" value="<?php echo $TxtNama;?>" size="32">
          </div></td>
        </tr>
        <tr valign="baseline" bgcolor="#FFFFFF">
          <td align="right" nowrap><div align="left" class="style15">Email</div></td>
          <td><div align="left" class="style10">
            <input name="TxtEmail" type="text" id="TxtEmail" value="<?php echo $TxtEmail;?>" size="32">
          </div></td>
        </tr>
        <tr valign="baseline" bgcolor="#FFFFFF">
          <td align="right" valign="top" nowrap><div align="left" class="style15">Komentar</div></td>
          <td><div align="left" class="style10">
            <textarea name="TxtKomentar" cols="30" rows="3" id="TxtKomentar"><?php echo $TxtKomentar;?></textarea>
          </div></td>
        </tr>
        <tr valign="baseline" >
          <td align="right" nowrap>&nbsp;</td>
          <td ><span class="style10">
            <input name="simpan" type="submit" id="simpan" value="Simpan">
            <input name="reset" type="reset" id="reset" value="Batal" />
          </span></td>
        </tr>
    </table>
          <div align="center"><strong>Lihat Buku Tamu </strong></div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
      
   
  <p align="left">&nbsp;</p>
  </form>
</div>
</body>
</html>
