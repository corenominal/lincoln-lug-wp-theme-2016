<?php
get_header();
the_post();
$meta = iewp_lug_meeting_get_post_meta( $post->ID );
?>
<div class="container-dark container-top">
	<div class="container">
		<div class="row">
			<div class="col-md-3 container-logo">
				<a class="logo" href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/lincoln-lug-logo.svg" alt="Lincoln LUG">
				<span class="sr-only">Lincoln Linux User Group</span></a>
				<div class="return-home hidden-xs hidden-sm"><i class="fa fa-chevron-left"></i> <a href="<?php echo site_url() ?>"> LUG homepage</a></div>
			</div>

			<div class="col-md-8 col-md-offset-1 event">
				<h1><i class="fa fa-calendar"></i> <?php the_title() ?></h1>
				<h3>Date: <?php echo date( 'l jS F g:i A', $meta['startdate_timestamp'] ) ?></h3>
				<?php the_content() ?>
				
				<h2 class="location"><i class="fa fa-map-marker"></i> Location</h2>
				<p>
				<?php
				if( $meta['venue_website'] != '' )
				{
					echo '<a href="' . $meta['venue_website'] . '" target="_blank">' . $meta['venue_name'] . '</a><br>';
				}
				else
				{
					echo $meta['venue_name'] . '<br>';
				}
				echo $meta['venue_address_street'] . ', ' . $meta['venue_address_city'] . '<br>';
				echo $meta['venue_address_postcode'];
				?>
				</p>


				<iframe class="osm" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.5268287658691407%2C53.214976500692416%2C-0.5062937736511232%2C53.22497198114268&amp;layer=mapnik&amp;marker=53.2199745324946%2C-0.5165612697601318" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=53.2200&amp;mlon=-0.5166#map=16/53.2200/-0.5166">View Larger Map</a></small>

				<?php
				// Structured data
				echo iewp_lug_meeting_structured_data( $post->ID );
				?>

				<div class="discuss">
					<?php
					// About Lincoln LUG
					iewp_content_snippet( 'LUG Meeting - Discuss' );
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();