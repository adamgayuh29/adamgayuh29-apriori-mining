<?php

error_reporting(0);

session_start();

$koneksi = new mysqli("localhost","root","","apriori_toko");

if ($_SESSION['apriori_toko_id']) {

    ?>

<section class="page_head">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">

                        </br>
                    <h2>Input Data Report</h2>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="panel-body">
        <div class="row">
            <div class="row">
                <div class="col-lg-2 ">
                    <nav class="navbar-default navbar-side" role="navigation">
                        <div class="sidebar-collapse">
                            <ul class="nav" id="main-menu">
                                <li>
                                    <a  href="?menu=input_data_report&input=masuk&page=report"><i class="fa fa-file-text fa-3x"></i> Input Report</a>
                                </li>

                                <li>
                                    <a  href="?menu=input_data_report&input=masuk&page=subdistrict"><i class="fa fa-file-text-o fa-3x"></i> Input Subdistrict</a>
                                </li>

                                <li>
                                    <a  href="?menu=input_data_report&input=masuk&page=branch"><i class="fa fa-clipboard fa-3x"></i> Input Branch</a>
                                </li>

                                <li>
                                    <a  href="?menu=input_data_report&input=masuk&page=issue_problem"><i class="fa fa-file fa-3x"></i> Input Issue Problem</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                <!-- col-md-6 -->
                </div>
                <div class="col-lg-9 " >
                    <!--  <div class="col-md-6"> -->
                                <?php 

                                $input = $_GET["input"];
                                $page = $_GET["page"];
                                $aksi = $_GET['aksi'];

                            if($input == "masuk") 
                            {
                                if($page == "subdistrict") 
                                {
                                    if($aksi == "")
                                    {
                                        include "input/page/subdistrict/subdistrict.php";
                                    }
                                    
                                    elseif($aksi=="tambah")
                                    {
                                        include "input/page/subdistrict/tambah.php";
                                    } 

                                    elseif($aksi=="ubah")
                                    {
                                        include "input/page/subdistrict/ubah.php";
                                    }
                                    elseif ($aksi=="hapus")
                                    {
                                     include "input/page/subdistrict/hapus.php";
                                     }
                                 }

                                elseif ($page == "issue_problem") 
                                {
                                    if ($aksi == "") 
                                    {
                                        include "input/page/issue_problem/issue_problem.php";
                                    }
                                    else if ($aksi == "tambah")
                                    {
                                        include "input/page/issue_problem/tambah.php";
                                    }
                                    else if ($aksi == "ubah") 
                                    {
                                        include "input/page/issue_problem/ubah.php";
                                    }
                                    else if ($aksi == "hapus") 
                                    {
                                        include "input/page/issue_problem/hapus.php";
                                    }
                                }

                                elseif ($page == "report") 
                                {
                                    if ($aksi == "") 
                                    {
                                        include "input/page/report/report.php";
                                    }
                                    else if ($aksi == "tambah")
                                    {
                                        include "input/page/report/tambah.php";
                                    }
                                    else if ($aksi == "ubah") 
                                    {
                                        include "input/page/report/ubah.php";
                                    }
                                    else if ($aksi == "hapus") 
                                    {
                                        include "input/page/report/hapus.php";
                                    }
                                }
                                elseif ($page == "branch") 
                                {
                                    if ($aksi == "") 
                                    {
                                        include "input/page/branch/branch.php";
                                    }
                                    else if ($aksi == "tambah")
                                    {
                                        include "input/page/branch/tambah.php";
                                    }
                                    else if ($aksi == "ubah")
                                    {
                                        include "input/page/branch/ubah.php";
                                    }
                                    else if ($aksi == "hapus") 
                                    {
                                        include "input/page/branch/hapus.php";
                                    }
                                }
                                elseif ($page == "") 
                                {
                                    include "../../dashboard-admin.php";
                                }
                            }

                                ?>
                            </div>
                        </div>
                        <!-- /. ROW  -->
                        <hr />
                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
                <!-- /. PAGE WRAPPER  -->


</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="../assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="../assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="../assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="../assets/js/dataTables/jquery.dataTables.js"></script>
<script src="../assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>

<?php
}else{
    header("location:header.php");
}
?>