<?php
	$id =$_GET ['id'];
	$koneksi->query("delete from transaksi where id='$id'");
?>

<script type="text/javascript">
	window.location.href="?menu=input_data_report&input=masuk&page=report"; 
</script>