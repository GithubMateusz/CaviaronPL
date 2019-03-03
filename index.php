<?php get_header(); ?>
	
<div class = "container">

	<div class = "row">
		<div class = "col-sm-12 col-md-6 logoBig">
			<div class = "colorImage">
				<figure>
					<img src = "<?php bloginfo('template_url'); ?>/img/logo-bg-1.jpg" alt="Caviaron logo Express Your Beauty" >
				</figure>
			</div>
		</div>
	</div>
	
	<div class = "row">
		<div class = "col-sm-12 col-md-6 column">
			<div class = "colorPost">
				<?php getOnePost(55); ?>
			</div>
		</div>
		
		<div class = "col-sm-12 col-md-6 column">
			<div class = "colorImage d-flex justify-content-center">
				<div class = "align-self-center ">
					<figure>
						<img src = "<?php bloginfo('template_url'); ?>/img/008_caviaron_gruppe_ret_cmyk_300dpi.jpg" alt = "CLEANSING SERUM, INSTANT LIFT SERUM, SMOOTHING SERUM">
					</figure>
				</div>
			</div>
		</div>
	</div>
		
	<div class = "row">		
		<div class = "col-sm-12 rowImage">
			<img src = "<?php bloginfo('template_url'); ?>/img/CAVIARON_shutterstock_419859538_web.jpg" alt = "zdjecie poglądowe" >
		</div>
	</div>
	
	<div class = "row">	
		<?php getPlus(6); ?>
	</div>
			
	<div class = "row">
		<div class = "col-sm-12 col-md-6 column">
			<div class = "colorImage d-flex justify-content-center">
				<div class = "align-self-center ">
					<figure>
						<a id = "produkty"></a>
						<img src = "<?php bloginfo('template_url'); ?>/img/004_caviaron_cleansing_lotion_ret_cmyk_300dpi_.jpg"  alt = "CLEANSING SERUM" >
					</figure>
				</div>
			</div>
		</div>
		<div class = "col-sm-12 col-md-6 column">
			<div class = "colorPost">
				<?php
					getAllPost("slideChange1",2);
				?>
			</div>
			<a class = "carousel-control-prev" role = "button" onclick = "plusDivs('slideChange1', -1)" data-slide = "prev">
				<span class = "prev"><b><</b></span>
			</a>
			<a class = "carousel-control-next" role = "button" onclick = "plusDivs('slideChange1', 1)" data-slide = "prev">
				<span class = "next"><b>></b></span>
			</a>
		</div>
	</div>
		
	<div class = "row">
		<div class = "col-sm-12 col-md-6 column order-2 order-md-1">
			<div class = "colorPost">
				<?php
					getAllPost("slideChange2",3);
				?>
			</div> 
			<a class = "carousel-control-prev" role = "button" onclick = "plusDivs('slideChange2', -1)" data-slide = "prev">
				<span class = "prev" ><b><</b></span>
			</a>
			<a class = "carousel-control-next" role = "button" onclick = "plusDivs('slideChange2', 1)" data-slide = "prev">
				<span class = "next"><b>></b></span>
			</a>
		</div>
		<div class = "col-sm-12 col-md-6 column order-1 order-md-2">
			<div class = "colorImage d-flex justify-content-center">
				<div class = "align-self-center ">
					<figure>
						<img src = "<?php bloginfo('template_url'); ?>/img/005_caviaron_lift_serum_ret_cmyk_300dpi_.jpg" alt = "INSTANT LIFT SERUM" >
					</figure>
				</div>
			</div>
		</div>
	</div>
	
	<div class = "row">
		<div class = "col-sm-12 col-md-6 column">
			<div class = "colorImage d-flex justify-content-center">
				<div class = "align-self-center ">
					<figure>
						<img src = "<?php bloginfo('template_url'); ?>/img/001_caviaron_smoothing_serum_ret_cmyk_300dpi_.jpg"  alt = "SMOOTHING SERUM" >
					</figure>
				</div>
			</div>
		</div>	
		<div class = "col-sm-12 col-md-6 column">
			<div class = "colorPost">
				<?php
					getAllPost("slideChange3",4);
				?>
			</div>
			<a class = "carousel-control-prev" role = "button" onclick = "plusDivs('slideChange3', -1)" data-slide = "prev">
				<span class = "prev" ><b><</b></span>
			</a>
			<a class = "carousel-control-next" role = "button" onclick = "plusDivs('slideChange3', 1)" data-slide = "prev">
				<span class = "next"><b>></b></span>
			</a>
		</div>
	</div>
	
	<div class = "row">
		<div class = "col-sm-12 col-md-6 column order-2 order-md-1">
			<div class = "colorPost">
				<?php
					getOnePost(87);
				?>
				<div id = "buttonShow">
					<button class = "btn btn-secondary" onclick = "showForm()">Zamów</button>
				</div>	
			</div>
		</div>
		
		<div class = "col-sm-12 col-md-6 column order-1 order-md-2">
			<div class = "colorImage d-flex justify-content-center">
				<div class = "align-self-center ">
					<figure>
						<img src = "<?php bloginfo('template_url'); ?>/img/Caviaronbox_offen_u_geschlossen_freigestellt.jpg" alt = "SMOOTHING SERUM" >
					</figure>
				</div>	
			</div>	
		</div>	
	</div>	
	
	<div class = "row" >
		<div class = "rowForm"> 
			<?php 
				require_once('form.html'); 
			?>
		</div>
	</div>
	
</div>	

<div class = "container-fluid">
	<div class = "row">
		<div class = "col-sm-12 col-md-4 col-md-offset-5 divTextVideo">
			<div class = "textVideo">
			<a id = "dzialanie"></a>
				<?php
					getOnePost(105);
				?>
			</div>
		</div>
		<div class = "col-sm-12 col-md-8 divVideo">
			<video poster = "<?php bloginfo('template_url'); ?>/img/Caviaron-eyes.jpg" controls>
				<source src = "<?php bloginfo('template_url'); ?>/video/CAVIARON-Instant-Lift-Serum-Express-Your-Beauty.mp4" type = "video/mp4">
				Twoja przeglądarka nie wspiera html5.
			</video>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<script async src = "<?php bloginfo('template_url'); ?>/js/function.js"></script>