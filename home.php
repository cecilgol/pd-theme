
<h2 class="oswald"> Whats New at Planet Debate</h2>

<?php
	/*
	 * NEW QUERY OBJECT FOR /NEWS PAGE
	 */
	$mq = new WP_Query( 'post_type=post&posts_per_page=10' );

	while ( $mq->have_posts() ) :	$mq->the_post();
?>

	<article id="<?php echo get_the_id() ?>" class="row blog-post">
		<div class="col-xs-10 col-xs-offset-1">
<!-- 			<blockquote>
				<h3><?php echo get_the_title() ?></h3>
				<footer>Posted by <?php echo get_the_author() ?> on <?php echo get_the_date() ?></footer>
			</blockquote> -->
			<h3 class="oswald"><?php echo get_the_title() ?> <br> <small>Posted by <?php echo get_the_author() ?> on <?php echo get_the_date() ?></small></h3>

			<?php echo get_the_content() ?>
		</div>
	</article>


<?php endwhile ?>

