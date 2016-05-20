<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 8/12/2015
 * Time: 9:02 AM
 */
if(!isset($_SESSION['userid'])) {
    $this->load->view('signin');
    exit();
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Cladbox :: Approve order</title>
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
    <style type="text/css">

        .scrolltable {
            overflow-x: scroll;
            height: 100%;
            display: flex;
            display: -webkit-flex;
            flex-direction: column;
            -webkit-flex-direction: column;
        }
        .scrolltable > .header {
        }
        .scrolltable > .body {
            /*noinspection CssInvalidPropertyValue*/
            width: inherit;
            overflow-y: scroll;
            flex: 1;
            -webkit-flex: 1;
        }

        th, td {
            min-width: 150px;
        }

        /* an outside constraint to react against */
        #constrainer {
            width: inherit;
            height: inherit;
        }

        /* only styling below here */
        #constrainer, #constrainer2 {
            border: 1px solid lightgrey;
        }
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid gray;
        }
        th {
            background-color: lightgrey;
            border-width: 1px;
        }
        td {
            border-width: 1px;
        }
        tr:first-child td {
            border-top-width: 0;
        }
        tr:nth-child(even) {
            background-color: #eee;
        }


    </style>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="approve" name="itemdetails" onsubmit="">
    <!-- Header -->
    <div id="header" class="skel-layers-fixed">
        <?php
        include('admnsdmenu.php');
        ?>
    </div>

    <!-- Main -->
    <div id="main">
        <!-- info -->
        <section id="logolocation" class="one dark cover">
            <div class="container">

                <header>
                    <h2>Approve order</h2>
                </header>
            </div>
        </section>

        <!-- photo -->
        <section id="contactdetof" class="two">
            <?php

            foreach ($clients as $client){

                $name = $client['name'];
                $email = $client['email'];
                $key = $client['key'];
                $phone = $client['phone'];
                $add = $client['address'];
            }
            ?>
            <div class="container">
                <header>
                    <h2>client</h2>
                </header>

                <div align="left"><p align="left" ><h1>Client Details</h1></p></div>
                <div class="row 50%">
                    <div class="4u">

                    <input  type="text" name="name" id="name" readonly value="<?= $name ?>"  style="border: none"/></div>

                <div class="4u">

                    <input  type="number" name="phone" id="phone" readonly value="<?= $phone ?>"  style="border: none"/></div>


                <div class="4u">
                    <input  type="text" name="email" id="email" readonly value="<?= $email ?>"  style="border: none"/></div>

                </div>

                </div>
            </section>
                <section id="contact" class="three">
                    <div class="container">
                        <div align="left"><p>Clients Address.</p></div>
                    <div class="row">
                        <div class="12u">
                            <textarea name="message" readonly style="border: none"> <?=$add ?></textarea>
                        </div>
                    </div>
                        </div>
                </section>
        <section id="contact" class="two">
            <div class="container">
                <div id="constrainer">
                <div class="scrolltable">
                    <table class="header" id="addsize"><thead>
                        <th>Name</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        </thead>
                            <tbody>
                            <?php
                            $total = 0;
                            $num = 1;
                                foreach($orders as $order){
                                    echo"<tr>";
                                    echo "<td>$order[name]</td>";
                                    echo "<td>$order[size]</td>";
                                    echo "<td>$order[quantity]</td>";
                                    echo "<td>$order[price]</td>";
                                    echo "<td>$order[total]</td>";
                                    echo "</tr>"; ?>

                                    <input type='hidden'  name='key<?=$num?>' value= <?= $order['itemid']?> >
                                    <input type='hidden' name='qty<?=$num?>' value=<?=$order['quantity']?>>
                                    <input type='hidden' name='size<?=$num?>' value=<?=$order['sizeid']?>>

                                    <?php
                                    $total += $order['total'];
                                    $num++;
                                }
                            ?>
                            </tbody>
                        <tfoot>
                        <tr >
                            <td colspan="3"></td>
                            <td>Total</td>
                            <td><span class="m_6" id="tot"><?php echo $total ?> </span>
                        </tr>
                        </tfoot>
                        </table>
                    </div>
                </div>
                    <input type='hidden' id='itemid' name='itemid' value="<?= $key ?>" style='width: 40px'>
                    <input type='hidden' id='total' name='total' value="<?= $total ?>" style='width: 40px'>
                    <input type='hidden' id='items' name='items' value="<?= $num ?>" style='width: 40px'>
                </div>
        </section>

        <section id="submit" class="three">
            <div class="container" >
                <div class="row">
                    <div class="12u">
                        <input type="submit" value="Approve Order" />
                    </div>
                </div>
        </section>
    </div>
</form>

<!-- Footer -->
<div id="footer">

    <!-- Copyright -->
    <ul class="copyright">
        <li>&copy; cladbox. All rights reserved.</li><li>Design: <a href="http://www.kaizenkenya.co.ke">Ryda inc.</a></li>
    </ul>

</div>

</body>
</html>
