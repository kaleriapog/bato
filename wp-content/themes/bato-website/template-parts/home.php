<?php
// Template Name: Home page
// Template Post Type: post, page

$subtitles = get_field('subtitles', $post->ID); 
$link = get_field('link', $post->ID);
$maintatle = get_field('big_title', $post->ID);
$video = get_field('video', $post->ID);

$about_title = get_field('about_title', $post->ID);
$about_description = get_field('about_description', $post->ID);
$about_link = get_field('about_link', $post->ID);

$about_background = get_field('about_background', $post->ID);

$cards_title = get_field('cards_title', $post->ID);
$cards_services = get_field('cards_services', $post->ID);

$slider_items = get_field('slider_items', $post->ID);

$offers_title = get_field('offers_title', $post->ID);
$offers_cards = get_field('offers_cards', $post->ID);

$numbers_title = get_field('numbers_title', $post->ID);
$numbers_description = get_field('numbers_description', $post->ID);
$numbers_cards = get_field('numbers_cards', $post->ID);

$team_title = get_field('team_title', $post->ID);
$team_items = get_field('team_items', $post->ID);

$contact_title = get_field('contact_title', $post->ID);
$contact_phrase = get_field('contact_phrase', $post->ID);
$contact_image = get_field('contact_image', $post->ID);

get_header();
?>
<script>
	const subTitles = '<?php echo json_encode($subtitles); ?>';
</script>
<main id="primary" class="site-main">
	<section class="section-banner">
		<div class="section-banner__inner main-size">
			<div class="section-banner__description">
				<div class="headline">
					<div class="headline__inner">
						<div class="headline-items">
						<?php 
							foreach ($maintatle as $maintatle_item) {
								$item = $maintatle_item;
						?>	
							<div class="headline-item"><img class="headline__letter"  alt="<?php echo $item[name] ?>" src="<?php echo $item[url] ?>"></div>
						<?php } ?>
						</div>
					</div>
					<p class="subtitle"><?php echo $subtitles[0]["subtitle"] ?></p>
				</div>	
				<div class="section-banner__button">
					<div class="button-default">
						<a class="button-default__link" target="_blank" href="<?php echo $link[url] ?>"><?php echo $link[title] ?></a>
					</div>
				</div>
			</div>
		</div>
		<div class="section-banner__bg">
			<video autoplay muted loop id="video-bg">
				<source src="<?php echo $video[url] ?>" type="video/mp4">
			</video>
			<div class="banner-circle-light">
				<span id="circle-item-small" class="banner-circle-item circle-item-small"></span>
				<span id="circle-item-big" class="banner-circle-item circle-item-big"></span>
				<span id="banner-light" class="banner-light"></span>
			</div>
		</div>
		<div class="halo">
			<img src="<?php echo get_template_directory_uri(); ?>/images/halo.svg" alt="halo">
		</div>
	</section>
	<section class="section-about" id="section-about">
		<div class="section-about__inner main-size">
			<div class="section-about__description">
				<h2 class="title_basic title_about"><?php echo $about_title ?></h2>
				<div class="section-about__text">
					<?php echo $about_description ?>
				</div>
				<div class="button-default">
					<a class="button-default__link" target="_blank" href="<?php echo $about_link[url] ?>"><?php echo $about_link[title] ?></a>
				</div>
			</div>
			<div class="circles-about">
				<div id="circle-about-big" class="circle-about-big"></div>
				<div id="circle-about-light" class="circle-about-light"></div>
			</div>
		</div>
	</section>
	<section class="section-cards" id="section-cards">
		<div class="section-cards__inner main-size">
			<h2 class="title_basic"><?php echo $cards_title ?></h2>
			<div class="cards-services">
				<?php 
					foreach ($cards_services["сards_services"] as $key=>$card_services) {
						$title_services = $card_services["card_title"];
						$text_services = $card_services["card_text"];
				?>
				<div class="card-services card-services-<?php echo $key ?>">
					<div class="card-services__inner">
						<div class="card-description">
							<h3 class="card-title"><?php echo $title_services ?></h3>
							<div class="card-text"><?php echo $text_services ?></div>
						</div>
						<div class="card-icon">
						</div>
					</div>	
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="section-slider">
		<div class="section-slider__inner">
			<div class="splide slider">
				<div class="splide__track slider-inner">
					<ul class="splide__list slider-items">
					<?php 
						foreach ($slider_items as $slider_item) {
							$item = $slider_item["slide"];
					?>	
						<li class="splide__slide slider-item">
							<div class="slider-item-name">
								<?php echo $item ?>
								<p class="slider-item-name-hover">
									<?php echo $item ?>
								</p>
							</div>
						</li>
					<?php } ?>	
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="section-offers" id="section-offers">
		<div class="section-offers__inner main-size">
			<h2 class="title_basic"><?php echo $offers_title ?></h2>
			<div class="section-offers__cards">
			<?php 
				foreach ($offers_cards as $offers_card) {
					$title = $offers_card["offers_card_title"];
					$text = $offers_card["offers_card_text"];
			?>	
				<div class="section-offers__card">
					<h3 class="card-title"><?php echo $title ?></h3>
					<?php echo $text ?>
				</div>
			<?php } ?>	
			</div>		
		</div>
	</section>
	<section class="section-team" id="section-team">
		<div class="section-team__inner main-size">
			<h2 class="title_basic"><?php echo $team_title ?></h2>
			<div class="section-team__items">
			<?php 
				foreach ($team_items as $team_item) {
					$name = $team_item["team_name"];
					$position = $team_item["team_position"];
					$image = $team_item["team_image"];
			?>	
				<div class="section-team__items-wrapp">
					<div class="container">
						<div class="viewport">
							<div class="cube">
								<div class="cube-item front-cube">
									<div class="front-cube-inner">
										<span class="section-team__card-team-name"><?php echo $name ?></span>
										<span class="section-team__card-team-position"><?php echo $position ?></span>
									</div>
								</div>
								<div class="cube-item back-cube"></div>
								<div class="cube-item top-cube">
									<div class="photo-cube-inner">
										<div class="photo-cube-img-wrapp">
											<img src="<?php echo $image[url] ?>" alt="<?php echo $image[name] ?>">
										</div>
									</div>
								</div>
								<div class="cube-item bottom-cube">
									<div class="photo-cube-inner">
										<div class="photo-cube-img-wrapp">
											<img src="<?php echo $image[url] ?>" alt="<?php echo $image[name] ?>">
										</div>
									</div>
								</div>
								<div class="cube-item left-cube">
									<div class="photo-cube-inner">
										<div class="photo-cube-img-wrapp">
											<img src="<?php echo $image[url] ?>" alt="<?php echo $image[name] ?>">
										</div>
									</div>
								</div>
								<div class="cube-item right-cube">
									<div class="photo-cube-inner">
										<div class="photo-cube-img-wrapp">
											<img src="<?php echo $image[url] ?>" alt="<?php echo $image[name] ?>">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			<?php } ?>	
			</div>
		</div>
	</section>
	<section class="section-numbers" id="section-numbers">
		<div class="section-numbers__inner main-size">
			<h2 class="title_basic"><?php echo $numbers_title ?></h2>
			<p class="section-numbers__description"><?php echo $numbers_description ?></p>
			<div class="section-numbers__cards">
			<?php 
				foreach ($numbers_cards as $numbers_card) {
					$number = $numbers_card["numbers_card_number"];
					$title = $numbers_card["numbers_card_title"];
			?>	
				<div class="section-numbers__card">
					<p class="section-numbers__number"><?php echo $number ?></p>
					<div class="section-numbers__text-wrapp">
						<p class="section-numbers__text"><?php echo $title ?></p>
					</div>
				</div>
			<?php } ?>	
			</div>
		</div>
	</section>
	<section class="section-contact" id="section-contact">
		<div class="section-contact__inner main-size">
			<div class="section-contact__description">
				<h2 class="title_basic"><?php echo $contact_title ?></h2>
				<div class="section-contact__phrase">
					<?php echo $contact_phrase ?>
				</div>
			</div>
			<div class="section-contact__image">
				<div class="section-contact__image-wrapp">
					<img src="<?php echo $contact_image[url] ?>"  alt="<?php echo $contact_image[name] ?>">
				</div>
				<div class="section-contact__light-wrapp">
					<div class="section-contact__light" id="contact-light">
						<img alt="light" src="<?php echo get_template_directory_uri(); ?>/images/get-bg.svg"> 
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="preloader">
		<div class="preloader__wrapp">
			<img alt="preloader" src="<?php echo get_template_directory_uri(); ?>/images/preloader.svg">
		</div>
	</div>
	<!-- <div class="cursor-follow">
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
			<span class="cursor-follow-item animation-cursor"></span>
	</div> -->
</main>	

<?php
get_footer();
?>
