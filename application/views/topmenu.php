<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 11/26/2015
 * Time: 2:56 PM
 */
?>
<div class="top-header">
    <div class="container">
        <div class="logo">
            <a href="welcome"><img src="../images/logo.png" alt="" /></a>
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
            <script src="../js/classie.js"></script>
            <script src="../js/uisearch.js"></script>
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
                    <li class="active"><a href="welcome">Home</a></li>
                    <li class="dropdown1"><a href="#">Men</a>
                        <ul class="dropdown2">
                            <li><a href="products.html">Shirts</a></li>
                            <li><a href="products.html">Trousers</a></li>
                            <li><a href="products.html">Others</a></li>
                        </ul>
                    </li>
                    <li class="dropdown1"><a href="#">Women</a>
                        <ul class="dropdown2">
                            <li><a href="products.html">Tops</a></li>
                            <li><a href="products.html">Bottoms</a></li>
                            <li><a href="products.html">Dresses</a></li>
                            <li><a href="products.html">Others</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="dropdown1"><a href="#">Babies</a>
                        <ul class="dropdown2">
                            <li><a href="products.html">Babies Clothes</a></li>
                        </ul>
                    </li>
                    <li class="dropdown1"><a href="#">Shoes</a>
                        <ul class="dropdown2">
                            <li><a href="products.html">Men Shoes</a></li>
                            <li><a href="products.html">Women Shoes</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.">Contact US</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
        </div>
    </div>
</div>
