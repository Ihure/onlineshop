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
    <title>Cladbox </title>
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
        #imagePreviewfr, #imagePreviewup, #imagePreviewlv2, #imagePreviewlv3 {
            width: 290px;
            height: 290px;
            background-position: left center;
            background-size: cover;
            -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
            display: inline-block;
        }
    </style>

    <script type="text/javascript">
        $(function() {
            $("#itemup").on("change", function()
            {
                var files = !!this.files ? this.files : [];
                if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

                if (/^image/.test( files[0].type)){ // only image file
                    var reader = new FileReader(); // instance of the FileReader
                    reader.readAsDataURL(files[0]); // read the local file

                    reader.onloadend = function(){ // set image data as background of div
                        $("#imagePreviewup").css("background-image", "url("+this.result+")");
                    }
                }
            });
        });
    </script>

    <script type="text/javascript">
        //don't show any fields until property type is chosen
        $(document).ready(function() {
            $('.women').hide()&& $('.shoes').hide()&& $('.babies').hide();
            $('#category').change(function() {

                //to show the various fields that correspond to the property type chosen
                var val = $('#category').val();
                if(val==1) {
                    $('.men').show()&& $('.women').hide()&& $('.babies').hide()&& $('.shoes').hide();
                }if(val==2){
                    $('.women').show() && $('.men').hide()&& $('.babies').hide()&& $('.shoes').hide();
                }if(val==3){
                    $('.babies').show() && $('.men').hide()&& $('.women').hide() && $('.shoes').hide();
                }if(val==4){
                    $('.shoes').show() && $('.men').hide()&& $('.women').hide() && $('.babies').hide();
                }
            });
        });

    </script>
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
            if ( document.getElementById('itemup').value== '' )
            {
                alert ( "Please upload a photo of the item" );
                valid = false;
                document.itemdetails.itemup.focus();
            }
            else if ( document.itemdetails.category.value == "" )
            {
                alert ( "Please choose a category!" );
                valid = false;
                document.itemdetails.category.focus();
            }
            else if ( document.itemdetails.price.value == "" )
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
    <script>
        function addsize(){
            var nos = document.getElementById("addsize").getElementsByTagName("tbody")[0].getElementsByTagName("tr").length;
            var trow = document.getElementById("vnumber").value;
            if(trow > nos){ var noss = trow; }else{var noss= nos; }
            var no = noss + 1;
            var size = document.getElementById("size").value;
            var quantity = document.getElementById("quantity").value;
            var rows = "";

            rows += "<tr><td><input type='text' style='border:none;background-color: inherit; ' readonly name ='size"+no+"' value='"+size+"'></td><td><input type='text' style='border:none;background-color: inherit;' readonly  name ='quantity"+no+"' value='"+quantity+"'></td><td><input onclick='deleterow(this)' type='button' value='Remove'/></td><input type='hidden' name ='tsnumber"+no+"' value='"+no+"'></tr>";
            $(rows).appendTo("#addsize tbody");

            document.getElementById("vnumber").value = no;

        }

        function deleterow(t){
            var row = t.parentNode.parentNode;
            document.getElementById("addsize").deleteRow(row.rowIndex);
            console.log(row);

        }
    </script>
</head>
<body>
<form enctype="multipart/form-data" method="post" action="addnwprd" name="itemdetails" onsubmit="return validate_form()">
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
                    <h2>Upload new product</h2>
                </header>
            </div>
        </section>

        <!-- photo -->
        <section id="contactdetof" class="two">
            <div class="container">
                <div class="row">
                    <div class="8u 12u(mobilep)">
                        <ul><label for="itemup">Upload photo of item</label></ul>
                        <div id="imagePreviewup"></div>
                        <input type="file" name="itemup" id="itemup" style="width: inherit;"  />
                    </div>

                </div>

                <div align="left"><p align="left" ><h1>Item Details</h1></p></div>
                <div class="row 50%">
                    <div class="4u"><select id="category" name="category" style="border: none" >
                            <option value=''>Choose category</option>
                            <option value='1'>Men</option>
                            <option value='2'>Women</option>
                            <option value='3'>Babies Clothes</option>
                            <option value='4'>Shoes</option>
                        </select> </div>
                    <div class="4u men"><select id="mencat" name="mencat" style="border: none" >
                            <option value=''>Choose Type</option>
                            <option value='1'>Shirts</option>
                            <option value='2'>Trousers</option>
                            <option value='3'>Other</option>
                        </select></div>
                    <div class="4u women"><select id="womencat" name="womencat" style="border: none" >
                            <option value=''>Choose Type</option>
                            <option value='1'>Tops</option>
                            <option value='2'>Bottoms</option>
                            <option value='3'>Dresses</option>
                            <option value='3'>Other</option>
                        </select></div>
                    <div class="4u babies"><select id="babcat" name="babcat" style="border: none" >
                            <option value=''>Choose Type</option>
                            <option value='1'>Babies</option>
                        </select></div>
                    <div class="4u shoes"><select id="shocat" name="shocat" style="border: none" >
                            <option value=''>Choose Type</option>
                            <option value='1'>men</option>
                            <option value='1'>women</option>
                        </select></div>
                    <div class="4u"><input  type="number" name="price" id="price" placeholder="Price"  style="border: none"/></div>

                    </div>
                </div>
            </section>
                <section id="contact" class="three">
                    <div class="container" >
                        <div align="left"><p>Name Of Item</p></div>
                        <div class="row 50%">
                            <div class="4u"><input  type="text" name="name" id="name" placeholder="Name"  style="border: none"/></div>
                        </div>

                    </div>

                    <div class="container">
                        <div align="left"><p>Brief description of Item.</p></div>
                <div class="row">
                    <div class="12u">
                        <textarea name="message" style="border: none"></textarea>
                    </div>
                </div>
                    </div>
                </section>
        <section id="contact" class="four">
            <div class="container">
                <div align="left"><p>Size Available</p></div>
                <div class="row 50%">
                    <div class="4u"><input  type="text" name="size" id="size" placeholder="Size"  style="border: none"/></div>
                    <div class="4u"><input  type="number" name="quanity" id="quantity" placeholder="Quantity" style="border: none" /></div>
                    <div class="4u"><input type="button" class="btn btn-default" onclick="addsize()" value="Add Size" /></div>
                </div>

            </div>
        </section>
        <section id="contact" class="two">
            <div class="container">
                <div id="constrainer">
                <div class="scrolltable">
                    <table class="header" id="addsize"><thead><th>Size</th><th>Quantity</th><th></th></thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
                    <input type='hidden' id='vnumber' name='vnumber' style='width: 40px'>
                </div>
        </section>

        <section id="submit" class="three">
            <div class="container" >
                <div class="row">
                    <div class="12u">
                        <input type="submit" value="Add Item" />
                    </div>
                </div>
        </section>
    </div>
</form>

<!-- Footer -->
<div id="footer">

    <!-- Copyright -->
    <ul class="copyright">
        <li>&copy; cladbox. All rights reserved.</li><li>Design: <a href="http://www.kaizenkenya.co.ke">Ryda ind.</a></li>
    </ul>

</div>

</body>
</html>
