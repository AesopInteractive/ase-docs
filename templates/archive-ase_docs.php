<?php

get_header();

	echo '<div class="ase-content ase-docs">';

		ase_docs_get_template_part('docs-sidebar');

		echo '<div class="ase-docs-right">';
			?>
			<p class="lead">Welcome to the Aesop Story Engine Help Center. Below you'll find a guide on getting Aesop Story Engine installed, and to the left you'll find documentation for Aesop Story Engine, as well as all of our products.</p>
			<div class="ase-quick-start">

				<div class="ase-section ase-step-one">
					<div class="clearfix">
						<div class="ase-step-inner">
							<h2>Install Aesop Story Engine</h2>
							<p>Head to the plugins tab within your WordPress administration area. Click on "add new". Once here, search for Aesop Story Engine, and press "search." Install Aesop Story Engine, and you're set! Hint: you can also install through FTP if you know that that is.</p>
						</div>
						<?php echo do_shortcode('[aesop_image img="/wp-content/themes/ase/assets/img/install-aesop.png" align="center" captionposition="left" lightbox="off" imgwidth="100%"]');?>
					</div>
				</div>

				<div class="ase-section ase-step-two">
					<div class="clearfix">
						<div class="ase-step-inner">
							<h2>Build your Story</h2>
							<p>Go to any post, and locate the "Add Component" button. It sits right above the post editor. Once you toggle this, you'll be able to select the component, adjust any options, and insert it anywhere within your story. Galleries are managed with the "Galleries" tab within WordPress.</p>
						</div>
						<?php echo do_shortcode('[aesop_image img="/wp-content/themes/ase/assets/img/add-component.png" align="center" captionposition="left" lightbox="off" imgwidth="100%"]');?>
					</div>
				</div>
			</div>
			<?php
		echo '</div>';

	echo '</div>';

get_footer();