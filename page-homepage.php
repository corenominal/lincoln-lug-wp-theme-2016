<?php
get_header();
?>
<div class="container">

<div class="row">
	<div class="col-md-4">
		<?php
		// LOGO
		?>
	</div>

	<div class="col-md-7 col-md-offset-1">
		<?php
		// About Lincoln LUG
		iewp_content_snippet( 13 );
		?>
	</div>
</div>

<div class="row">
	<div class="col-md-6">
		<?php
		// TODO Next Meeting
		?>
	</div>

	<div class="col-md-5 col-md-offset-1">
		<?php
		// Location & map
		iewp_content_snippet( 15 );
		?>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<?php
		// IRC info
		iewp_content_snippet( 14 );
		?>
	</div>

	<div class="col-md-7 col-md-offset-1">
		<?php
		// FAQs
		iewp_content_snippet( 16 );
		?>
	</div>
</div>

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
<?php
get_footer();
?>