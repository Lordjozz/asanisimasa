<?php
?>
<?php Starkers_Utilities::get_template_parts( array( 'html-header', 'header' ) ); ?>

<section id='home-top'>
	<div class="container">
		<div class="row">
			<div class="col-xs-12" id='home-top-carousel'>
				<a href="<?php bloginfo('url'); ?>/shows"><img src="<?php bloginfo('template_url'); ?>/images/main-image.jpg" /></a>
			</div>
		</div>
	</div>
</section>
<section id="sub-top">
	<div class="container">	
		<div class="row">
			<div class="col-xs-12 col-sm-8 sub-top-text">
				<h2>Our Latest Show: The Thin Line</h2>
				<p>				
				Imagine a time that your entire life is turned upside down and defined by a single moment, word or accusation. A time when those that are closest to you are forced to decide whether they are with you or against you and everything that you have worked for is lost...</p>
				<p>
				Laws are black and white, but our decisions and choices in life are not. When we live in a world where you are guilty until proven innocent, it is important to be aware of the area that remains grey. Behind every headline there are humans bearing the weight of accusation.
				</p>				
				<p><a type="button" class="btn btn-success btn-lg" href="<?php bloginfo('url'); ?>/shows">Find Out More</a></p>
			</div>
            <div class="col-xs-12 col-sm-4" style="text-align: center;">
                <img src='<?php bloginfo('template_url'); ?>/images/logo.png' />
			</div>
		</div>
	</div>
</section>
<?php Starkers_Utilities::get_template_parts( array( 'footer','html-footer' ) ); ?>