<?php
/*
Template Name: Home page
*/
?>

<?php get_header(); ?>

		
	<div id="content">
		<div id="inner-content">
		    <main id="main" class="slider-home" role="main">
		    	<div class="logo-home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/souslogo-ombreoliver.png" alt="A l'ombre d'un olivier"></div>
			</main> <!-- end #main -->

			<div class="row edito">
				<div class="small-12 columns">
					<h2 >Qui sommes-nous ?</h2>
						<div class="content-edito">
							<?php while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile;?>
						</div>

				</div>
			</div>

			<div class="row gites">
				<div class="small-12 columns">
					<h1>Nos gites sud de france</h1>
				 	<!-- Chargement des Gites -->
                	<?php include $_SERVER['DOCUMENT_ROOT']."/wp-content/themes/Alombredunolivier/gites.php"; ?>
				</div>
			</div>


		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->


<?php get_footer(); ?>
