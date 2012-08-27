<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Restaurant Website and Gallery Template with jQuery and Google Maps</title>
		<meta charset=utf-8>
        <meta name="description" content="Restaurant Website and Gallery Template with jQuery and Google Maps" />
        <meta name="keywords" content="jquery, gallery, images, css3, html5, photography, website, template, google maps, sliding, background"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis+Light' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
    </head>
    <body>
		<div id="map"></div>
		<div id="bf_container" class="bf_container">
			<div id="bf_background" class="bf_background">
				<img src="images/background/default.jpg" alt="image1" style="display:none;"/>
				<div class="bf_overlay"></div>
			</div>
			<div id="bf_page_menu" class="bf_menu" >
				<h1 class="title">Piano !<span>Italien à Paris</span></h1>
				<ul>
					<li><a href="#" data-content="home"><span class="bf_hover"></span><span>Bienvenue</span></a></li>
					<li><a href="#" data-content="about"><span class="bf_hover"></span><span>Notre équipe</span></a></li>
					<li><a href="#" data-content="menu"><span class="bf_hover"></span><span>Notre carte</span></a></li>
					<li><a href="#" data-content="visit"><span class="bf_hover"></span><span>Notre adresse</span></a></li>
				</ul>
			</div>
			<div class="bf_page" id="home" style="display:block;">
				<div class="bf_content_text">
					<h2>Bienvenue</h2>
					<p>
					gravida lectus et accumsan. Fusce eleifend dolor vitae augue dictum id elementum erat ornare. Curabitur dolor magna, molestie nec varius sit amet, aliquam a neque. Aenean erat lacus, tristique ut hendrerit ut, faucibus quis tortor. Donec molestie leo at lectus tincidunt non varius libero posuere. Quisque id lorem arcu. Mauris auctor velit sed neque ullamcorper pharetra. Pellentesque dapibus suscipit auctor. Proin eget dui quis nunc viverra molestie. Morbi tristique mollis aliquet. Integer ut elit a nibh pulvinar lobortis.
					</p>
				</div>
			</div>
			<div class="bf_page" id="about">
				<div class="bf_content_text">
					<h2>About us</h2>
					<p>
					gravida lectus et accumsan. Fusce eleifend dolor vitae augue dictum id elementum erat ornare. Curabitur dolor magna, molestie nec varius sit amet, aliquam a neque. Aenean erat lacus, tristique ut hendrerit ut, faucibus quis tortor. Donec molestie leo at lectus tincidunt non varius libero posuere. Quisque id lorem arcu. Mauris auctor velit sed neque ullamcorper pharetra. Pellentesque dapibus suscipit auctor. Proin eget dui quis nunc viverra molestie. Morbi tristique mollis aliquet. Integer ut elit a nibh pulvinar lobortis.
					</p>
				</div>
			</div>
			<div class="bf_page" id="menu">
				<div class="bf_content_text">
					<h2>Notre carte</h2>
					<p>Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
					<ul id="bf_dishes">
						<li><a href="#"><img src="images/thumbs/1.jpg" alt="thumb1"/></a></li>
						<li><a href="#"><img src="images/thumbs/2.jpg" alt="thumb2"/></a></li>
						<li><a href="#"><img src="images/thumbs/3.jpg" alt="thumb3"/></a></li>
						<li><a href="#"><img src="images/thumbs/4.jpg" alt="thumb4"/></a></li>
						<li><a href="#"><img src="images/thumbs/5.jpg" alt="thumb5"/></a></li>
						<li><a href="#"><img src="images/thumbs/6.jpg" alt="thumb6"/></a></li>
					</ul>
				</div>
				<div id="bf_gallery" class="bf_gallery">
					<a id="bf_close" href="#" class="bf_close"></a>
					<div class="bf_nav">
						<a id="bf_prev" href="#" class="bf_prev"></a>
						<a id="bf_next" href="#" class="bf_next"></a>
					</div>
					<div class="bf_gallery_wrapper">
						<div class="bf_gallery_item">
							<div class="bf_heading"><h2>Pizza Rustica</h2></div>
							<div class="bf_desc">
								<p>Fresh ingredients and authentic flavours</p>
							</div>
							<img src="images/foreground/1.jpg" alt="image1" data-bgimg="images/background/1.jpg" />
						</div>
						<div class="bf_gallery_item">
							<div class="bf_heading"><h2>Pizza Quattro Stagioni</h2></div>
							<div class="bf_desc">
								<p>Originality meets tradition</p>
							</div>
							<img src="images/foreground/2.jpg" alt="image1" data-bgimg="images/background/2.jpg" />
						</div>
						<div class="bf_gallery_item">
							<div class="bf_heading"><h2>Rucolini</h2></div>
							<div class="bf_desc">
								<p>Dive into the balance of taste</p>
							</div>
							<img src="images/foreground/3.jpg" alt="image1" data-bgimg="images/background/3.jpg" />
						</div>
						<div class="bf_gallery_item">
							<div class="bf_heading"><h2>Salsicce Boscaiola</h2></div>
							<div class="bf_desc">
								<p>The right intensity</p>
							</div>
							<img src="images/foreground/4.jpg" alt="image1" data-bgimg="images/background/4.jpg" />
						</div>
						<div class="bf_gallery_item">
							<div class="bf_heading"><h2>Tortelloni Alla Zucca</h2></div>
							<div class="bf_desc">
								<p>Incredibly tasty perfection</p>
							</div>
							<img src="images/foreground/5.jpg" alt="image1" data-bgimg="images/background/5.jpg" />
						</div>
						<div class="bf_gallery_item">
							<div class="bf_heading"><h2>Calamaretti Fritti</h2></div>
							<div class="bf_desc">
								<p>Combine chunky and soft</p>
							</div>
							<img src="images/foreground/6.jpg" alt="image1" data-bgimg="images/background/6.jpg" />
						</div>
					</div>
				</div>
			</div>
			<div class="bf_page" id="visit">
				
			</div>
		</div>
		<!-- The JavaScript -->
		<!-- the mousewheel plugin - optional to provide mousewheel support -->
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery.template.min.js"></script>
    </body>
</html>