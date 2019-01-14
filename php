 <!--FIRST SECTION HERO IMAGE-->
    
    <?php
        $top_section_image = get_field("top_section_image");
        $top_section_title = get_field("top_section_title");
        $top_section_subtitle = get_field("top_section_subtitle");

        if ($top_section_image || $top_section_title || $top_section_subtitle ):
    ?>
    	<a href="https://example.com" target="_blank"><section class="top-section-calendar" style="background-image: url(<?php echo $top_section_image; ?>);">
    		<div class="container">
    			<div class="text-area">
    			<?php if ($top_section_title): ?>
					<h1><?php echo $top_section_title;?></h1>
				<?php endif;?>
				<?php echo $top_section_subtitle; ?>
    			</div>
    		</div>
    	</section></a>
    <?php endif; ?>
