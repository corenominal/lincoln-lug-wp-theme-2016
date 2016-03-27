<?php
get_header();
?>
<div class="container-dark container-top">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>
					<img src="<?php echo get_template_directory_uri() ?>/img/lincoln-lug-logo.svg" alt="Lincoln LUG">
					<span class="sr-only">Lincoln Linux User Group</span>
				</h1>
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
			'post_type'              => array( 'lug_meeting' ),
			'post_status'            => array( 'published' ),
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
						echo '<h2><a href="' . get_the_permalink() . '">' . date( 'l jS F G:i', $meta['startdate_timestamp'] ) . '</a></h2>';
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
						<a class="attachment" href="https://maps.google.com/maps?q=<?php echo $meta['venue_address_postcode'] ?>" target="_blank">
						<img src="https://maps.google.com/maps/api/staticmap?center=<?php echo $meta['venue_address_postcode'] ?>&zoom=12&size=600x300&maptype=roadmap&markers=color:ORANGE|label:A|<?php echo $meta['venue_address_postcode'] ?>&scale=2&sensor=false " alt="Lincoln LUG meeting location">
						</a>
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
			<div class="col-md-4">
				<?php
				// Social info
				iewp_content_snippet( 76 );
				?>
			</div>

			<div class="col-md-7 col-md-offset-1">
				<?php
				// FAQs
				iewp_content_snippet( 16 );
				?>
			</div>
		</div>
	</div>
</div>

<div class="container-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php
				// Social code
				iewp_content_snippet( 18 );
				?>
			</div>

			<div class="col-md-6">
				<?php
				// Copyleft
				iewp_content_snippet( 19 );
				?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>