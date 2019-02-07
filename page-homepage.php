<?php
get_header();
?>
<div class="container-dark container-top">
	<div class="container">
		<div class="row">
			<div class="col-md-4 container-logo">
				<a class="logo" href="<?php echo site_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/img/lincoln-lug-logo.svg" alt="Lincoln LUG"></a>
				<span class="sr-only">Lincoln Linux User Group</span>
			</div>

			<div class="col-md-7 col-md-offset-1">
				<?php
				// About Lincoln LUG
				iewp_content_snippet( 13 );
				?>
			</div>
		</div>
	</div>
</div>

<div class="container-light">
	<div class="container">
		<?php
		// Show latest meeting
		$args = array (
			'post_type'              => 'lug_meeting',
			'post_status'            => 'publish',
			'posts_per_page'		 => 1, 
		);
		$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				?>
				<div class="row">

					<div class="col-md-6">
						<h2><i class="fa fa-calendar"></i> Next Meeting</h2>
						<?php
						// Post meta
						$meta = iewp_lug_meeting_get_post_meta( $post->ID );
						echo '<h2><a href="' . get_the_permalink() . '">' . date( 'l jS F g:i A', $meta['startdate_timestamp'] ) . '</a></h2>';
						the_content();
						echo '<p><strong>Venue:</strong><br>';
						if( $meta['venue_website'] != '' )
						{
							echo '<a href="' . $meta['venue_website'] . '" target="_blank">' . $meta['venue_name'] . '</a><br>';
						}
						else
						{
							echo $meta['venue_name'] . '<br>';
						}
						echo $meta['venue_address_street'] . ', ' . $meta['venue_address_city'] . '<br>';
						echo $meta['venue_address_postcode'] . '</p>';

						// Structured data
						echo iewp_lug_meeting_structured_data( $post->ID );
						?>
					</div>

					<div class="col-md-5 col-md-offset-1">
						<h2><i class="fa fa-map"></i> Location</h2>
						
						<iframe class="osm" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-0.5268287658691407%2C53.214976500692416%2C-0.5062937736511232%2C53.22497198114268&amp;layer=mapnik&amp;marker=53.2199745324946%2C-0.5165612697601318" style="border: 1px solid black"></iframe><br/><small><a href="https://www.openstreetmap.org/?mlat=53.2200&amp;mlon=-0.5166#map=16/53.2200/-0.5166">View Larger Map</a></small>

					</div>

				</div>
				<?php
			}
		}
		// Reset the loop
		wp_reset_postdata();
		?>
	</div>
</div>

<div class="container-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php
				// IRC info
				iewp_content_snippet( 14 );
				?>
			</div>

			<div class="col-md-6">
				<?php
				// Mailing List
				iewp_content_snippet( 74 );
				?>
			</div>
		</div>
	</div>
</div>

<div class="container-light">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<?php
				// FAQs
				iewp_content_snippet( 16 );
				?>
			</div>

			<div class="col-md-4 col-md-offset-1">
				<?php
				// Social info
				iewp_content_snippet( 76 );
				iewp_content_snippet( 18 );
				?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>