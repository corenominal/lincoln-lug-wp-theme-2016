<?php
get_header();
?>
<div class="container-dark container-top">
	<div class="container">
		<div class="row">
			<div class="col-md-3 container-logo">
				<a class="logo" href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/lincoln-lug-logo.svg" alt="Lincoln LUG">
				<span class="sr-only">Lincoln Linux User Group</span></a>
			</div>

			<div class="col-md-8 col-md-offset-1">
				<h1><i class="fa fa-exclamation-triangle"></i> 404 Page Not Found</h1>
				<p>Oops! The page you were looking for could not be found.<br><a href="<?php echo site_url(); ?>">Click here to visit our homepage</a>.</p>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();