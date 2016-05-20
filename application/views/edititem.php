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
    <title>Cladbox :: Edit item </title>
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
    <script type="text/javascript">
        function validate_form(){
            valid = true;

            if ( document.itemdetails.price.value == "" )
            {
                alert ( "Please Enter a price!" );
                valid = false;
                document.itemdetails.price.focus();
            }
            else if ( document.itemdetails.name.value == "" )
            {
                alert ( "Please Enter a name for the item!" );
                valid = false;
                document.itemdetails.name.focus();
            }

            return valid;
        }
    </script>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="updatedetails" name="itemdetails" onsubmit="return validate_form()">
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
                    <h2>Edit product</h2>
                </header>
            </div>
        </section>

        <!-- photo -->
        <section id="contactdetof" class="two">
            <?php

            foreach ($item as $row){

                $photo = $row['photo'];
                $name = $row['name'];
                $price = $row['price'];
                $id = $row['itemid'];
                $desc = $row['briefdesc'];
                $deleted = $row['deleted'];
            }
            ?>
            <div class="container">
                <header>
                    <h2>Item</h2>
                </header>
                <div class="row">
                    <div class="4u">
                        <article class="item">
                            <a href="#" class="image fit"><img src="<?=$photo ?>" alt="" /></a>
                            <header>
                                <h3><?= $name ?></h3>
                            </header>
                        </article>
                    </div>

                </div>

                <div align="left"><p align="left" ><h1>Item Details</h1></p></div>
                <div class="row 50%">
                    <div class="4u">

                    <input  type="text" name="name" id="name" value="<?= $name ?>"  style="border: none"/></div>

                    </select>
                <div class="4u">

                    <input  type="number" name="price" id="price" value="<?= $price ?>"  style="border: none"/></div>


                <div class="4u"><select id="deleted" name="deleted" style="border: none" >
                            <option value=''>Choose state</option>
                            <option value='1'>delete</option>
                            <option value='0'>Restore</option>

                        </select>
                    </div>
                </div>

                </div>
            </section>
                <section id="contact" class="three">
                    <div class="container">
                        <div align="left"><p>Brief description of Item.</p></div>
                    <div class="row">
                        <div class="12u">
                            <textarea name="message" style="border: none"> <?=$desc ?></textarea>
                        </div>
                    </div>
                        </div>
                </section>
        <section id="contact" class="two">
            <div class="container">
                <div id="constrainer">
                <div class="scrolltable">
                    <table class="header" id="addsize"><thead><th>Size</th><th>Quantity</th></thead>
                            <tbody>
                            <?php
                                foreach($sizes as $size){
                                    echo"<tr>";
                                    echo "<td>$size[size]</td>";
                                    echo "<td>$size[quantity]</td>";
                                    echo "</tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                    <input type='hidden' id='itemid' name='itemid' value="<?= $id ?>" style='width: 40px'>
                </div>
        </section>

        <section id="submit" class="three">
            <div class="container" >
                <div class="row">
                    <div class="12u">
                        <input type="submit" value="Edit Item" />
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
