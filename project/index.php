<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800;900&family=Nunito:wght@400;500;600;700;800;900&display=swap">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/invisibly-header.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/features.css">
	<link rel="stylesheet" href="css/about.css">
	<link rel="stylesheet" href="css/portfolio.css">
	<link rel="stylesheet" href="css/our-video.css">
	<link rel="stylesheet" href="css/our-team.css">
	<link rel="stylesheet" href="css/pricing.css">
	<link rel="stylesheet" href="css/our-clients.css">
	<link rel="stylesheet" href="css/testimonial.css">
	<link rel="stylesheet" href="css/faq.css">
	<link rel="stylesheet" href="css/contact-us.css">
	<link rel="stylesheet" href="css/footer.css">
</head>
<body>

	<div class="container-box">
		<header class="page-header section"><?php require_once ('index/header/header.php') ?></header>
		<section class="invisibly-header">
			<?php require_once ('index/header/invisibly-heder.php') ?>
		</section>
		 <section class="d-flex align-items-center page-hero section" id="home">
			<?php require_once ('index/section/home.php') ?>
		</section>
		<section class="mega-section section-bg-shade section" id="features">
			<?php require_once ('index/section/features.php') ?>
		</section>
		<section class="about mega-section section" id="about">
			<?php require_once ('index/section/about.php') ?>
		</section>
		<section class="portfolio section" id="portfolio">
			<?php require_once ('index/section/portfolio.php') ?>
		</section>
		<section class="our-video">
			<?php require_once ('index/section/our_video.php') ?>
		</section>	
		<section class="our-team">
			<?php require_once ('index/section/our_team.php') ?>
		</section>
		<section class="pricing-1 section" id="pricing">
			<?php require_once ('index/section/pricing.php') ?>
		</section>
		<section class="our-clients">
			<?php require_once ('index/section/our_clients.php') ?>
		</section>
		<section class="testimonials section" id="testimonials">
			<?php require_once ('index/section/testimonials.php') ?>
		</section>
		<section class="faq mega-section section-bg-shade section" id="faq">
			<?php require_once ('index/section/faq.php') ?>
		</section>
		<section class="contact-us mega-section-bg-shade section" id="contact-us">
			<?php require_once ('index/section/contact_us.php') ?>
		</section>
		<footer class="page-footer" id="page-footer">
			<?php require_once ('index/footer/footer.php') ?>
		</footer> 
	</div>
	
<script src="https://releases.jquery.com/git/jquery-git.min.js"></script>
<script src="js/header.js"></script>
<script src="js/header_baget.js"></script>
<script src="js/section.js"></script>
<script src="js/portfolio.js"></script>	
<script src="js/our_video.js"></script>
<script src="js/pricing.js"></script>
<script src="js/slider.js"></script>	
<script src="js/accordion.js"></script>
<script src="js/contact-us.js"></script>
</body>
</html>
