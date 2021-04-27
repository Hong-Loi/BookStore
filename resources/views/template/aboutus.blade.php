<!doctype html>
<html class="no-js" lang="zxx"> 

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <title>Book Library</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-addnav">
								<li>
									<a href="javascript:void(0);">
										<i class="icon-envelope"></i>
										<em>Contact</em>
									</a>
								</li>
								<li>
									<a href="javascript:void(0);">
										<i class="icon-question-circle"></i>
										<em>Help</em>
									</a>
								</li>
							</ul>
							<div class="dropdown tg-themedropdown tg-currencydropdown">
								<a href="javascript:void(0);" id="tg-currenty" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-earth"></i>
									<span>Currency</span>
								</a>
								<ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-currenty">
									<li>
										<a href="javascript:void(0);">
											<i>£</i>
											<span>British Pound</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i>$</i>
											<span>Us Dollar</span>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<i>€</i>
											<span>Euro</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="tg-userlogin">
								<figure><a href="javascript:void(0);"><img src="images/users/img-01.jpg" alt="image description"></a></figure>
								<span>Hi, John</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-middlecontainer">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="tg-logo"><a href="index-2.blade.php"><img src="images/logo.png" alt="company name here"></a></strong>
							<div class="tg-wishlistandcart">
								<div class="dropdown tg-themedropdown tg-wishlistdropdown">
									<a href="javascript:void(0);" id="tg-wishlisst" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="tg-themebadge">3</span>
										<i class="icon-heart"></i>
										<span>Wishlist</span>
									</a>
									<div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-wishlisst">
										<div class="tg-description"><p>No products were added to the wishlist!</p></div>
									</div>
								</div>
								<div class="dropdown tg-themedropdown tg-minicartdropdown">
									<a href="javascript:void(0);" id="tg-minicart" class="tg-btnthemedropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="tg-themebadge">3</span>
										<i class="icon-cart"></i>
										<span>$123.00</span>
									</a>
									<div class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-minicart">
										<div class="tg-minicartbody">
											<div class="tg-minicarproduct">
												<figure>
													<img src="images/products/img-01.jpg" alt="image description">
													
												</figure>
												<div class="tg-minicarproductdata">
													<h5><a href="javascript:void(0);">Our State Fair Is A Great Function</a></h5>
													<h6><a href="javascript:void(0);">$ 12.15</a></h6>
												</div>
											</div>
											<div class="tg-minicarproduct">
												<figure>
													<img src="images/products/img-02.jpg" alt="image description">
													
												</figure>
												<div class="tg-minicarproductdata">
													<h5><a href="javascript:void(0);">Bring Me To Light</a></h5>
													<h6><a href="javascript:void(0);">$ 12.15</a></h6>
												</div>
											</div>
											<div class="tg-minicarproduct">
												<figure>
													<img src="images/products/img-03.jpg" alt="image description">
													
												</figure>
												<div class="tg-minicarproductdata">
													<h5><a href="javascript:void(0);">Have Faith In Your Soul</a></h5>
													<h6><a href="javascript:void(0);">$ 12.15</a></h6>
												</div>
											</div>
										</div>
										<div class="tg-minicartfoot">
											<a class="tg-btnemptycart" href="javascript:void(0);">
												<i class="fa fa-trash-o"></i>
												<span>Clear Your Cart</span>
											</a>
											<span class="tg-subtotal">Subtotal: <strong>35.78</strong></span>
											<div class="tg-btns">
												<a class="tg-btn tg-active" href="javascript:void(0);">View Cart</a>
												<a class="tg-btn" href="javascript:void(0);">Checkout</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tg-searchbox">
								<form class="tg-formtheme tg-formsearch">
									<fieldset>
										<input type="text" name="search" class="typeahead form-control" placeholder="Search by title, author, keyword, ISBN...">
										<button type="submit"><i class="icon-magnifier"></i></button>
									</fieldset>
									<a href="javascript:void(0);">+  Advanced Search</a>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li class="menu-item-has-children menu-item-has-mega-menu">
											<a href="javascript:void(0);">All Categories</a>
											<div class="mega-menu">
												<ul class="tg-themetabnav" role="tablist">
													<li role="presentation" class="active">
														<a href="#artandphotography" aria-controls="artandphotography" role="tab" data-toggle="tab">Art &amp; Photography</a>
													</li>
													<li role="presentation">
														<a href="#biography" aria-controls="biography" role="tab" data-toggle="tab">Biography</a>
													</li>
													<li role="presentation">
														<a href="#childrensbook" aria-controls="childrensbook" role="tab" data-toggle="tab">Children’s Book</a>
													</li>
													<li role="presentation">
														<a href="#craftandhobbies" aria-controls="craftandhobbies" role="tab" data-toggle="tab">Craft &amp; Hobbies</a>
													</li>
													<li role="presentation">
														<a href="#crimethriller" aria-controls="crimethriller" role="tab" data-toggle="tab">Crime &amp; Thriller</a>
													</li>
													<li role="presentation">
														<a href="#fantasyhorror" aria-controls="fantasyhorror" role="tab" data-toggle="tab">Fantasy &amp; Horror</a>
													</li>
													<li role="presentation">
														<a href="#fiction" aria-controls="fiction" role="tab" data-toggle="tab">Fiction</a>
													</li>
													<li role="presentation">
														<a href="#fooddrink" aria-controls="fooddrink" role="tab" data-toggle="tab">Food &amp; Drink</a>
													</li><li role="presentation">
														<a href="#graphicanimemanga" aria-controls="graphicanimemanga" role="tab" data-toggle="tab">Graphic, Anime &amp; Manga</a>
													</li>
													<li role="presentation">
														<a href="#sciencefiction" aria-controls="sciencefiction" role="tab" data-toggle="tab">Science Fiction</a>
													</li>
												</ul>
												<div class="tab-content tg-themetabcontent">
													<div role="tabpanel" class="tab-pane active" id="artandphotography">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Tough As Nails</a></li>
																	<li><a href="products.blade.php">Pro Grease Monkey</a></li>
																	<li><a href="products.blade.php">Building Memories</a></li>
																	<li><a href="products.blade.php">Bulldozer Boyz</a></li>
																	<li><a href="products.blade.php">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Consectetur adipisicing</a></li>
																	<li><a href="products.blade.php">Aelit sed do eiusmod</a></li>
																	<li><a href="products.blade.php">Tempor incididunt labore</a></li>
																	<li><a href="products.blade.php">Dolore magna aliqua</a></li>
																	<li><a href="products.blade.php">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Veniam quis nostrud</a></li>
																	<li><a href="products.blade.php">Exercitation</a></li>
																	<li><a href="products.blade.php">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.blade.php">Commodo conseat</a></li>
																	<li><a href="products.blade.php">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.blade.php">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="biography">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Veniam quis nostrud</a></li>
																	<li><a href="products.blade.php">Exercitation</a></li>
																	<li><a href="products.blade.php">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.blade.php">Commodo conseat</a></li>
																	<li><a href="products.blade.php">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Tough As Nails</a></li>
																	<li><a href="products.blade.php">Pro Grease Monkey</a></li>
																	<li><a href="products.blade.php">Building Memories</a></li>
																	<li><a href="products.blade.php">Bulldozer Boyz</a></li>
																	<li><a href="products.blade.php">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Consectetur adipisicing</a></li>
																	<li><a href="products.blade.php">Aelit sed do eiusmod</a></li>
																	<li><a href="products.blade.php">Tempor incididunt labore</a></li>
																	<li><a href="products.blade.php">Dolore magna aliqua</a></li>
																	<li><a href="products.blade.php">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.blade.php">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="childrensbook">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Tough As Nails</a></li>
																	<li><a href="products.blade.php">Pro Grease Monkey</a></li>
																	<li><a href="products.blade.php">Building Memories</a></li>
																	<li><a href="products.blade.php">Bulldozer Boyz</a></li>
																	<li><a href="products.blade.php">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Consectetur adipisicing</a></li>
																	<li><a href="products.blade.php">Aelit sed do eiusmod</a></li>
																	<li><a href="products.blade.php">Tempor incididunt labore</a></li>
																	<li><a href="products.blade.php">Dolore magna aliqua</a></li>
																	<li><a href="products.blade.php">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Veniam quis nostrud</a></li>
																	<li><a href="products.blade.php">Exercitation</a></li>
																	<li><a href="products.blade.php">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.blade.php">Commodo conseat</a></li>
																	<li><a href="products.blade.php">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.blade.php">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="craftandhobbies">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Veniam quis nostrud</a></li>
																	<li><a href="products.blade.php">Exercitation</a></li>
																	<li><a href="products.blade.php">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.blade.php">Commodo conseat</a></li>
																	<li><a href="products.blade.php">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Tough As Nails</a></li>
																	<li><a href="products.blade.php">Pro Grease Monkey</a></li>
																	<li><a href="products.blade.php">Building Memories</a></li>
																	<li><a href="products.blade.php">Bulldozer Boyz</a></li>
																	<li><a href="products.blade.php">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Consectetur adipisicing</a></li>
																	<li><a href="products.blade.php">Aelit sed do eiusmod</a></li>
																	<li><a href="products.blade.php">Tempor incididunt labore</a></li>
																	<li><a href="products.blade.php">Dolore magna aliqua</a></li>
																	<li><a href="products.blade.php">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.blade.php">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="crimethriller">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Tough As Nails</a></li>
																	<li><a href="products.blade.php">Pro Grease Monkey</a></li>
																	<li><a href="products.blade.php">Building Memories</a></li>
																	<li><a href="products.blade.php">Bulldozer Boyz</a></li>
																	<li><a href="products.blade.php">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Consectetur adipisicing</a></li>
																	<li><a href="products.blade.php">Aelit sed do eiusmod</a></li>
																	<li><a href="products.blade.php">Tempor incididunt labore</a></li>
																	<li><a href="products.blade.php">Dolore magna aliqua</a></li>
																	<li><a href="products.blade.php">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Veniam quis nostrud</a></li>
																	<li><a href="products.blade.php">Exercitation</a></li>
																	<li><a href="products.blade.php">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.blade.php">Commodo conseat</a></li>
																	<li><a href="products.blade.php">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.blade.php">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="fantasyhorror">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Veniam quis nostrud</a></li>
																	<li><a href="products.blade.php">Exercitation</a></li>
																	<li><a href="products.blade.php">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.blade.php">Commodo conseat</a></li>
																	<li><a href="products.blade.php">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Tough As Nails</a></li>
																	<li><a href="products.blade.php">Pro Grease Monkey</a></li>
																	<li><a href="products.blade.php">Building Memories</a></li>
																	<li><a href="products.blade.php">Bulldozer Boyz</a></li>
																	<li><a href="products.blade.php">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Consectetur adipisicing</a></li>
																	<li><a href="products.blade.php">Aelit sed do eiusmod</a></li>
																	<li><a href="products.blade.php">Tempor incididunt labore</a></li>
																	<li><a href="products.blade.php">Dolore magna aliqua</a></li>
																	<li><a href="products.blade.php">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.blade.php">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="fiction">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Tough As Nails</a></li>
																	<li><a href="products.blade.php">Pro Grease Monkey</a></li>
																	<li><a href="products.blade.php">Building Memories</a></li>
																	<li><a href="products.blade.php">Bulldozer Boyz</a></li>
																	<li><a href="products.blade.php">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Consectetur adipisicing</a></li>
																	<li><a href="products.blade.php">Aelit sed do eiusmod</a></li>
																	<li><a href="products.blade.php">Tempor incididunt labore</a></li>
																	<li><a href="products.blade.php">Dolore magna aliqua</a></li>
																	<li><a href="products.blade.php">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Veniam quis nostrud</a></li>
																	<li><a href="products.blade.php">Exercitation</a></li>
																	<li><a href="products.blade.php">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.blade.php">Commodo conseat</a></li>
																	<li><a href="products.blade.php">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.blade.php">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="fooddrink">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Veniam quis nostrud</a></li>
																	<li><a href="products.blade.php">Exercitation</a></li>
																	<li><a href="products.blade.php">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.blade.php">Commodo conseat</a></li>
																	<li><a href="products.blade.php">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Tough As Nails</a></li>
																	<li><a href="products.blade.php">Pro Grease Monkey</a></li>
																	<li><a href="products.blade.php">Building Memories</a></li>
																	<li><a href="products.blade.php">Bulldozer Boyz</a></li>
																	<li><a href="products.blade.php">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Consectetur adipisicing</a></li>
																	<li><a href="products.blade.php">Aelit sed do eiusmod</a></li>
																	<li><a href="products.blade.php">Tempor incididunt labore</a></li>
																	<li><a href="products.blade.php">Dolore magna aliqua</a></li>
																	<li><a href="products.blade.php">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.blade.php">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="graphicanimemanga">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Tough As Nails</a></li>
																	<li><a href="products.blade.php">Pro Grease Monkey</a></li>
																	<li><a href="products.blade.php">Building Memories</a></li>
																	<li><a href="products.blade.php">Bulldozer Boyz</a></li>
																	<li><a href="products.blade.php">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Consectetur adipisicing</a></li>
																	<li><a href="products.blade.php">Aelit sed do eiusmod</a></li>
																	<li><a href="products.blade.php">Tempor incididunt labore</a></li>
																	<li><a href="products.blade.php">Dolore magna aliqua</a></li>
																	<li><a href="products.blade.php">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Veniam quis nostrud</a></li>
																	<li><a href="products.blade.php">Exercitation</a></li>
																	<li><a href="products.blade.php">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.blade.php">Commodo conseat</a></li>
																	<li><a href="products.blade.php">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.blade.php">view all</a>
																</div>
															</li>
														</ul>
													</div>
													<div role="tabpanel" class="tab-pane" id="sciencefiction">
														<ul>
															<li>
																<div class="tg-linkstitle">
																	<h2>History</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Veniam quis nostrud</a></li>
																	<li><a href="products.blade.php">Exercitation</a></li>
																	<li><a href="products.blade.php">Laboris nisi ut aliuip</a></li>
																	<li><a href="products.blade.php">Commodo conseat</a></li>
																	<li><a href="products.blade.php">Duis aute irure</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Architecture</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Tough As Nails</a></li>
																	<li><a href="products.blade.php">Pro Grease Monkey</a></li>
																	<li><a href="products.blade.php">Building Memories</a></li>
																	<li><a href="products.blade.php">Bulldozer Boyz</a></li>
																	<li><a href="products.blade.php">Build Or Leave On Us</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
															<li>
																<div class="tg-linkstitle">
																	<h2>Art Forms</h2>
																</div>
																<ul>
																	<li><a href="products.blade.php">Consectetur adipisicing</a></li>
																	<li><a href="products.blade.php">Aelit sed do eiusmod</a></li>
																	<li><a href="products.blade.php">Tempor incididunt labore</a></li>
																	<li><a href="products.blade.php">Dolore magna aliqua</a></li>
																	<li><a href="products.blade.php">Ut enim ad minim</a></li>
																</ul>
																<a class="tg-btnviewall" href="products.blade.php">View All</a>
															</li>
														</ul>
														<ul>
															<li>
																<figure><img src="images/img-01.png" alt="image description"></figure>
																<div class="tg-textbox">
																	<h3>More Than<span>12,0657,53</span>Books Collection</h3>
																	<div class="tg-description">
																		<p>Consectetur adipisicing elit sed doe eiusmod tempor incididunt laebore toloregna aliqua enim.</p>
																	</div>
																	<a class="tg-btn" href="products.blade.php">view all</a>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Home</a>
											<ul class="sub-menu">
												<li><a href="index-2.blade.php">Home V one</a></li>
												<li><a href="indexv2.blade.php">Home V two</a></li>
												<li><a href="indexv3.blade.php">Home V three</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Authors</a>
											<ul class="sub-menu">
												<li><a href="authors.blade.php">Authors</a></li>
												<li><a href="authordetail.blade.php">Author Detail</a></li>
											</ul>
										</li>
										<li><a href="products.blade.php">Best Selling</a></li>
										<li><a href="products.blade.php">Weekly Sale</a></li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Latest News</a>
											<ul class="sub-menu">
												<li><a href="newslist.blade.php">News List</a></li>
												<li><a href="newsgrid.blade.php">News Grid</a></li>
												<li><a href="newsdetail.blade.php">News Detail</a></li>
											</ul>
										</li>
										<li><a href="contactus.blade.php">Contact</a></li>
										<li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);"><i class="icon-menu"></i></a>
											<ul class="sub-menu">
												<li class="menu-item-has-children">
													<a href="aboutus.blade.php">Products</a>
													<ul class="sub-menu">
														<li><a href="products.blade.php">Products</a></li>
														<li><a href="productdetail.blade.php">Product Detail</a></li>
													</ul>
												</li>
												<li class="current-menu-item"><a href="aboutus.blade.php">About Us</a></li>
												<li><a href="404error.blade.php">404 Error</a></li>
												<li><a href="comingsoon.blade.php">Coming Soon</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="tg-innerbanner tg-haslayout tg-parallax tg-bginnerbanner" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-07.jpg">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-innerbannercontent">
							<h1>About Us</h1>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">home</a></li>
								<li class="tg-active">About Us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-aboutus">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<div class="tg-aboutusshortcode">
									<div class="tg-sectionhead">
										<h2><span>Greetings &amp; Welcome</span>Know More About Us</h2>
									</div>
									<div class="tg-description">
										<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
									</div>
									<div class="tg-btns">
										<a class="tg-btn tg-active" href="javascript:void(0);">Our History</a>
										<a class="tg-btn" href="javascript:void(0);">Meet Our Team</a>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								<figure>
									<img src="images/placeholder.jpg" alt="image description">
									<iframe src="https://www.youtube.com/embed/acwr_Islo9A?rel=0&amp;controls=0&amp;showinfo=0"></iframe>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					About Us End
			*************************************-->
			<!--************************************
					Call to Action Start
			*************************************-->
			<section class="tg-parallax tg-bgcalltoaction tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-calltoaction">
									<h2>Fully Loaded Template</h2>
									<h3>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</h3>
									<a class="tg-btn tg-active" href="javascript:void(0);">Buy Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Call to Action End
			*************************************-->
			<!--************************************
					Success Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-successstory">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectionhead">
									<h2><span>Our Pride Moments</span>Journey of Success</h2>
								</div>
								<div id="tg-successslider" class="tg-successslider tg-success owl-carousel">
									<div class="item">
										<figure>
											<img src="images/img-01.jpg" alt="image description">
										</figure>
										<div class="tg-successcontent">
											<div class="tg-sectionhead">
												<h2><span>June 27, 2017</span>First Step Toward Success</h2>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
											</div>
										</div>
									</div>
									<div class="item">
										<figure>
											<img src="images/img-01.jpg" alt="image description">
										</figure>
										<div class="tg-successcontent">
											<div class="tg-sectionhead">
												<h2><span>June 27, 2017</span>First Step Toward Success</h2>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
											</div>
										</div>
									</div>
									<div class="item">
										<figure>
											<img src="images/img-01.jpg" alt="image description">
										</figure>
										<div class="tg-successcontent">
											<div class="tg-sectionhead">
												<h2><span>June 27, 2017</span>First Step Toward Success</h2>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore toloregna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoiars nisiuip commodo consequat aute irure dolor in aprehenderit aveli esseati cillum dolor fugiat nulla pariatur cepteur sint occaecat cupidatat.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Success End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-parallax tg-bgtestimonials tg-haslayout" data-z-index="-100" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
								<div id="tg-testimonialsslider" class="tg-testimonialsslider tg-testimonials owl-carousel">
									<div class="item tg-testimonial">
										<figure><img src="images/author/imag-02.jpg" alt="image description"></figure>
										<blockquote><q>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</q></blockquote>
										<div class="tg-testimonialauthor">
											<h3>Holli Fenstermacher</h3>
											<span>Manager @ CIFP</span>
										</div>
									</div>
									<div class="item tg-testimonial">
										<figure><img src="images/author/imag-02.jpg" alt="image description"></figure>
										<blockquote><q>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</q></blockquote>
										<div class="tg-testimonialauthor">
											<h3>Holli Fenstermacher</h3>
											<span>Manager @ CIFP</span>
										</div>
									</div>
									<div class="item tg-testimonial">
										<figure><img src="images/author/imag-02.jpg" alt="image description"></figure>
										<blockquote><q>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore tolore magna aliqua enim ad minim veniam, quis nostrud exercitation ullamcoiars nisi ut aliquip commodo.</q></blockquote>
										<div class="tg-testimonialauthor">
											<h3>Holli Fenstermacher</h3>
											<span>Manager @ CIFP</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
					Authors Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<h2><span>Team Behind Book Library</span>Meet Our Professionals</h2>
							</div>
						</div>
						<div id="tg-teamsslider" class="tg-authors tg-authorsslider tg-teamsmember owl-carousel">
							<div class="item tg-author tg-member">
								<figure><a href="javascript:void(0);"><img src="images/team/img-01.jpg" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Jude Morphew</a></h2>
									<span>Online Retail Manager</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author tg-member">
								<figure><a href="javascript:void(0);"><img src="images/team/img-02.jpg" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Book Burger</a></h2>
									<span>Bookstore Director</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author tg-member">
								<figure><a href="javascript:void(0);"><img src="images/team/img-03.jpg" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Book Ship &amp; Co.</a></h2>
									<span>Business Operations</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author tg-member">
								<figure><a href="javascript:void(0);"><img src="images/team/img-04.jpg" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Enoch Gallion</a></h2>
									<span>Assistant Director</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author tg-member">
								<figure><a href="javascript:void(0);"><img src="images/team/img-05.jpg" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Book House</a></h2>
									<span>Business Operations</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="item tg-author tg-member">
								<figure><a href="javascript:void(0);"><img src="images/team/img-04.jpg" alt="image description"></a></figure>
								<div class="tg-authorcontent">
									<h2><a href="javascript:void(0);">Linnie Klimek</a></h2>
									<span>Assistant Director</span>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Authors End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footerarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-clientservices">
								<li class="tg-devlivery">
									<span class="tg-clientserviceicon"><i class="icon-rocket"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Fast Delivery</h3>
										<p>Shipping Worldwide</p>
									</div>
								</li>
								<li class="tg-discount">
									<span class="tg-clientserviceicon"><i class="icon-tag"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Open Discount</h3>
										<p>Offering Open Discount</p>
									</div>
								</li>
								<li class="tg-quality">
									<span class="tg-clientserviceicon"><i class="icon-leaf"></i></span>
									<div class="tg-titlesubtitle">
										<h3>Eyes On Quality</h3>
										<p>Publishing Quality Work</p>
									</div>
								</li>
								<li class="tg-support">
									<span class="tg-clientserviceicon"><i class="icon-heart"></i></span>
									<div class="tg-titlesubtitle">
										<h3>24/7 Support</h3>
										<p>Serving Every Moments</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="tg-threecolumns">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-footercol">
									<strong class="tg-logo"><a href="javascript:void(0);"><img src="images/flogo.png" alt="image description"></a></strong>
									<ul class="tg-contactinfo">
										<li>
											<i class="icon-apartment"></i>
											<address>Suit # 07, Rose world Building, Street # 02, AT246T Manchester</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>
												<em>0800 12345 - 678 - 89</em>
												<em>+4 1234 - 4567 - 67</em>
											</span>
										</li>
										<li>
											<i class="icon-clock"></i>
											<span>Serving 7 Days A Week From 9am - 5pm</span>
										</li>
										<li>
											<i class="icon-envelope"></i>
											<span>
												<em><a href="mailto:support@domain.com">support@domain.com</a></em>
												<em><a href="mailto:info@domain.com">info@domain.com</a></em>
											</span>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
										<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="tg-footercol tg-widget tg-widgetnavigation">
									<div class="tg-widgettitle">
										<h3>Shipping And Help Information</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li><a href="javascript:void(0);">Terms of Use</a></li>
											<li><a href="javascript:void(0);">Terms of Sale</a></li>
											<li><a href="javascript:void(0);">Returns</a></li>
											<li><a href="javascript:void(0);">Privacy</a></li>
											<li><a href="javascript:void(0);">Cookies</a></li>
											<li><a href="javascript:void(0);">Contact Us</a></li>
											<li><a href="javascript:void(0);">Our Affiliates</a></li>
											<li><a href="javascript:void(0);">Vision &amp; Aim</a></li>
										</ul>
										<ul>
											<li><a href="javascript:void(0);">Our Story</a></li>
											<li><a href="javascript:void(0);">Meet Our Team</a></li>
											<li><a href="javascript:void(0);">FAQ</a></li>
											<li><a href="javascript:void(0);">Testimonials</a></li>
											<li><a href="javascript:void(0);">Join Our Team</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
								<div class="tg-footercol tg-widget tg-widgettopsellingauthors">
									<div class="tg-widgettitle">
										<h3>Top Selling Authors</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li>
												<figure><a href="javascript:void(0);"><img src="images/author/imag-09.jpg" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="javascript:void(0);">Jude Morphew</a></h4>
													<p>21,658 Published Books</p>
												</div>
											</li>
											<li>
												<figure><a href="javascript:void(0);"><img src="images/author/imag-10.jpg" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="javascript:void(0);">Shaun Humes</a></h4>
													<p>20,257 Published Books</p>
												</div>
											</li>
											<li>
												<figure><a href="javascript:void(0);"><img src="images/author/imag-11.jpg" alt="image description"></a></figure>
												<div class="tg-authornamebooks">
													<h4><a href="javascript:void(0);">Kathrine Culbertson</a></h4>
													<p>15,686 Published Books</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-newsletter">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<h4>Signup Newsletter!</h4>
							<h5>Consectetur adipisicing elit sed do eiusmod tempor incididunt.</h5>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<form class="tg-formtheme tg-formnewsletter">
								<fieldset>
									<input type="email" name="email" class="form-control" placeholder="Enter Your Email ID">
									<button type="button"><i class="icon-envelope"></i></button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<a id="tg-btnbacktotop" class="tg-btnbacktotop" href="javascript:void(0);"><i class="icon-chevron-up"></i></a>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-paymenttype"><img src="images/paymenticon.png" alt="image description"></span>
							<span class="tg-copyright">2017 All Rights Reserved By &copy; Book Library</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
</body>

</html>