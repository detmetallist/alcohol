<?php get_header(); ?>
	<section class="main_section page_section">
		<div class="container">
			<?php require_once "top.php"; ?>
			<h1><?php the_title(); ?></h1>
		</div>
	</section>
	<section class="page_content">
		<div class="container">
			<?php the_content(); ?>
		</div>
	</section>
<?php get_footer(); ?>