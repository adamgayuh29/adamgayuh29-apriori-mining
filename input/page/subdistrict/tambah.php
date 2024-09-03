 <div class="panel panel-default">
 	<div class="panel-heading">
 		Create Subdistrict
 	</div>

 	<div class="panel-body">
 		<div class="row">
 			<div class="col-md-6">
 				
 				<form method="POST">
 					<div class="form-group">
 						<label>Subdiskrit</label>
 						<input class="form-control" name="subdistrict" />  
 					</div>

 					<div>
 						<input type="submit" name="simpan" value="Simpan" style="margin-top: 8px"  class="btn btn-primary">
 						<input type="button" value="Kembali" class="btn btn-danger" style="margin-top: 8px" onclick="history.back(-1)" />
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>

 <?php

 $subdistrict = $_POST ['subdistrict'];
 
 $simpan = $_POST ['simpan'];
 if ($simpan )

 {

 	$sql = $koneksi->query("insert into subdistrict (name_subdistrict)value('$subdistrict')");

 	if ($sql)
 	{
 		?>		
 		<script type="text/javascript">
 			alert ("Data Berhasil Disimpan");
 			window.location.href="?menu=input_data_report&input=masuk&page=subdistrict";
 		</script>
 		<?php
 	}
 }

 ?>