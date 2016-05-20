<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 12/16/2015
 * Time: 8:28 AM
 */
if(!isset($_SESSION['userid'])) {
    $this->load->view('signin');
    exit();
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Cladbox :: Orders</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="../cltres/css/ie/html5shiv.js"></script><![endif]-->
    <script src="../cltres/js/jquery.min.js"></script>
    <script src="../cltres/js/jquery.scrolly.min.js"></script>
    <script src="../cltres/js/jquery.scrollzer.min.js"></script>
    <script src="../cltres/js/skel.min.js"></script>
    <script src="../cltres/js/skel-layers.min.js"></script>
    <script src="../cltres/js/init.js"></script>
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <noscript>
        <link rel="stylesheet" href="../cltres/css/skel.css" />
        <link rel="stylesheet" href="../cltres/css/style.css" />
        <link rel="stylesheet" href="../cltres/css/style-wide.css" />
    </noscript>
    <!--[if lte IE 9]><link rel="stylesheet" href="../cltres/css/ie/v9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="../cltres/css/ie/v8.css" /><![endif]-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="../js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
<div id="header" class="skel-layers-fixed">
    <?php
    include('admnsdmenu.php');
    ?>
</div>
<div id="main">
    <section id="contactdetof" class="two">
        <!-- <div id="page-wrapper" >-->
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach($orders as $row){
                                    $time = strtotime($row['transdate']);

                                    $date = date('l d-m-Y',$time);
                                    $total = number_format($row['totals']);

                                    // <!-- while loop to load catalogue-->
                                    echo "<tr class='gradeU'>";
                                    ?>
                                    <form action="vieworder" method="post">
                                        <?php
                                        echo "<td>$row[name]</td>";
                                        echo "<td>$row[phone]</td>";
                                        echo "<td>$date </td>";
                                        echo "<td>KES $total</td>";
                                        echo "<input type='hidden' id='eid' name='eid' value='$row[key]' />";
                                        echo " <td><button class='btn btn-primary' type='submit'><i class='fa fa-eye' ></i> View orders</button></td>";
                                        echo " </tr>";
                                        echo "</form>";
                                        }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div></div>


</div>
</section>
</div>
<script src="../js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="../js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="../js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="../js/dataTables/jquery.dataTables.js"></script>
<script src="../js/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTables-example').dataTable();
    });
</script>
<!-- Custom Js -->
<script src="../js/custom-scripts.js"></script>
</body>
</html>