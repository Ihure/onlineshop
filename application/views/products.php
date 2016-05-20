<!DOCTYPE html>
<html>
<head>
<title>Cladbox products</title>
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/form.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="caldbox, kenya online shop, kenya clothes, kenyan clothes, kenya shirts, trousers, dresses, tops, babies clothes" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- dropdown -->
<script src="../js/jquery.easydropdown.js"></script>
<link href="../css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="../js/hover_pack.js"></script>
		  <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<?php
		include('hmtopmenu.php');
		if (isset($_GET['ct'])){
		//$cat =$_GET['ct'];
			$cat1 = $_GET['ct'];
			$typ1 = $_GET['tp'];
		}
		?>
		</div>
		<!-- start Dresses-page -->
	<!-- content-section-starts -->

	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
				 
                    <li class="home">
                       <a href="chome" title="Go to Home Page"><img src="../images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li>
			 <?php

			 $plimit = 12;
			 if(!isset($_GET['boxn']) && !isset($_GET['ct'])){
				 //$boxn = $_GET['boxn'];
				 $query1 = $this->db->query("select sum(quantity) available, photo,name,category,price,catalogue.itemid,type,briefdesc from catalogue inner join sizes on catalogue.itemid =sizes.itemid where deleted = '0' group by catalogue.itemid order by transdate desc limit $plimit  ");
				 $query2 = $this->db->query("select sum(quantity) available, photo,name,category,price,catalogue.itemid,type,briefdesc from catalogue inner join sizes on catalogue.itemid =sizes.itemid where deleted = '0'  group by catalogue.itemid order by transdate desc");
			 }
			 elseif(!isset($_GET['boxn'])&& isset($_GET['ct'])){
				 $query1 = $this->db->query("select sum(quantity) available, photo,name,category,price,catalogue.itemid,type,briefdesc from catalogue inner join sizes on catalogue.itemid =sizes.itemid where deleted = '0' and category=$cat1 and type=$typ1 group by catalogue.itemid order by transdate desc limit 12");
				 $query2 = $this->db->query("select sum(quantity) available, photo,name,category,price,catalogue.itemid,type,briefdesc from catalogue inner join sizes on catalogue.itemid =sizes.itemid where deleted = '0' and category=$cat1 and type=$typ1 group by catalogue.itemid order by transdate desc");
			 }
			 elseif(isset($_GET['boxn'])&& !isset($_GET['ct'])){
				 $boxn =$_GET['boxn'];
				 $boxn = ($boxn-1)*12;
				 $query1 = $this->db->query("select sum(quantity) available, photo,name,category,price,catalogue.itemid,type,briefdesc from catalogue inner join sizes on catalogue.itemid =sizes.itemid where deleted = '0'  group by catalogue.itemid order by transdate desc limit $boxn,$plimit");
				 $query2 = $this->db->query("select sum(quantity) available, photo,name,category,price,catalogue.itemid,type,briefdesc from catalogue inner join sizes on catalogue.itemid =sizes.itemid where deleted = '0'  group by catalogue.itemid order by transdate desc");
			 }
			 elseif(isset($_GET['boxn'])&& isset($_GET['ct'])){
				 $boxn =$_GET['boxn'];
				 $boxn = ($boxn-1)*12;
				 $query1 = $this->db->query("select sum(quantity) available, photo,name,category,price,catalogue.itemid,type,briefdesc from catalogue inner join sizes on catalogue.itemid =sizes.itemid where deleted = '0' and category=$cat1 and type=$typ1 group by catalogue.itemid order by transdate desc limit $boxn,$plimit");
				 $query2 = $this->db->query("select sum(quantity) available, photo,name,category,price,catalogue.itemid,type,briefdesc from catalogue inner join sizes on catalogue.itemid =sizes.itemid where deleted = '0' and category=$cat1 and type=$typ1 group by catalogue.itemid order by transdate desc");
			 }


			 $results = $query2->num_rows();
			 $pages = ceil($results/12);

			 $boxes = $query1->num_rows();
			 $boxes = ceil($boxes/3);



			 if(isset($_GET['ct'])){
				 switch($cat1){
					 case 1:
						 echo "
								<li>
								   Men
									<span>&gt;</span>
								</li>
								 <li>
									<span class='red'>&nbsp;Clothes&nbsp;</span>
								</li> ";
						 break;
					 case 2:
						 echo "
								<li>
								   Ladies
									<span>&gt;</span>
								</li>
								 <li>
									<span class='red'>&nbsp;Clothes&nbsp;</span>
								</li> ";
						 break;
					 case 3:
						 echo "
								<li>
								   Babies
									<span>&gt;</span>
								</li>
								 <li>
									<span class='red'>&nbsp;Clothes&nbsp;</span>
								</li> ";
						 break;
					 case 4:
						 echo "
								<li>
								   Shoes
									<span>&gt;</span>
								</li> ";
						 break;

				 }
			 }
			 else{
				 echo "
						<li>
						   All
							<span>&gt;</span>
						</li>
						 <li>
							<span class='red'>&nbsp;Items&nbsp;</span>
						</li>";
			 }
			 ?>
                </ul>
                <ul class="previous">
                	<li></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>
			   <div class="container">
	   <div class="ft-ball">
		<div class="cont span_2_of_3">
		  <div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		            <label>Sort By</label>
		            <select>
						<option value="">Popularity </option>
						<option value="">Price : High to Low</option>
						<option value="">Price : Low to High</option>
		            </select>
		            <a href=""><img src="../images/arrow2.gif" alt="" class="v-middle"></a>
               </div>
    		</div>
	          <div class="pager">
				  <div class="limiter visible-desktop">
				  <ul class="dc_pagination dc_paginationA dc_paginationA06">
					  <li><a href="#" class="previous">Pages</a></li>
					  <?php
					  $newp = 1;
					  for ($newp=1; $newp<= $pages; $newp++){
						  if(isset($_GET['ct'])){
						  echo "<li><a href='cproduct?ct=$cat1&tp=$typ1&boxn=$newp'>$newp</a></li>";
						  }else{
							  echo "<li><a href='cproduct?boxn=$newp'>$newp</a></li>";
						  }
					  }
					  ?>
					  <!--<li><a href="#">2</a></li>-->
				  </ul>
				  </div>
		   		<div class="clearfix"></div>
	    	</div>
     	    <div class="clearfix"></div>
	       </div>
			<?php

			/* $pgres = $query1->num_rows();
			$boxes = $pgres/3;
			$boxes = ceil($boxes);*/


			$box = 1;
			//load box1 container
			do {

				echo " <div class='box1'>";

				if ($box == 1) {
					$start = 0;
					$stop = 2;
				} else {
					$start = (($box-1) * 3);
					$stop = $start + 2;
				}

				//load each item
				while ($start <= $stop) {
					/*if(isset($_GET['ct'])){

                        $query = $this->db->query("select sum(quantity) available, photo,name,category,price,catalogue.itemid,type,briefdesc from catalogue inner join sizes on catalogue.itemid =sizes.itemid where deleted = '0' and category=$cat1 and type=$typ1 group by catalogue.itemid");
                    }
                    else{
                        $query = $this->db->query("select sum(quantity) available, photo,name,category,price,catalogue.itemid,type,briefdesc from catalogue inner join sizes on catalogue.itemid =sizes.itemid where deleted = '0' group by catalogue.itemid ");
                    }*/
					$row = $query1->row_array($start);

					$id = $row['itemid'];
					$id = base64_encode($id);

					if ($row['name'] == ''){
						echo "";
					}else{

					echo "
						<div class='col_1_of_single1 span_1_of_single1'>
							 <div class='view1 view-fifth1'>
							  <div class='top_box'>
								<h3 class='m_1'>$row[name]</h3>
								<p class='m_2'>Items Available $row[available]</p>
								<a href='purchase?getid=$id'>
								 <div class='grid_img'>
								   <div class='css3'><img src='$row[photo]' alt=''/></div>
									  <div class='mask1'>
										<div class='info'>Quick View</div>
									  </div>
								</div>
							   <div class='price'>KES $row[price]</div>
							   </div>
								</div></a>
								<div class='rtng'>
								<form action='' class='sky-form'>
									 <fieldset>
									   <section>
										 <div class='rating'>
											<input type='radio' name='stars-rating' id='stars-rating-5'>
											<label for='stars-rating-5'><i class='icon-star'></i></label>
											<input type='radio' name='stars-rating' id='stars-rating-4'>
											<label for='stars-rating-4'><i class='icon-star'></i></label>
											<input type='radio' name='stars-rating' id='stars-rating-3'>
											<label for='stars-rating-3'><i class='icon-star'></i></label>
											<input type='radio' name='stars-rating' id='stars-rating-2'>
											<label for='stars-rating-2'><i class='icon-star'></i></label>
											<input type='radio' name='stars-rating' id='stars-rating-1'>
											<label for='stars-rating-1'><i class='icon-star'></i></label><span class='rtng'><span>
											<div class='clearfix'></div>
										 </div>
									  </section>
									</fieldset>
								  </form>
								  </div>
								 <ul class='list2'>
								  <li>
									<img src='../images/plus.png' alt=''/>
									<ul class='icon1 sub-icon1 profile_img'>
									  <li><a class='active-icon c1' href='purchase?getid=$id'>Add To Bag </a>
										<ul class='sub-icon1 list'>
											<li><h3>$row[name]</h3><a href=''></a></li>
											<li><p>$row[briefdesc]</p></li>
										</ul>
									  </li>
									 </ul>
								   </li>
								 </ul>
								<div class='clear'></div>
							</div> ";
					}
					$start++;
				}

				echo "</div>";

				$box++;
			}while($box <= $boxes);
			?>
			<!--<div class="holder"> </div>-->
			  </div>
     	    <div class="rsidebar span_1_of_left">
				   <section  class="sky-form">
				   <div class="product_right">
     			<h3 class="m_2">Categories</h3>
     			    <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">New</option>	
						<option value="1">tempor</option>
						<option value="2">congue</option>
						<option value="3">mazim </option>
						<option value="4">mutationem</option>
						<option value="5">hendrerit </option>
		           </select>
				   <select class="dropdown" tabindex="50" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Designers</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
				   <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Women</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
			       <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Men</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
			       <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Clearance</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
</div>
                   	  <h4>Occasion</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Athletic Shoes (48)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Casual (45)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
						    </div>
						 </div>
					 <h4>Styles</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Athletic (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ballerina (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Pumps (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>High Tops (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other (1)</label>
						    </div>
						</div>
				</section>
		        <section  class="sky-form">
					<h4>Brand</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Adidas by Stella McCartney</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Asics</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Bloch Kids</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Capezio</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Capezio Kids</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Nike</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
							</div>
						</div>
		       </section>
		       <section  class="sky-form">
					<h4>Heel Height</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Flat (20)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Under 1in(5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>1in - 1 3/4 in(5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2in - 2 3/4 in(3)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>3in - 3 3/4 in(2)</label>
							</div>
						</div>
		       </section>
		       <section  class="sky-form">
					<h4>Price</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under (30)</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under (30)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under (30)</label>
							</div>
						</div>
		       </section>
		       <section  class="sky-form">
					<h4>Colors</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Red</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Green</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Black</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Yellow</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Orange</label>
							</div>
						</div>
		       </section>
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
					<p>Copyright &copy; 2015 All rights reserved | Developed by  <a href="http://www.kaizenkenya.co.ke"> Ryda Inc</a></p>
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
	<!--<script type="text/javascript" src="../js/script.js">	</script>
	<script type="text/javascript" src="../js/jPages.js">	</script>-->
</body>
</html>