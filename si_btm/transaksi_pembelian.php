<?php
require('db_conn.php');
require('Class/Pembelian.php');
require('Class/Pembelian_Info.php');

include('header.php');
?>
<div id="transaksi_pembelian">
<form action="transaksi_pembelian.php" method="post">
<table>
<tr>
  <td>ID: </td>
  <td><input type="text" name="pembelianID"></td>
</tr>
<tr>
  <td>Nota: </td>
  <td><input type="text" name="notaPembelian"></td>
</tr>
<tr>

</tr>
</table>
</form>
</div>
<?php
include('footer.php');
?>