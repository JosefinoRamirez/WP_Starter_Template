<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<div id="fullpage">
	<div class="section">
		<?php get_template_part( 'home-page' ); // Navigation bar (home-page.php) ?>
	</div>
	<div class="section cases-container">
		<?php get_template_part( 'cases' ); // Navigation bar (cases.php) ?>
	</div>
	<div class="section">
		<?php get_template_part( 'studio' ); // Navigation bar (studio.php) ?>
	</div>
	<div class="section team">
		<?php get_template_part( 'team' ); // Navigation bar (team.php) ?>
	</div>
	<div class="section">
		<?php get_template_part( 'work' ); // Navigation bar (work.php) ?>
	</div>
	<div class="section">
		<?php get_template_part( 'manifest' ); // Navigation bar (manifest.php) ?>
	</div>
	<div class="section">
		<?php get_template_part( 'contact' ); // Navigation bar (contact.php) ?>
	</div>
</div>

<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
