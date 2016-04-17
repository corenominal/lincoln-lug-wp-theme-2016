<footer class="container-dark">
	<div class="container">
		<div class="row">
			<?php if( is_single() ): ?>
				<div class="col-md-8 col-md-offset-4">
			<?php else: ?>
				<div class="col-md-12">
			<?php endif; ?>
				<?php
				// Copyleft
				iewp_content_snippet( 19 );
				?>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer() ?>
</body>
</html>