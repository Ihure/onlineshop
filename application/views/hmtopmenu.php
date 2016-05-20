<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 11/26/2015
 * Time: 2:48 PM
 */
?>
<div class="top-header">
    <div class="container">
        <div class="logo">
            <a href="<?php echo site_url(); ?>/chome"><img src="<?php echo base_url(); ?>images/logo.png" alt="" /></a>
        </div>
        <div class="header-top-right">
            <!-- start search-->
            <div class="search-box">
                <div id="sb-search" class="sb-search">
                    <form>
                        <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
            </div>
            <!-- search-scripts -->
            <script src="<?php echo base_url(); ?>/js/classie.js"></script>
            <script src="<?php echo base_url(); ?>/js/uisearch.js"></script>
            <script>
                new UISearch( document.getElementById( 'sb-search' ) );
            </script>
            <!-- //search-scripts -->

            <a href="cart.html"><i class="cart"></i></a>
        </div>
        <div class="navigation">
            <div>
                <label class="mobile_menu" for="mobile_menu">
                    <span>Menu</span>
                </label>
                <input id="mobile_menu" type="checkbox">
                <ul class="nav">
                    <li class="active"><a href="<?php echo site_url(); ?>/chome">Home</a></li>
                    <li class="dropdown1"><a href="#">Men</a>
                        <ul class="dropdown2">
                            <li><a href="<?php echo site_url(); ?>/cproduct?ct=1&tp=1">Shirts</a></li>
                            <li><a href="<?php echo site_url(); ?>/cproduct?ct=1&tp=2">Trousers</a></li>
                            <li><a href="<?php echo site_url(); ?>/cproduct?ct=1&tp=3">Others</a></li>
                        </ul>
                    </li>
                    <li class="dropdown1"><a href="#">Ladies</a>
                        <ul class="dropdown2">
                            <li><a href="<?php echo site_url(); ?>/cproduct?ct=2&tp=1">Tops</a></li>
                            <li><a href="<?php echo site_url(); ?>/cproduct?ct=2&tp=2">Bottoms</a></li>
                            <li><a href="<?php echo site_url(); ?>/cproduct?ct=2&tp=3">Dresses</a></li>
                            <li><a href="<?php echo site_url(); ?>/cproduct?ct=2&tp=4">Others</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="dropdown1"><a href="#">Babies</a>
                        <ul class="dropdown2">
                            <li><a href="<?php echo site_url(); ?>/cproduct?ct=3&tp=1">Babies Clothes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown1"><a href="#">Shoes</a>
                        <ul class="dropdown2">
                            <li><a href="<?php echo site_url(); ?>/cproduct?ct=4&tp=1">Men Shoes</a></li>
                            <li><a href="<?php echo site_url(); ?>/cproduct?ct=4&tp=2">Ladies Shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url(); ?>/contact">Contact US</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
    </div>
</div>
