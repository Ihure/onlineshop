<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 10/22/2015
 * Time: 11:30 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cladbox Home</title>
    <link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <script src="../js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="kenya online shop, cladbox, shoes,baby clothes, shirts,trousers,dresses, official wear, casual wear" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <!-- dropdown -->
    <script src="../js/jquery.easydropdown.js"></script>
    <link href="../css/nav.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="../js/scripts.js" type="text/javascript"></script>
</head>
<body>
<!-- header-section-starts -->
<div class="header" id="home">
    <?php
    include('hmtopmenu.php');
    ?>
    <div class="banner">
        <div class="signing text-right">
            <div class="container">
                <div class="sign-in">
                    <a href="csignin">Sign In</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="banner-info text-center">
            <i class="shipping"></i>
            <h3>Your ultimate shopping destination</h3>
            <p></p>
            <a href="cproduct">All Products</a>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="products-section">
            <div class="products-section-head text-center">
                <h3><span>P</span>roducts</h3>
                <p>check out our products</p>
            </div>
            <div class="products-section-grids">
                <ul id="filters" class="clearfix">
                    <li><span class="filter active" data-filter="app card icon web"><label class="active"></label>All</span></li>
                    <li><span class="filter" data-filter="app"><label></label>Men</span></li>
                    <li><span class="filter" data-filter="card"><label></label>Ladies</span></li>
                    <li><span class="filter" data-filter="icon"><label></label>Babies</span></li>
                </ul>
                <div id="portfoliolist">
                    <?php
                    foreach($items as $item){
                        $cat = $item['category'];
                        $id = $item['itemid'];
                        $id = base64_encode($id);
                        if( $cat == 1){
                            echo"
                                <div class='portfolio app mix_all'  data-cat='app' style='display: inline-block; opacity: 1;'>
                                    <div class='portfolio-wrapper'>
                                        <a href='purchase?getid=$id' class='b-link-stripe b-animate-go  thickbox'>
                                            <img src='$item[photo]' class='img-responsive' alt='' /><div class='b-wrapper'><div class='atc'><p>Add To Cart</p></div><div class='clearfix'></div><h2 class='b-animate b-from-left    b-delay03 '><img src='../images/icon-eye.png' class='img-responsive go' alt=''/></h2>
                                            </div></a>
                                        <div class='title'>
                                            <div class='colors'>
                                                <h4>$item[name]</h4>
                                                <p> Items Available:
                                                <ul>
                                                    <a href='#'><li class=''>$item[available]</li></a>
                                        </ul>
                                                </p>
                                            </div>
                                            <div class='main-price'>
                                                <h3><span>KES</span>$item[price]</h3>
                                            </div>
                                            <div class='clearfix'></div>
                                        </div>
                                    </div>
                                </div>";
                        }
                        elseif($cat == 2) {
                            echo "
                                <div class='portfolio card mix_all'  data-cat='card' style='display: inline-block; opacity: 1;'>
                                    <div class='portfolio-wrapper'>
                                        <a href='purchase?getid=$id' class='b-link-stripe b-animate-go  thickbox'>
                                            <img src='$item[photo]' class='img-responsive' alt='' /><div class='b-wrapper'><div class='atc'><p>Add To Cart</p></div><div class='clearfix'></div><h2 class='b-animate b-from-left    b-delay03 '><img src='../images/icon-eye.png' class='img-responsive go' alt=''/></h2>
                                            </div></a>
                                        <div class='title'>
                                            <div class='colors'>
                                                <h4>$item[name]</h4>
                                                <p> Items Available:
                                                <ul>
                                                    <a href='#'><li class=''>$item[available]</li></a>
                                        </ul>
                                                </p>
                                            </div>
                                            <div class='main-price'>
                                                <h3><span>KES</span>$item[price]</h3>
                                            </div>
                                            <div class='clearfix'></div>
                                        </div>
                                    </div>
                                </div>";
                        }
                        elseif ($cat == 3){
                            $photo2 = $item['photo'];
                            $photo2 = substr($photo2,3);
                            echo"
                                <div class='portfolio icon mix_all'  data-cat='icon' style='display: inline-block; opacity: 1;'>
                                    <div class='portfolio-wrapper'>
                                        <a href='purchase?getid=$id' class='b-link-stripe b-animate-go  thickbox'>
                                            <img src='$item[photo]' class='img-responsive' alt='' /><div class='b-wrapper'><div class='atc'><p>Add To Cart</p></div><div class='clearfix'></div><h2 class='b-animate b-from-left    b-delay03 '><img src='../images/icon-eye.png' class='img-responsive go' alt=''/></h2>
                                            </div></a>
                                        <div class='title'>
                                            <div class='colors'>
                                                <h4>$item[name]</h4>
                                                <p> Items Available:
                                                <ul>
                                                    <a href='#'><li class=''>$item[available]</li></a>
                                        </ul>
                                                </p>
                                            </div>
                                            <div class='main-price'>
                                                <h3><span>KES</span>$item[price]</h3>
                                            </div>
                                            <div class='clearfix'></div>
                                        </div>
                                    </div>
                                </div>";
                        }
                    }


                    ?>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <div class="more">
                    <div class="seemore">
                        <a href="cproduct">See More</a>
                    </div>
                    <div class="allproducts">
                        <a href="cproduct">All Products</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <!-- script-for-portfolio -->
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                    });
                });
            </script>

            <script type="text/javascript" src="../js/jquery.mixitup.min.js"></script>
            <script type="text/javascript">
                $(function () {

                    var filterList = {

                        init: function () {

                            // MixItUp plugin
                            // http://mixitup.io
                            $('#portfoliolist').mixitup({
                                targetSelector: '.portfolio',
                                filterSelector: '.filter',
                                effects: ['fade'],
                                easing: 'snap',
                                // call the hover effect
                                onMixEnd: filterList.hoverEffect()
                            });

                        },

                        hoverEffect: function () {

                            // Simple parallax effect
                            $('#portfoliolist .portfolio').hover(
                                function () {
                                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                    $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                                },
                                function () {
                                    $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                    $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                                }
                            );

                        }

                    };

                    // Run the show!
                    filterList.init();


                });
            </script>


        </div>
    </div>

    <div class="container">
        <div class="recommand-section">
            <div class="recommand-section-head text-center">
                <h3><span>R</span>ecommended</h3>
                <p>check out some recommended products</p>
            </div>
            <div class="recommand-section-grids">

                <div class="standards">
                    <ul class="selectors_wrapper">
                        <div class="tags">
                            <h3>Tags  <img src="../images/tag.png" alt="" /></h3>
                        </div>
                        <li class="selector active" data-selector="1">Men</li>
                        <li class="selector" data-selector="2">Ladies</li>
                        <li class="selector" data-selector="3">Babies</li>
                        <li class="selector" data-selector="4">Shoes</li>
                    </ul>

                    <div class="standard_content">
                        <div class="standard active" data-selector="1">
                            <?php
                            foreach($men as $man){
                                $pmen = $man['photo'];
                                $id = $man['itemid'];
                                $id = base64_encode($id);
                               // $pmen = substr($pmen,3);
                                echo"
                    <div class='tag-grid'>
                            <div class='portfolio app mix_all'  data-cat='app' style='display: inline-block; opacity: 1;'>
                            <div class='portfolio-wrapper'>
                                <a href='purchase?getid=$id' class='b-link-stripe b-animate-go  thickbox'>
                                    <img src='$pmen' class='img-responsive' alt='' /><div class='b-wrapper'><div class='atc'><p>Add To Cart</p></div><div class='clearfix'></div><h2 class='b-animate b-from-left    b-delay03 '><img src='../images/icon-eye.png' class='img-responsive go' alt=''/></h2>
                                    </div></a>
                                <div class='r-title'>
                                    <h3>$man[name]</h3>
                                    <h4>KES.$man[price]</h4>
                                </div>
                            </div>
                        </div>
                    </div>";
                            }

                            ?>
                            <div class="clearfix"></div>
                        </div>
                        <div class="standard" data-selector="2">
                            <?php
                            foreach($ladies as $lady){
                                $plmen = $lady['photo'];
                                $id = $lady['itemid'];
                                $id = base64_encode($id);
                                //$plmen = substr($plmen,3);
                                echo"
                <div class='tag-grid'>
                        <div class='portfolio app mix_all'  data-cat='app' style='display: inline-block; opacity: 1;'>
                        <div class='portfolio-wrapper'>
                            <a href='purchase?getid=$id' class='b-link-stripe b-animate-go  thickbox'>
                                <img src='$plmen' class='img-responsive' alt='' /><div class='b-wrapper'><div class='atc'><p>Add To Cart</p></div><div class='clearfix'></div><h2 class='b-animate b-from-left    b-delay03 '><img src='../images/icon-eye.png' class='img-responsive go' alt=''/></h2>
                                </div></a>
                            <div class='r-title'>
                                <h3>$lady[name]</h3>
                                <h4>KES.$lady[price]</h4>
                            </div>
                        </div>
                    </div>
                </div>";
                            }

                            ?>
                            <div class="clearfix"></div>
                        </div>
                        <div class="standard" data-selector="3">
                            <?php
                            foreach($babies as $baby){
                                $pbmen = $baby['photo'];
                                $id = $baby['itemid'];
                                $id = base64_encode($id);
                                //$pbmen = substr($pbmen,3);
                                echo"
                    <div class='tag-grid'>
                            <div class='portfolio app mix_all'  data-cat='app' style='display: inline-block; opacity: 1;'>
                            <div class='portfolio-wrapper'>
                                <a href='purchase?getid=$id' class='b-link-stripe b-animate-go  thickbox'>
                                    <img src='$pbmen' class='img-responsive' alt='' /><div class='b-wrapper'><div class='atc'><p>Add To Cart</p></div><div class='clearfix'></div><h2 class='b-animate b-from-left    b-delay03 '><img src='../images/icon-eye.png' class='img-responsive go' alt=''/></h2>
                                    </div></a>
                                <div class='r-title'>
                                    <h3>$baby[name]</h3>
                                    <h4>KES.$baby[price]</h4>
                                </div>
                            </div>
                        </div>
                    </div>";
                            }
                            ?>
                            <div class="clearfix"></div>
                        </div>
                        <div class="standard" data-selector="4">
                            <?php
                            foreach($shoes as $shoe){
                                $psmen = $shoe['photo'];
                                $id = $shoe['itemid'];
                                $id = base64_encode($id);
                                //$psmen = substr($psmen,3);
                                echo"
                    <div class='tag-grid'>
                            <div class='portfolio app mix_all'  data-cat='app' style='display: inline-block; opacity: 1;'>
                            <div class='portfolio-wrapper'>
                                <a href='purchase?getid=$id' class='b-link-stripe b-animate-go  thickbox'>
                                    <img src='$psmen' class='img-responsive' alt='' /><div class='b-wrapper'><div class='atc'><p>Add To Cart</p></div><div class='clearfix'></div><h2 class='b-animate b-from-left    b-delay03 '><img src='../images/icon-eye.png' class='img-responsive go' alt=''/></h2>
                                    </div></a>
                                <div class='r-title'>
                                    <h3>$shoe[name]</h3>
                                    <h4>KES.$shoe[price]</h4>
                                </div>
                            </div>
                        </div>
                    </div>";
                            }
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-section">
        <div class="contact-section-head text-center">
            <h3><span>C</span>ontact Us</h3>
            <p>let us know your feedbacks and questions</p>
        </div>
        <div class="contact-form-main">
            <form>
                <label class="span1"></label>
                <input type="text" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}">
                <label class="span2"></label>
                <label class="span3"></label>
                <input type="text" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
                <label class="span4"></label>
                <label class="span5"></label>
                <input type="text" class="text" value="Phone..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone...';}">
                <label class="span6"></label>
                <label class="span7"></label>
                <textarea onfocus="if(this.value == 'Message...') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Message...</textarea>
                <label class="span8"></label>
                <input type="submit" value="">
            </form>
        </div>

    </div>
</div>
<div class="footer">
    <div class="up-arrow">
        <a class="scroll" href="#home"><img src="../images/up.png" alt="" /></a>
    </div>
    <div class="container">
        <!--<div class="copyrights">
            <p>Copyright &copy; 2015 All rights reserved | Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
        </div>-->
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
