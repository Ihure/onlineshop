<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 2/4/2016
 * Time: 12:55 PM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout Form</title>
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Pakhi Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!-- dropdown -->
    <script src="../js/jquery.easydropdown.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/page-style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/hexagons.min.css">
    <link href="../css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="../js/hover_pack.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });

        function deleterow(t){
            var row = t.parentNode.parentNode;
            document.getElementById("addcar").deleteRow(row.rowIndex);
            console.log(row);

            var totals= 0;
            var rows = document.getElementById('qnumber').value;

            for(i=1; i <= rows;i++){
                if(document.getElementById('total'+i) != null){
                    totals += Number(document.getElementById('total'+i).value) ;
                }else{}
            }

            document.getElementById("tot").textContent= totals;

        }
    </script>
    <script type="text/javascript" >

        function validate_form ( )
        {

            valid = true;
            if ( document.getElementById('name').value== '' )
            {
                alert ( "Please provide us with your name" );
                valid = false;
                document.savedet.name.focus();
            }
            else if(document.getElementById("addcar").rows.length==2){
                alert ( "Your Shopping cart is empty");
                valid = false;
            }
            else if ( document.savedet.phone.value == "" )
            {
                alert ( "Please input your phone number!" );
                valid = false;
                document.savedet.phone.focus();
            }
            else if ( document.savedet.email.value == "" )
            {
                alert ( "Please input your Email!" );
                valid = false;
                document.savedet.email.focus();
            }
             else {

                valid = true;
            }

            return valid;

        }

        function validateEmail(email) {
            // http://stackoverflow.com/a/46181/11236

            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function validate(){
            $("#result").text("");
            var email = $("#email").val();
            if (validateEmail(email)) {
                //do nothing
            } else {
                $("#result").text(email + "is not valid :(");
                $("#result").css("color", "red");
            }
            return false;
        }

    </script>

</head>
<body>
<!-- header-section-starts -->
<div class="c-header" id="home">
    <?php
    include('hmtopmenu.php');
    ?>
    </div>
</div>
<!-- start Contact-page -->
<!-- content-section-starts -->
<div class="container">
    <div class="dreamcrub">
        <ul class="breadcrumbs">

            <li class="home">
                <a href="chome" title="Go to Home Page"><img src="../images/home.png" alt=""/></a>&nbsp;
                <span>&gt;</span>
            </li>
            <li>
                Please Enter your Details below
            </li>
        </ul>
        <ul class="previous">
            <li><a href="index.html">Back to Previous Page</a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>




<div class="container">
    <div class="contact">
        <div class="contact_info">
            <h2>Please confirm the items you Have bought</h2>
            <div class="table-responsive">
                <form method="post" name="savedet" onsubmit=" return validate_form()" action="savecart">
                <table id="addcar" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr class="titlerow">
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php

                    $num = 1;
                    $total = 0;
                    foreach($items as $item){
                        echo "<tr>";
                        echo"<td><input type='text' readonly  name ='name".$num."' value='$item[name]' style='border:none;background-color: inherit; width:140px; ' > </td>";
                        echo"<td > <input type='text' readonly  name ='qty".$num."' value='$item[quantity]' style='border:none;background-color: inherit; width:140px; '> </td>";
                        echo"<td ><input type='text' readonly  name ='price".$num."' value='$item[price]' style='border:none;background-color: inherit; width:140px;'> </td>";
                        echo"<td class='rowDataSd'><input type='text' readonly  name ='total".$num."' id ='total".$num."' value='$item[total]' style='border:none;background-color: inherit; width:140px;'> </td>";
                        //echo"<td><button onclick='deleterow(this)' type='button'><i class='fa fa-trash'></i>Remove</button></td>";
                        echo"<td><a href='#' onclick='deleterow(this)'><span class='hb hb-xs'><i class='fa fa-trash'></i></span></a></td>";
                        echo" <input type='hidden' name ='id".$num."' value='$item[id]'> ";
                        echo" <input type='hidden' name ='sizeid".$num."' value='$item[size]'> ";
                        echo "</tr>";
                        $num++;
                        $total += $item['total'];
                    }
                    echo "<input type='hidden' id='qnumber' name='qnumber' value='$num'>";
                    echo "<input type='hidden' id='vnumber' name='vnumber' style='width: 40px'>";

                    ?>
                    </tbody>
                    <tfoot>
                    <tr class="totalColumn">
                        <td colspan="2"></td>
                        <td>Total</td>
                        <td><span class="m_6" id="tot"><?php echo $total ?> </span>
                        <td></td>
                    </tr>
                    </tfoot>

                </table>
            </div>
            
            </div>
        <div class="contact-form">
            <h2>Enter your details</h2>
                <div>
                    <span><label>Name</label></span>
                    <span><input name="name" id="name" type="text" class="textbox"></span>
                </div>
                <div>
                    <span><label>E-mail</label></span>
                    <span><input name="email" id="email" type="text" class="textbox" onblur="validate(); return false;" ></span>
                    <br/>
                    <h2 id='result'></h2>
                </div>
                <div>
                    <span><label>Mobile</label></span>
                    <span><input name="phone" id="phone" type="text" class="textbox"></span>
                </div>
                <div>
                    <span><label>Address</label></span>
                    <span><textarea name="userMsg"> </textarea></span>
                </div>
                <div>
                    <span><input type="submit" class="" value="Submit Order"></span>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
    </div>


</div>

<!-- content-section-ends -->

<div class="footer">
    <div class="up-arrow">
        <a class="scroll" href="#home"><img src="../images/up.png" alt="" /></a>
    </div>
    <div class="container">
        <div class="copyrights">
            <p>Copyright &copy; 2016 All rights reserved | Website by  <a href="http://www.kaizenkenya.co.ke">  Ryda Inc</a></p>
        </div>
        <div class="footer-social-icons">
            <a href="#"><i class="fb"></i></a>
            <a href="#"><i class="tw"></i></a>
            <a href="#"><i class="in"></i></a>
            <a href="#"><i class="pt"></i></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
</body>
</html>
