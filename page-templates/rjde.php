<?php
/**
 * Template Name: rjde
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BOM_Starter_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="two-col js-animate-fade-low js-animate-delay-1">
			<div class="col col-one">
				<h2 class="">Unlock the true potential of your business</h2>
				<div class="btn"></div>
			</div>
			<div class="col col-two">
				<img src="/wp-content/uploads/2021/03/Kent-countryside-village.jpg" alt="moving house boxes" class="lettings-2">
			</div>
		</div>

		<div class="four-col">
            <div><h2>Strategie</h2></div>
			<div><h2>Master Data Management</h2></div>
			<div><h2>Consultancy</h2></div>
			<div><h2>Training</h2></div>
		</div>

		<div class="title-center">
			<h3>Wij specialiseren ons in het versterken van organisaties, door het op maat ontwikkelen en 
				toepassen van meetbare groeistrategie, ondersteund door datamanagement. 
				Door onze betrokken en intensieve aanpak kunnen we impact maken en succes garanderen.</h3>
		</div>

		<div class="info-tabs">
	
			<div data-tabs>
				<button>TENANTS</button>
				<button>LANDLORDS</button>
			</div>

			<div data-panes>
				<div>
					<ul class="tenants-ul custom-bullet">
					</ul>
					<p><strong>We are pleased to advise that VAT does NOT apply to any of the above fees.</strong></p>
					<p style="text-align: center;"><a class="button tenant-tab-button" href="/rent">View our current lettings</a></p>
				</div>
			</div>

		</div>

	

	</main><!-- #main -->

	<script>
		window.addEventListener('DOMContentLoaded', function () {
  			tabbis();
		});
	</script>
<?php

get_footer();