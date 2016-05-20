<?php
?>
<!DOCTYPE html>
<html>
<head>
<title>Cladbox Single Item</title>

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/form.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/cart.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="kenya, textile, mens clothes, jeans, khaki, dresses, tops, shoes, high heels, babies clothes" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- dropdown -->
<script src="../js/jquery.easydropdown.js"></script>
<link href="../css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="../js/hover_pack.js"></script>
<link rel="stylesheet" href="../css/etalage.css">
<script src="../js/jquery.etalage.min.js"></script>
	<script type="text/javascript" src="../js/simpleCart.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
		  <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>

	<script>
		simpleCart({
			cartColumns: [
				{ attr: "image", label: "Item", view: "image"},
				//Name of the item
				{ attr: "name" , label: "Name" },
				{ attr: "price" , label: "PRICE" , view: "currency"},
				//{ attr: "quantity" , label: "QUANTITY" , view: "quantity"},
				//{ attr: "total" , label: "TOTAL" , view: "total"},
				{ attr: "quantity" , label: "Qty" } ,
				{ attr: "total" , label: "SubTotal",view :'currency' },
				{ view: "remove" , label: false, text: 'Remove' }
			]
		});

		simpleCart({
			checkout: {
				type: "SendForm" ,
				url: "checkout"
			}
		});

		simpleCart.currency({
			code: "KES" ,
			name: "Kenyan Shilling" ,
			symbol: "Kes" ,
			delimiter: "," ,
			decimal: "." ,
			after: true
		});

		function addtocart(){

			if ($('input[type=radio]:checked').size() > 0){
			simpleCart.add({
				name: document.getElementById('name').value,
				price: document.getElementById('price').value,
				image: document.getElementById('img').value,
				id: document.getElementById('id').value,
				size: $('input[name="radios"]:checked').val(),
				quantity: document.getElementById('qty').value
			});
			}
			else{
				alert("Your have not selected a size");
			}
		}

		function checkout(){
			if(simpleCart.items().length == 0)
			{
				alert("Your cart is empty");
				return false;
			}
			else{
				simpleCart.checkout(
					{
						type: "SendForm" ,
						url: "checkout"
					}
				);
			}
		}
	</script>


</head>
<body>
	<!-- header-section-starts -->
	<div class="c-header" id="home">
		<?php
		include('hmtopmenu.php');
        //session_start();
		if (isset($_GET['ct'])){
			//$cat =$_GET['ct'];
			$cat1 = $_GET['ct'];
			$typ1 = $_GET['tp'];
		}
		?>
		</div>
		<!-- start-single-page -->
	<!-- content -->
	<div class="container">
		<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
				 
                    <li class="home">
                       <a href="chome" title="Go to Home Page"><img src="../images/home.png" alt=""/></a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li>
                       Sales
                    </li>&nbsp;
                       <span>&gt;</span>
					<li>products</a></li>
                </ul>
                <ul class="previous">
                	<li><a href="cproduct">Back to Products</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   </div>
	<!-- start content -->
<div class="women_main">
<div class="container">
	<?php
	foreach($items as $item){
		$name = $item['name'];
		$price = $item['price'];
		$photo = $item['photo'];
		$id = $item['itemid'];
		$briefdesc = $item['briefdesc'];
		$category = $item['category'];
		$type = $item['type'];
	}
	?>

			<div class="row single">
				<div class="col-md-9 span-single">
                    <form method="post" action="" class="jcart" name="item">
                      <div class="single_left">
                        <div class="grid images_3_of_2">
                            <input type="hidden" name="id" id="id" value="<?= $id ?>" />
                            <input type="hidden" name="name" id="name" value="<?= $name ?>" />
                            <input type="hidden" name="price" id="price" value="<?= $price ?>" />
                            <input type="hidden" name="img" id="img" value="<?= $photo ?>" />
                            <ul id="etalage">
                                <li>
                                    <a href="">
                                        <img class="etalage_thumb_image" src="<?= $photo ?>" name="url"  class="img-responsive" />
                                        <img class="etalage_source_image" src="<?= $photo ?>"  class="img-responsive" title="" />
                                    </a>
                                </li>
                            </ul>
                             <div class="clearfix"></div>
                      </div>
                      <div class="desc1 span_3_of_2">
                        <h3><?= $name ?></h3>
                        <p>KES <?= $price ?></p>

                        <div class="filter-by-color">
                    <h3>Sizes Available</h3>
                    <ul class="w_nav2">
                        <?php
						$numb =1 ;
                            foreach($sizes as $size){
								echo"
								<div class='btn'>
									<input type='radio' name='radios' id='radio".$numb."' class='radio' value='$size[autoid]'/>
									<label for='radio".$numb."'>$size[size]</label>
								</div>";
								$numb++;
                                //echo" <li>$size[size]</li>";
                            }
                        ?>
                </ul>

                </div>
                        <div class="btn_frm">
                                <label>Qty: <input type="text" name="my-item-qty" id="qty" value="1" size="3" /></label>
                            <p></p>
                            <ul>
                            <input type="submit" name="my-add-button" value="add to cart" onclick="addtocart()" class="buttonp"  />
                            </ul>
                            <!--<a href="">buy now</a>-->
                        </div>
                     </div>
                    <div class="clearfix"></div>
                    </div>
                  </form>

          	    <div class="single-bottom1">
					<h6>Details</h6>
					<p class="prod-desc"><?= $briefdesc ?></p>
				</div>
				<div class="single-bottom2">
					<h6>Related Products</h6>
	<?php
		$query1 = $this->db->query("select photo,name,briefdesc,itemid,price from catalogue where category=$category and deleted = 0 and type = $type order by transdate desc limit 3 ");

			$start = 0;
			$stop = 2;

				while($start <= $stop){
					$row = $query1->row_array($start);
					$id = $row['itemid'];
					$id = base64_encode($id);

						echo"
								<div class='product'>
								   <div class='product-desc'>
										<div class='product-img'>
										   <img src='$row[photo]' class='img-responsive ' alt=''/>
									   </div>
									   <div class='prod1-desc'>
										   <h5><a class='product_link' href='purchase?getid=$id'>$row[name]</a></h5>
							<p class='product_descr'> $row[briefdesc] </p>
									   </div>
									  <div class='clearfix'></div>
								  </div>
								  <div class='product_price'>
										<span class='price-access'>KES $row[price]</span>
										<button class='button1'><span>Add to cart</span></button>
								  </div>
								 <div class='clearfix'></div>
							 </div>";
					$start++;
				}

	?>
	</div>
	  </div>
                <div class="col-md-3 span_1_of_right">
					<div id="cart_details_3">
						<div class="cart_btn">
							<span class="icon"><i class="fa fa-shopping-basket"></i></span>
							<div class="items simpleCart_quantity"></div>
							<div class="price simpleCart_total"></div>
						</div>

						<div class="simpleCart_items" >

						</div>

					</div>
					<!--<button class="button1" onclick="simpleCart.empty()" ><span>Empty Cart</span></button>-->
					<a href="#" onclick="simpleCart.empty()" class="myButton"> <i class="fa fa-trash"></i> Empty cart</a>
					<a href="#" class="myButton" onclick="checkout()" ><i class="fa fa-shopping-cart"></i> Checkout</a>
                </div>
		 </div></div></div>
	<!-- end content -->
	<!-- content-section-ends -->
		<div class="footer">
		<div class="up-arrow">
			<a class="scroll" href="#home"><img src="../images/up.png" alt="" /></a>
		</div>
			<div class="container">
				<div class="copyrights">
					<p>Copyright &copy; 2015 All rights reserved  <a href="http://www.kaizenkenya.co.ke">  Ryda Inc</a></p>
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript" src="../js/index.js"></script>
</body>
</html>