<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 8/6/2015
 * Time: 10:36 AM
 */

foreach($userdet as $client){
    $name = $client['firstname'];
    $photo ='.'.$client['prophilephoto'];
    $photoor = $client['prophilephoto'];
    $cno = $client['phoneno'];
    $cpos ='Manager';
}
?>
<link href="<?php echo base_url(); ?>/css/font-awesome.css" rel="stylesheet" />
<nav class="navbar-side" role="navigation">
<div class="top">

    <!--company Logo -->
    <div id="logo">
        <?php
        if($photoor == '') {
            echo "<span class='image avatar48'><img src='../cltres/images/avatar.jpg' alt='' /></span>";
        }else{
            echo "<span class='image avatar48'><img src='$photo' alt='' /></span>";
        }
        ?>
        <!--company name -->
        <h1 id="title"><?= $name ?></h1>
        <!--category
        <p><?= $cpos ?></p>-->
        <p><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></p>
    </div>

    <!-- Nav -->
    <nav id="navv">
        <ul>
            <li><a href="adminhm" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">New Product</span></a></li>
            <li><a href="corders" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-sitemap">Orders</span></a></li>
            <li><a href="cadmnctlg" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Catalogue</span></a></li>
            <!--<li><a href="#contact" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-globe">Distribution</span></a></li>-->
        </ul>
    </nav>

</div>
<div class="bottom">

    <!-- Social Icons -->
    <ul class="icons">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <!--<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>-->
        <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
    </ul>

</div>
</nav>