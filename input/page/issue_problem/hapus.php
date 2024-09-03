<?php
	$id =$_GET ['id'];
	$koneksi->query("delete from issue_problem where id='$id'");
?>

<script type="text/javascript">
	window.location.href="?menu=input_data_report&input=masuk&page=issue_problem"; 
</script>