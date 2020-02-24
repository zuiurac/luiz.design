<?php
$masonry_image_size = get_post_meta(get_the_ID(), 'qode_product_featured_image_size', true);
if(empty($masonry_image_size)) {
	$masonry_image_size = '';
}

?>
<div class="qode-pli <?php echo esc_html($masonry_image_size); ?> qode-<?php echo esc_html($image_size); ?>-size">
	<div class="qode-pli-inner">
		<div class="qode-pli-image">
			<?php bridge_qode_get_module_template_part('templates/parts/image', 'woocommerce', '', $params); ?>
		</div>
		<div class="qode-pli-text">
			<div class="qode-pli-text-outer">
				<div class="qode-pli-text-inner">
					<?php bridge_qode_get_module_template_part('templates/parts/title', 'woocommerce', '', $params); ?>
					
					<?php bridge_qode_get_module_template_part('templates/parts/category', 'woocommerce', '', $params); ?>
					
					<?php bridge_qode_get_module_template_part('templates/parts/excerpt', 'woocommerce', '', $params); ?>
					
					<?php bridge_qode_get_module_template_part('templates/parts/rating', 'woocommerce', '', $params); ?>
					
					<?php bridge_qode_get_module_template_part('templates/parts/price', 'woocommerce', '', $params); ?>

				</div>
			</div>
		</div>
		<a class="qode-pli-link" itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>
	</div>
</div>