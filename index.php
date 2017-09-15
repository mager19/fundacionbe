<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fundacionbe
 */

get_header(); ?>

<!-- Slide section -->
	<section class="slide">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<!-- Slide adoptame -->
					<div class="slide__adoptame">
						<?php 
							get_template_part( 'template-parts/adoptame', 'none' );
						?>
					</div>
				</div>
				<div class="col-md-6">
					<!-- Formulario Ayuda -->
					<div class="slide__formulario">
						<?php get_template_part('template-parts/formulario','ayuda'); ?>
					</div>
				</div>
			</div>
		</div>		
	</section>	
<!-- Categorias Section -->
	<section class="categorias">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="categorias__item">
						<h3>Clasificados</h3>
						<figure>
							<img src="https://imgholder.ru/50x50/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
						</figure>						
						<a href="#" class="mbutton mbutton--white">Button</a>
					</div>
				</div>

				<div class="col-md-3">
					<div class="categorias__item">
						<h3>Perros en adopcion</h3>
						<figure>
							<img src="https://imgholder.ru/50x50/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
						</figure>
						<a href="#" class="mbutton mbutton--white">Button</a>
					</div>
				</div>

				<div class="col-md-3">
					<div class="categorias__item">
						<h3>Gatos en adopcion</h3>
						<figure>
							<img src="https://imgholder.ru/50x50/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
						</figure>
						<a href="#" class="mbutton mbutton--white">Button</a>
					</div>
				</div>

				<div class="col-md-3">
					<div class="categorias__item">
						<h3>Donaciones / Tienda</h3>
						<figure>
							<img src="https://imgholder.ru/50x50/2196F3/ECEFF1.jpg&text=imgHolder&font=bebas&fz=36" alt="">
						</figure>
						<a href="#" class="mbutton mbutton--white">Button</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Acerca Section  -->
	<section class="contenedor acerca">
		<div class="container">
			<div class="row">
				<h2>Acerca de Benjamigos</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequatur nihil culpa vel incidunt quas, provident veniam iure facilis. Nobis tenetur est non earum ut, deleniti, porro atque similique numquam.</p>
			</div>
		</div>
	</section>
			

<?php
// get_sidebar();
get_footer();
