 <?php

 $date = date("d-m-Y");

 ?>

 <div class="panel panel-default">
 	<div class="panel-heading">
 		Create Report
 	</div>

 	<div class="panel-body">
 		<div class="row">
 			<div class="col-md-6">
 				<form method="POST">
 					<div class="form-group">
 						<label>Date</label>
	 						<div class="input-group">
	                            <div class="input-group-addon">
	                            	<i class="fa fa-calendar"></i>
	                            </div>
								<!-- id="reservation" -->	
								<input class="form-control" type="date" name="date" 
								id="tgl" placeholder="Date range"  value="<?php echo($date) ?>"  /> 
							</div>
					</div> 
 					<!-- date -->
 	
 					<div class="form-group">
 						<label>Subdistrict</label>
							<select class="form-control" name="subdistrict">
 							<?php
	 							$sql = $koneksi->query("select * from subdistrict order by id");
	 							while ($data=$sql->fetch_assoc()) {
	 								echo "<option value='".$data["name_subdistrict"]."'>".$data["name_subdistrict"]."</option>";
	 							}
 							?>
 						</select> 					
 					</div>
 					<!-- subdistrict -->
 					
					<div class="form-group">
 						<label>Branch</label>
 						<select class="form-control" name="branch">
 							<?php
	 							$sql = $koneksi->query("select * from branch order by id");
	 							while ($data=$sql->fetch_assoc()) {
	 								echo "<option value='$data[branch]'>$data[branch]</option>";
	 							}
 							?>
 						</select> 
 					</div>
 					<!-- Branch -->

 					<div class="form-group">
 						<label>Issue Problem</label>
 						<select class="form-control" name="issue_problem">
 							<?php
	 							$sql = $koneksi->query("select * from issue_problem order by id");
	 							while ($data=$sql->fetch_assoc()) {
	 								echo "<option value='$data[issue_problem]'>$data[issue_problem]</option>";
	 							}
 							?>
 						</select> 	
 					</div>
 					<!-- Issue Problem -->

 					
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

 $date = $_POST ['date'];
 $report = $_POST['subdistrict'].','.$_POST['issue_problem'].','.$_POST['branch'];
 
 $simpan = $_POST ['simpan'];
 if ($simpan )

 {

 	$sql = $koneksi->query("insert into transaksi (transaction_date, produk)value('".$date."', '".$report."' )");

 	if ($sql)
 	{
 		?>		
 		<script type="text/javascript">
 			alert ("Data Berhasil Disimpan");
 			window.location.href="?menu=input_data_report&input=masuk&page=report";
 		</script>
 		<?php
 	}
 }

 ?>