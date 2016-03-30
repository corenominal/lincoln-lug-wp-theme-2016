<?php
get_header();
the_post();
$meta = iewp_lug_meeting_get_post_meta( $post->ID );
?>
<div class="container-dark container-top">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>
					<a class="logo" href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/lincoln-lug-logo.svg" alt="Lincoln LUG">
					<span class="sr-only">Lincoln Linux User Group</span></a>
				</h1>
			</div>

			<div class="col-md-7 col-md-offset-1 event">
				<h2><?php the_title() ?></h2>
				<h3>Date: <?php echo date( 'l jS F g:i A', $meta['startdate_timestamp'] ) ?></h3>
				<?php the_content() ?>
				<?php
				// Structured data
				echo iewp_lug_meeting_structured_data( $post->ID );
				?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();