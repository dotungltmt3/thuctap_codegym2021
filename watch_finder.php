<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Seamaster</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <link type="text/css" rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Overlock:ital@1&display=swap');
		
		#wapper_f{
			max-width: 300px;
		}
		.accordion_f-header{
			padding: 10px 20px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			background: #fff;
			cursor: pointer;
			border-top: 1px solid #B1B1B1;
		}
		.accordion_f-header h3{
			font-size: 15px;
			font-weight: 500;
		}
		.accordion_f-item.active .accordion_f-header{
			color: #7B0002;
		}
		.accordion_f-item.active .arrow{
			transform: rotate(180deg);
		}
		.accordion_f-body{
			padding: 0px 20px;
			display: none;
		}
		.accordion_f-body ul li{
			padding: 10px 20px;
		}
		.accordion_f-body ul li:hover a{
			color: #7B0002;
		}
    </style>
	<script>
		$(document).ready(function(){
			$('.accordion_f-item.active .accordion_f-body').slideDown();
			$('.accordion_f-header').click(function(){
				$(this).parent().toggleClass('active');
				$(this).parent().children('.accordion_f-body').slideToggle();
			});
		});
	</script>
</head>

<body>
	
	<div class="nav_top">
		<div class="nav_t_l">
			<div class="nav">
               
				<label for="nav-mb-input" class="nav_bars-btn">
					<i style="cursor: pointer" class="fas fa-bars"></i>
				</label>
				
				<input type="checkbox" hidden name="" class="nav__input" id="nav-mb-input">
				<label id="hidden" for="nav-mb-input" style="color: black; cursor: pointer">Menu</label>
				<label for="nav-mb-input" class="nav__overlay"></label>
				<!-- Nav Mobile -->
				<div class="left">
					 <main id="accordion">
						<section style="margin-top: 60px;" id="item1">
							<a href="#item1"><h5>WATCHES</h5></a>
							<ul class="item">
								<li><a href="#">CONSTELLATION</a></li>
								<li><a href="#">SEAMASTER</a></li>
								<li><a href="#">SPEEDMASTER</a></li>
								<li><a href="#">DE VILLE</a></li>
								<li><a href="#">Find your Omega</a></li>
								<li><a href="#">Women's Selection</a></li>
								<li><a href="#">Men's Selection</a></li>
								<li>
									<button type="button" class="btn btn-outline-light btn-danger">
										WATCH FINDER
									</button>
								</li>
							</ul>
						</section>

						<section id="item2">
							<a href="#item2"><h5>NATO STRAPS</h5></a>
						</section>

						<section id="item3">
							<a href="#item3"><h5>WATCH STRAPS</h5></a>
						</section>
						 
						 <section id="item4">
							<a href="#item4"><h5>FINE JEWELLERY</h5></a>
							<ul class="item">
								<li><a href="#">CONSTELLATION</a></li>
								<li><a href="#">AQUA SWING</a></li>
								<li><a href="#">OMEGA FLOWER</a></li>
								<li><a href="#">LADYMATIC</a></li>
								<li><a href="#">OMEGA DEWDROP</a></li>
							</ul>
						</section>

						<section style="padding-bottom: 20px; border-bottom: 1px solid #737373;" id="item5">
							<a href="#item5"><h5>ACCESSORIES</h5></a>
							<ul class="item">
								<li><a href="#">FINE LEATHER</a></li>
								<li><a href="#">BRACELETS</a></li>
								<li><a href="#">CUFFLINKS</a></li>
								<li><a href="#">EYEWEAR</a></li>
								<li><a href="#">BELTS</a></li>
								<li><a href="#">KEYHOLDERS & OTHERS</a></li>
								<li><a href="#">FINE FRAGRANCE</a></li>
							</ul>
						</section>

						<section style="margin-top: 20px;" id="item6">
							<a href="#item6"><h5>PLANET OMEGA</h5></a>
							
						</section>
						 
						 <section id="item7">
							<a href="#item7"><h5>NEWS & STORIES</h5></a>
							
						</section>

						<section id="item8">
							<a href="#item8"><h5>STORE LOCATOR</h5></a>
							
						</section>

						<section id="item9">
							<a href="#item9"><h5>CUSTOMER SERVICE</h5></a>
							<ul class="item">
								<li><a href="#">INTERVENTIONS & PRICES</a></li>
								<li><a href="#">FINDING A SERVICE CENTRE</a></li>
								<li><a href="#">5‑YEAR WARRANTY</a></li>
								<li><a href="#">USER MANUALS</a></li>
								<li><a href="#">CERTIFICATES & EXTRACTS</a></li>
								<li><a href="#">PRESERVE YOUR OMEGA</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">GLOSSARY</a></li>
								<li><a href="#">ORDER A CATALOG</a></li>
								<li>
									<button type="button" class="btn btn-outline-light btn-danger">
										CONTACT US
									</button>
								</li>
							</ul>
						</section>
						 
					</main>
				</div>
            </div>
		</div>
		<div class="nav_t_c">
			<a href="index.php"><img src="./img/logo_omega.png" title="Đồng hồ OMEGA thương hiệu cao cấp."></a>
		</div>
		<div class="nav_t_r" style="text-align: right; padding-right: 20px">
			<div class="search-box">
				<input class="search-txt" type="text" name="" placeholder="Type to search...">
				<a class="search-btn" href="#">
				<i class="fas fa-search"></i>
				</a>
			</div>
			<a href="#"><i class="fa fa-map-marker"></i></a>
			<a href="account.php"><i class="fa fa-user"></i></a>
			<a style="margin-left: 10px;" href="#"><i class="fas fa-cart-plus"></i></a>
        </div>
	</div>
	
	<div class="wrapper">
        <nav>
            <ul>
                <li class="dropdown">
                    <a href="#">CONSTELLATION</a>
                    <ul class="menu-area">
                        <h2 style="color: black">CONSTELLATION</h2>
                        <div class= "row">
                            <div class ="col-md-2 bg-primary ctn_image">
   
                            </div>
							<div class ="col-md-2 bg-primary ctn_image">
              
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav5.1.png">
								<a href="#">GLOBEMASTER</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav5.2.png">
								<a href="#">CONSTELLATION</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
             
                            </div>
                            <div class ="col-md-2 ctn_image">
                      
                            </div>
                        </div><br><br>
                            <a style="text-decoration: underline; padding: 20px 40px;" class="more" href="constellation.php">ALL CONSTELLATION</a>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">SEAMASTER</a>
                    <ul class="menu-area">
                        <h2 style="color: black">SEAMASTER</h2>
                        <div class= "row">
							<div class ="col-md-2 ctn_image">
                      
                            </div>
                            <div class ="col-md-2 bg-primary ctn_image">
                               <img src="./img/nav4.1.png">
								<a href="#">AQUA TERRA</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav4.2.png">
								<a href="#">DIVER 300M</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav4.3.png">
								<a href="#">PLANET OCEAN</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav4.4.png">
								<a href="#">HERITAGE MODELS</a>
                            </div>
							<div class ="col-md-2 ctn_image">
                      
                            </div>
                        </div><br><br>
                        <a style="text-decoration: underline; padding: 20px 40px;" class="more" href="seamaster.php">ALL SEAMASTER</a>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">SPEEDMASTER</a>
                    <ul class="menu-area">
                        <h2 style="color: black">SPEEDMASTER</h2>
                        <div class= "row">
                            <div class ="col-md-2 bg-primary ctn_image">
                               <img src="./img/nav3.1.png">
								<a href="#">MOONWATCH</a>
                            </div>
							<div class ="col-md-2 bg-primary ctn_image">
                               <img src="./img/nav3.2.png">
								<a href="#">HERITAGE MODELS</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav3.3.png">
								<a href="#">DARK SIDE OF THE MOON</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav3.4.png">
								<a href="#">SPEEDMASTER 38</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav3.5.png">
								<a href="#">TWO COUNTERS</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav3.6.png">
								<a href="#">INSTRUMENTS</a>
                            </div>
                        </div><br><br>
                        <a style="text-decoration: underline; padding: 20px 40px;" class="more" href="speedmaster.php">ALL SPEEDMASTER</a>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">DE VILLE</a>
                    <ul class="menu-area">
                        <h2 style="color: black">DE VILLE</h2>
                        <div class= "row">
                            <div class ="col-md-2 bg-primary ctn_image">
                               <img src="./img/nav2.1.png">
								<a href="#">LADYMATIC</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav2.2.png">
								<a href="#">HOUR VISION</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav2.3.png">
								<a href="#">TRESOR</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav2.4.png">
								<a href="#">PRESTIGE</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav2.5.png">
								<a href="#">TOURBILLON</a>
                            </div>
                        </div><br><br>
                        <a style="text-decoration: underline; padding: 20px 40px;" class="more" href="DeVille.php">ALL DE VILLE</a>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">Find your OMEGA</a>
                    <ul class="menu-area">
                        <h2 style="color: black">Find your OMEGA</h2>
                        <div class= "row">
                            <div class ="col-md-2 bg-primary ctn_image">
                               <img src="./img/nav1.1.png">
								<a href="#">LADYMATIC</a>
                            </div>
                            <div class ="col-md-2 ctn_image">
                                <img src="./img/nav1.2.png">
								<a href="#">HOUR VISION</a>
                            </div>
                            <div>
								<ul>
									<h4>BY SIZE</h4>
									<li><a href="#">Women's Selection</a></li>
									<li><a href="#">Men's Selection</a></li><br><br>
									<h4>BY STYLE</h4>
									<li><a href="#">Dress Wathces</a></li>
									<li><a href="#">Sport Wathces</a></li>
									<li><a href="#">Dive Wathces</a></li><br><br>
								</ul>
							</div>
							<div>
								<ul>
									<h4>BY MATERIAL</h4>
									<li><a href="#">Gold Wathces</a></li>
									<li><a href="#">Titanium Wathces</a></li>
									<li><a href="#">Ceramic Wathces</a></li>
									<li><a href="#">Steel Wathces</a></li>
								</ul>
							</div>
							<div>
								<ul>
									<h4>BY FEATURE</h4>
									<li><a href="#">Press Wathces</a></li>
									<li><a href="#">Cgronograph Wathces</a></li>
									<li><a href="#">Automatic Wathces</a></li>
									<li><a href="#">Manual Winding Wathces</a></li>
									<li><a href="#">Quartz Wathces</a></li>
								</ul>
							</div>
						</div><br><br>
						<div style="display: flex; margin-left: 42%;">
							<a style="text-decoration: underline; padding: 20px 10px;"  href="find_your_OMEGA.php">ALL SAGGESTIONS</a>
							<a style="text-decoration: underline; padding: 20px 10px;" href="watch_finder.php">WATCH FINDER</a>
						</div>
                    </ul>
                </li>
            </ul>
        </nav>
	</div>
	
	<div id="banner">
		<img style="width: 100%" src="./img/finder_banner.png" alt="">
	</div>
	<div style="display:flex;width: 100%;text-align: center;height: 60px;border-bottom: 2px solid #6A6A6A;margin-top: -5px;">
		<h2 style="width: 93%;line-height: 60px;color: #3C3A3A;">Search by Reference</h2>
		<a class="search_finder"  href="h1_finder">
			<i class="fas fa-search"></i>
		</a>
	</div>
	<div style="display: flex;width: 100%;">
		<div class="left_watch_finder">
			<button style="background: #E8E8E8; padding: 15px 30px;border: none;font-size: 14px; font-weight: 500;margin-bottom: 30px">WATCHES DISPLAYED</button>
			<h1 id="h1_finder" style="color: #726E6E; font-weight: 100; margin-bottom: 30px;">Filters</h1>
				<div id="wapper_f">
					<div class="accordion_f">
						<div class="accordion_f-item active">
							<div class="accordion_f-header">
								<h3>COLLECTION</h3>
								<i class="fas fa-angle-down"></i>
							</div>
							<div class="accordion_f-body">
								<ul>
									<li><a href="#">Seamaster</a></li>
									<li><a href="#">Speedmaster</a></li>
									<li><a href="#">Constellation</a></li>
									<li><a href="#">De Ville</a></li>
									<li><a href="#">Specialities</a></li>
								</ul>
							</div>
						</div>
						<div class="accordion_f-item">
							<div class="accordion_f-header">
								<h3>SUBCOLLECTION</h3>
								<i class="fas fa-angle-down"></i>
							</div>
							<div class="accordion_f-body">
								<ul>
									<li><a href="#">Dark Side of the Moon</a></li>
									<li><a href="#">Anniversary Series</a></li>
									<li><a href="#">City Editions</a></li>
									<li><a href="#">Moonwatch Professional</a></li>
									<li><a href="#">Moonphase</a></li>
									<li><a href="#">Two Counters</a></li>
									<li><a href="#">Olympic Official Timekeeper</a></li>
									<li><a href="#">Calibre 321</a></li>
									<li><a href="#">Seamaster 1948</a></li>
									<li><a href="#">Aqua Terra 150M</a></li>
								</ul>
							</div>
						</div>
						<div class="accordion_f-item">
							<div class="accordion_f-header">
								<h3>CASE</h3>
								<i class="fas fa-angle-down"></i>
							</div>
							<div class="accordion_f-body">
								<ul>
									<li><a href="#">Steel</a></li>
									<li><a href="#">Steel ‑ Gold</a></li>
									<li><a href="#">Gold</a></li>
									<li><a href="#">Ceramic</a></li>
									<li><a href="#">Titanium</a></li>
									<li><a href="#">Platinum</a></li>
									<li><a href="#">Tantalum</a></li>
								</ul>
							</div>
						</div>
						<div class="accordion_f-item">
							<div class="accordion_f-header">
								<h3>BRACELET</h3>
								<i class="fas fa-angle-down"></i>
							</div>
							<div class="accordion_f-body">
								<ul>
									<li><a href="#">Steel</a></li>
									<li><a href="#">Steel ‑ Gold</a></li>
									<li><a href="#">Gold</a></li>
									<li><a href="#">NATO Strap</a></li>
									<li><a href="#">Leather</a></li>
									<li><a href="#">Nylon</a></li>
									<li><a href="#">Rubber</a></li>
									<li><a href="#">Titanium</a></li>
									<li><a href="#">Platinum</a></li>
									<li><a href="#">Tantalum</a></li>
								</ul>
							</div>
						</div>
						<div class="accordion_f-item">
							<div class="accordion_f-header">
								<h3>CASE DIAMETER</h3>
								<i class="fas fa-angle-down"></i>
							</div>
							<div class="accordion_f-body">
								<ul>
									<li><a href="#">< 30 mm</a></li>
									<li><a href="#">30 to < 35 mm</a></li>
									<li><a href="#">35 to < 38 mm</a></li>
									<li><a href="#">38 to < 40 mm</a></li>
									<li><a href="#">40 to < 42 mm</a></li>
									<li><a href="#">≥ 42 mm</a></li>
								</ul>
							</div>
						</div>
						<div class="accordion_f-item">
							<div class="accordion_f-header">
								<h3>FEATURES</h3>
								<i class="fas fa-angle-down"></i>
							</div>
							<div class="accordion_f-body">
								<ul>
									<li><a href="#">Chronograph</a></li>
									<li><a href="#">Chronometer</a></li>
									<li><a href="#">Master Chronometer Certified</a></li>
									<li><a href="#">Transparent case back</a></li>
									<li><a href="#">24 hours GMT</a></li>
									<li><a href="#">Annual calendar</a></li>
									<li><a href="#">Anti‑magnetic</a></li>
									<li><a href="#">Date</a></li>
									<li><a href="#">Day‑Date</a></li>
									<li><a href="#">Diamonds</a></li>
								</ul>
							</div>
						</div>
						<div class="accordion_f-item">
							<div class="accordion_f-header">
								<h3>MOVEMENT TYPE</h3>
								<i class="fas fa-angle-down"></i>
							</div>
							<div class="accordion_f-body">
								<ul>
									<li><a href="#">Manual‑winding</a></li>
									<li><a href="#">Self winding</a></li>
									<li><a href="#">Quartz</a></li>
								</ul>
							</div>
						</div>
						<div class="accordion_f-item">
							<div class="accordion_f-header">
								<h3>WATER RESISTANCE</h3>
								<i class="fas fa-angle-down"></i>
							</div>
							<div class="accordion_f-body">
								<ul>
									<li><a href="#">0 bar (0 metres / 0 feet)</a></li>
									<li><a href="#">3 bar (30 metres / 100 feet)</a></li>
									<li><a href="#">5 bar (50 metres / 167 feet)</a></li>
									<li><a href="#">6 bar (60 metres / 200 feet)</a></li>
									<li><a href="#">10 bar (100 metres / 330 feet)</a></li>
									<li><a href="#">15 bar (150 metres / 500 feet)</a></li>
									<li><a href="#">30 bar (300 metres / 1000 feet)</a></li>
									<li><a href="#">60 bar (600 metres / 2000 feet)</a></li>
									<li><a href="#">120 bar (1200 metres / 4000 feet)</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<h1 style="color: #726E6E; font-weight: 100; margin-bottom: 30px; margin-top: 100px;">Discover also</h1>
			<button>Men's selection</button>
			<button>Women's selection</button>
			<button>Dive Watches</button><br>
			<button>Sport Watches</button>
		</div>
		<div class="right_watch_finder">
			hihi
		</div>
	</div>
	<!--footer-->
	<div style="background:#E2DDDD" class="lienhe">
		<div class="send_mail">
			<h5>SUBSCRIBE TO OUR NEWSLETTER</h5><br>
			<input type="text" style="background:white" placeholder="Enter your email address">
			<input id="send_mail" type="submit" value="SUBMIT"/>
		</div>
		<div class="lienket">
			<h5>FOLLOW US</h5>
			<div style="color: #423E3E">
				<i class="fab fa-instagram"></i>
				<i class="fab fa-facebook-f"></i>
				<i class="fab fa-twitter"></i>
				<i class="fab fa-youtube"></i>
				<i class="fab fa-weixin"></i>
				<i class="fab fa-pinterest-square"></i>
			</div>
		</div>
	</div>
	<div class="row1">
		<div>
			<ul>
				<h4>THE COLLECTION</h4>
				<li><a href="#">Globemaster</a></li>
				<li><a href="#">Constellation</a></li>
				<li><a href="#">Diver 300M</a></li>
				<li><a href="#">Aqua terra 150M</a></li>
				<li><a href="#">Seamaster 300</a></li>
				<li><a href="#">Planet Ocean 600M</a></li>
				<li><a href="#">Moonwatch</a></li>
				<li><a href="#">Dark side of the Moon</a></li>
				<li><a href="#">Ladymatic</a></li>
				<li><a href="#">Hour Vision</a></li>
				<li><a href="#">Trésor</a></li>
				<li><a href="#">Prestige</a></li>
				<li><a href="#">Tourbillon</a></li>
			</ul>
		</div>
		<div>
			<ul>
				<h4>FIND YOUR OMEGA</h4>
				<li><a href="#">Women's Selection</a></li>
				<li><a href="#">Men's Selection</a></li>
				<li><a href="#">Gold Watches</a></li>
				<li><a href="#">Chronograph Watches</a></li>
				<li><a href="#">Master Chronometer</a></li><br><br>
				<h4>PLANET OMEGA</h4>
				<li><a href="#">Watchmaking</a></li>
				<li><a href="#">Space</a></li>
				<li><a href="#">Sport</a></li>
				<li><a href="#">James Bond</a></li>
				<li><a href="#">The OMEGA Museum</a></li>
				<li><a href="#">Chronicle</a></li>
			</ul>
		</div>
		<div>
			<ul>
				<h4>MASTER CHRONOMETER</h4>
				<li><a href="#">Access my Test Results</a></li>
				<li><a href="#">iPhone Card Scanner App</a></li><br><br>
				<h4>STORE LOCATOR</h4>
				<li><a href="#">Find a Store</a></li>
				<li><a href="#">Locate me</a></li>
			</ul>
		</div>
		<div>
			<ul>
				<h4>CUSTOMER SERVICE</h4>
				<li><a href="#">Interventions and Prices</a></li>
				<li><a href="#">Preserve your OMEGA</a></li>
				<li><a href="#">Find a Service Center</a></li>
				<li><a href="#">Order an Extract from the Archives</a></li>
				<li><a href="#">Order a Catalogue</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="#">GLOSSARY</a></li><br><br>
				<h4>MORE</h4>
				<li><a href="#">Press Room</a></li>
				<li><a href="#">Jobs</a></li>
			</ul><br>
			<button type="button" class="btn btn-outline-light btn-danger">CONTACT US</button>
		</div>
	</div>
	<div class="footer">
		<div class="ftr_">
			<small style="padding-left: 15px">Copyright OMEGA SA. All rights reserved.</small>
				<ul>
					<li><a href="#">Terms of Use</a></li>
					<li><a href="#">Privacy Notice</a></li>
					<li><a href="#">Cookie Notice</a></li>
					
				</ul>
			</div>
			<div class="footer_hidden" style="color: #555555;margin-left: 40%">
				<i style="color: #555555" class="fa fa-globe"></i>ENGLISH (INTERNETIONAL) <i style="color: #555555" class="fa fa-angle-up"></i>
			</div>
		</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="style.js"></script>

	
</body>
</html>
