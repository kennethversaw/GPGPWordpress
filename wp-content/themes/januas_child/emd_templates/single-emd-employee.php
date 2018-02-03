<?php $real_post = $post;
$ent_attrs = get_option('employee_spotlight_attr_list');
?>
<br />
<br />
<br />
<br />

<?php $is_editable = 0; ?>
<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3 class="carousel-title"><?php echo get_the_title(); ?> - <?php echo esc_html(emd_mb_meta('emd_employee_jobtitle')); ?></h3>
			<p><?php echo $post->post_content; ?></p>

		</div>
		<div class="col-md-2">
		<br/>
		<br/>
		<br/>
			<div style="border-color:<?php echo esc_html(emd_global_val('employee-spotlight', 'glb_imgborder_color')); ?>"
				 class="media-object img-responsive img-circle"><?php if (get_post_meta($post->ID, 'emd_employee_photo')) {
				$sval = get_post_meta($post->ID, 'emd_employee_photo');
				$thumb = wp_get_attachment_image_src($sval[0], 'full');
				echo '<img class="" src="' . $thumb[0] . '" width="200" height="200" alt="' . get_post_meta($sval[0], '_wp_attachment_image_alt', true) . '"/>';
				} ?>
			</div>
		</div>
	</div>
</div>

