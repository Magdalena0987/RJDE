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

		
		<div class="cd-tabs cd-tabs--vertical container max-width-md margin-top-xl margin-bottom-lg js-cd-tabs">
    <nav class="cd-tabs__navigation">
      <ul class="cd-tabs__list">
        <li>
          <a href="#tab-inbox" class="cd-tabs__item cd-tabs__item--selected">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M15,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V1C16,0.4,15.6,0,15,0z M14,2v7h-3 c-0.6,0-1,0.4-1,1v2H6v-2c0-0.6-0.4-1-1-1H2V2H14z"></path></svg>
            <span>Inbox</span>
          </a>
        </li>

        <li>
          <a href="#tab-new" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M12.7,0.3c-0.4-0.4-1-0.4-1.4,0l-7,7C4.1,7.5,4,7.7,4,8v3c0,0.6,0.4,1,1,1h3 c0.3,0,0.5-0.1,0.7-0.3l7-7c0.4-0.4,0.4-1,0-1.4L12.7,0.3z M7.6,10H6V8.4l6-6L13.6,4L7.6,10z"></path><path d="M15,10c-0.6,0-1,0.4-1,1v3H2V2h3c0.6,0,1-0.4,1-1S5.6,0,5,0H1C0.4,0,0,0.4,0,1v14c0,0.6,0.4,1,1,1h14 c0.6,0,1-0.4,1-1v-4C16,10.4,15.6,10,15,10z"></path></svg>
            <span>New</span>
          </a>
        </li>

        <li>
          <a href="#tab-gallery" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M15,4h-2.5l-1.7-2.6C10.6,1.2,10.3,1,10,1H6C5.7,1,5.4,1.2,5.2,1.4L3.5,4H1C0.4,4,0,4.4,0,5v9 c0,0.6,0.4,1,1,1h14c0.6,0,1-0.4,1-1V5C16,4.4,15.6,4,15,4z M8,12c-1.7,0-3-1.3-3-3s1.3-3,3-3s3,1.3,3,3S9.7,12,8,12z"></path></svg>
            <span>Gallery</span>
          </a>
        </li>

        <li>
          <a href="#tab-store" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><path d="M13.9,0.5C13.7,0.2,13.4,0,13,0H3C2.6,0,2.3,0.2,2.1,0.5C0,4.5,0,4.7,0,5c0,1.1,0.9,2,2,2v8c0,0.6,0.4,1,1,1 h10c0.6,0,1-0.4,1-1V7c1.1,0,2-0.9,2-2C16,4.7,16,4.5,13.9,0.5z M10,14v-4H6v4H4V6.7C4.3,6.9,4.6,7,5,7c0.6,0,1.1-0.3,1.5-0.7 C6.9,6.7,7.4,7,8,7s1.1-0.3,1.5-0.7C9.9,6.7,10.4,7,11,7c0.4,0,0.7-0.1,1-0.3V14H10z"></path></svg>
            <span>Store</span>
          </a>
        </li>

        <li>
          <a href="#tab-settings" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><circle cx="6" cy="8" r="2"></circle><path d="M10,2H6C2.7,2,0,4.7,0,8s2.7,6,6,6h4c3.3,0,6-2.7,6-6S13.3,2,10,2z M10,12H6c-2.2,0-4-1.8-4-4s1.8-4,4-4h4 c2.2,0,4,1.8,4,4S12.2,12,10,12z"></path></svg>
            <span>Settings</span>
          </a>
        </li>

        <li>
          <a href="#tab-trash" class="cd-tabs__item">
            <svg aria-hidden="true" class="icon icon--xs"><rect x="5" y="7" width="2" height="6"></rect><rect x="9" y="7" width="2" height="6"></rect><path d="M12,1c0-0.6-0.4-1-1-1H5C4.4,0,4,0.4,4,1v2H0v2h1v10c0,0.6,0.4,1,1,1h12c0.6,0,1-0.4,1-1V5h1V3h-4V1z M6,2h4 v1H6V2z M13,5v9H3V5H13z"></path></svg>
            <span>Trash</span>
          </a>
        </li>
      </ul>
    </nav>

    <ul class="cd-tabs__panels">
      <li id="tab-inbox" class="cd-tabs__panel cd-tabs__panel--selected text-component">
        <p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>

        <p>Inbox Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>
      </li>

      <li id="tab-new" class="cd-tabs__panel text-component">
        <p>New Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non a voluptatibus, ex odit totam cumque nihil eos asperiores ea, labore rerum. Doloribus tenetur quae impedit adipisci, laborum dolorum eaque ratione quaerat, eos dicta consequuntur atque ex facere voluptate cupiditate incidunt.</p>

        <p>New Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non a voluptatibus, ex odit totam cumque nihil eos asperiores ea, labore rerum. Doloribus tenetur quae impedit adipisci, laborum dolorum eaque ratione quaerat, eos dicta consequuntur atque ex facere voluptate cupiditate incidunt.</p>
      </li>
    </ul>
  </div> 

    <div class="partners-wrapper">
		<div class="partners">
			<img src="/wp-content/uploads/2021/03/Kent-countryside-village.jpg" alt="moving house boxes">
			<img src="/wp-content/uploads/2021/03/Kent-countryside-village.jpg" alt="moving house boxes">
			<img src="/wp-content/uploads/2021/03/Kent-countryside-village.jpg" alt="moving house boxes">
		</div>

		<div class="partners">
			<img src="/wp-content/uploads/2021/03/Kent-countryside-village.jpg" alt="moving house boxes">
			<img src="/wp-content/uploads/2021/03/Kent-countryside-village.jpg" alt="moving house boxes">
			<img src="/wp-content/uploads/2021/03/Kent-countryside-village.jpg" alt="moving house boxes">
		</div>

		<div class="partners">
			<img src="/wp-content/uploads/2021/03/Kent-countryside-village.jpg" alt="moving house boxes">
			<img src="/wp-content/uploads/2021/03/Kent-countryside-village.jpg" alt="moving house boxes">
			<img src="/wp-content/uploads/2021/03/Kent-countryside-village.jpg" alt="moving house boxes">
		</div>
    </div>
	<footer>
		<div class="col col-one">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">Packages</a></li>
				<li><a href="">Contact Us</a></li>
			</ul>
		</div>
		<div class="col col-two">
			<ul>
				<li><a href="">Terms & Conditions</a></li>
				<li><a href="">Privacy policy</a></li>
				<li><a href="">Cookie Policy</a></li>
			</ul>
		</div>
	</footer>

	</main>
<?php
get_footer();