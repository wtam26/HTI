<div class="home-img">
	<div class="overlay"></div>
</div>

<?php 
get_header();
?>


<div class="container feature">
<?php
if (have_posts()):
	while(have_posts()) : the_post(); ?>

		<?php the_content(); ?>
	<?php endwhile;

else:
	echo '<p>no posts to show</p>';

endif;
?>
</div>
<?php
get_footer();
?>