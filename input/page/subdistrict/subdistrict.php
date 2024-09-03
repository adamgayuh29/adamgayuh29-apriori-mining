  <div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
             Input Subdistrict 
         </div>
         <div class="panel-body">
            <div class="table-responsive">
                <a href="?menu=input_data_report&input=masuk&page=subdistrict&aksi=tambah" class="btn btn-success"><i class="fa fa-plus"></i> Input Subdistrict </a>
               
                <!-- export data to excel -->
                <!-- <a href="./laporan/laporan_buku_excel.php" target="blank" class="btn btn-default"><i class="fa fa-print"></i>Export To Excel </a> -->
                <table class="table table-striped" id="dataTables-example" width="100% ">
                    <thead>
                        <tr>
                            <th width="10">No</th>
                            <th>Subdiskrit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $sql = $koneksi->query("select * from subdistrict");

                        while ($data=$sql->fetch_assoc()) {


                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data["name_subdistrict"]; ?></td>
                                <td>
                                    <a href="?menu=input_data_report&input=masuk&page=subdistrict&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-info">Ubah</a>
                                    <a onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini ?')"
                                    href="?menu=input_data_report&input=masuk&page=subdistrict&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>

                            <?php
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
