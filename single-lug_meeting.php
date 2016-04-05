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
				<a class="attachment" href="https://maps.google.com/maps?q=<?php echo $meta['venue_address_postcode'] ?>" target="_blank">
				<img src="https://maps.google.com/maps/api/staticmap?center=<?php echo $meta['venue_address_postcode'] ?>&zoom=12&size=600x300&maptype=roadmap&markers=color:ORANGE|label:A|<?php echo $meta['venue_address_postcode'] ?>&scale=2&sensor=false " alt="Lincoln LUG meeting location">
				</a>
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