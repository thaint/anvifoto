<?php
/**
 * Print the box with meta fields for different post types, with proper label & input
 * @param  [array] $arrs  an array of arrays: [label, input_type, class, field_name]
 * @param  $post_id [varname] [description]
 * @return [type]      [nothing]
 */
function meta_box_printer($arrs,$post_id){
	foreach ($arrs as $arr){
		$default = array(
			"label" 		=> "Custom field",
			"input_type" 	=> "text",
			"class" 		=> "",
			"field_name" 	=> "et_invalid_custom_field"
			);
		$arr = array_merge($default, $arr);
?>
		<label><?php echo $arr['label'];?></label><br/>
<?php
		switch ($arr['input_type']) {
			case 'textarea':
			?>
				<textarea class="et-meta-textarea <?php echo $arr['class']; ?>" name="<?php echo $arr['field_name']; ?>"><?php echo get_post_meta($post_id, $arr['field_name'], true); ?></textarea><br/>
			<?php
				break;
			case 'text':
			default:
			?>
				<input class="et-meta-text <?php echo $arr['class']; ?>"  type="text" name="<?php echo $arr['field_name']; ?>" value="<?php echo get_post_meta($post_id, $arr['field_name'], true); ?>" /><br/>
			<?php
		}
	}
	return;
}