<?php

# Subscription Object Page
get_template_part('templates/category-boxes'); ?>

    <div class="wrap container" role="document">
      <div class="content">
        <main class="main">
				<?php
					$args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 10, 'orderby' =>'date','order' => 'DESC', 
						'tax_query'=>array(
							array(
								'taxonomy'=>'product_type',
								'field' => 'slug',
								'terms' => 'pd_subscription'
							)
						) 
					);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ){ $loop->the_post(); global $product; woocommerce_get_template_part( 'content', 'product'); }

