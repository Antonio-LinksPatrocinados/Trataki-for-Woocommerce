<?php

$error = "false";
/**
 * Create notification object
 */
$notifications_obj = new WooSEA_Get_Admin_Notifications;
$notifications_box = $notifications_obj->get_admin_notifications ( '5', $error );

/**
 * Create product attribute object
 */
$attributes_obj = new WooSEA_Attributes;
$attributes = $attributes_obj->get_product_attributes();

/**
 * Get some channel configs for default utm_source
 * Update project configuration 
 */

if (array_key_exists('project_hash', $_GET)){
        $project = WooSEA_Update_Project::get_project_data(sanitize_text_field($_GET['project_hash']));
	$channel_data = WooSEA_Update_Project::get_channel_data(sanitize_text_field($_GET['channel_hash']));
        $manage_project = "yes";
} else {
	$project = WooSEA_Update_Project::update_project($_POST);
	$channel_data = WooSEA_Update_Project::get_channel_data(sanitize_text_field($_POST['channel_hash']));
	$project['utm_source'] = $project['name'];
	$project['utm_medium'] = "cpc";
	$project['utm_campaign'] = $project['projectname'];
	$project['utm_term'] = "";
	$project['utm_content'] = "";
	$project['utm_on'] = "on";
	$project['adtribes_conversion'] = "on";
	$project['total_product_orders_lookback'] = "";
}
?>
	<div class="wrap">
		<div class="woo-product-feed-pro-form-style-2">
			<tbody class="woo-product-feed-pro-body"><style type="text/css">.woo-product-feed-pro-slider{cursor:not-allowed}</style>
				<div class="woo-product-feed-pro-form-style-2-heading"><?php _e( 'Conversion & Google Analytics settings','woo-product-feed-pro' );?></div>

                        	<div class="<?php _e($notifications_box['message_type']); ?>">
                                	<p><?php _e($notifications_box['message'], 'sample-text-domain' ); ?></p>
                        	</div>
	
				<form id="googleanalytics" method="post">
		
				<table class="woo-product-feed-pro-table">
				<!--
				<tr>
					<td><span>Enable conversion tracking: </span></td>
					<td>
						<label class="woo-product-feed-pro-switch">
							<?php
							if(isset($project['adtribes_conversion'])){
  								print "<input type=\"checkbox\" name=\"adtribes_conversion\" class=\"checkbox-field\" checked>";
							} else {
  								print "<input type=\"checkbox\" name=\"adtribes_conversion\" class=\"checkbox-field\">";
  							}
							?>
							<div class="woo-product-feed-pro-slider round"></div>
						</label>	
					</td>
				</tr>			
				-->
				<tr>
					<td><span><?php _e( 'Enable Google Analytics tracking','woo-product-feed-pro' );?>: </span></td>
					<td>
						<label class="woo-product-feed-pro-switch">
							<?php
							if(isset($project['utm_on'])){
  								print "<input type=\"checkbox\" name=\"utm_on\" class=\"checkbox-field\" disabled>";
							} else {
  								print "<input type=\"checkbox\" name=\"utm_on\" class=\"checkbox-field\" disabled>";
  							}
							?>
							<div class="woo-product-feed-pro-slider round"></div>
						</label>	
					</td>
				</tr>			
				<?php /* <tr>
					<td><span><?php _e( 'Google Analytics campaign source (utm_source)','woo-product-feed-pro' );?>:</span></td>
				 	<td><input type="text" class="input-field" name="utm_source" value="<?php print "$project[utm_source]";?>" /></td>
				</tr>
				<tr>
					<td><span><?php _e( 'Google Analytics campaign medium (utm_medium)','woo-product-feed-pro' );?>:</span></td>
				 	<td><input type="text" class="input-field" name="utm_medium" value="<?php print "$project[utm_medium]";?>" /></td>
				</tr>
				<tr>
					<td><span><?php _e( 'Google Analytics campaign name (utm_campaign)','woo-product-feed-pro' );?>:</span></td>
				 	<td><input type="text" class="input-field" name="utm_campaign" value="<?php print "$project[utm_campaign]";?>" /></td>
				</tr>
				<tr>
					<td><span><?php _e( 'Google Analytics campaign term (utm_term)','woo-product-feed-pro' );?>:</span></td>
				 	<td><input type="hidden" name="utm_term" value="id"><input type="text" class="input-field" value="[productId]" disabled/> <i>(<?php _e('dynamically added Product ID','woo-product-feed-pro' );?>)</i></td>
				</tr>
				<tr>
					<td><span><?php _e( 'Google Analytics campaign content (utm_content)','woo-product-feed-pro' );?>:</span></td>
				 	<td><input type="text" class="input-field" name="utm_content" value="<?php print "$project[utm_content]";?>" /></td>
				</tr>
				<tr>
					<td><span><?php _e( 'Remove products that did not have sales in the last days','woo-product-feed-pro' );?>: <a href="https://adtribes.io/create-feed-performing-products/" target="_blank">What does this do?</a></span></td>
				 	<td><input type="text" class="input-field" name="total_product_orders_lookback" value="<?php print "$project[total_product_orders_lookback]";?>" /> days</td>
				</tr> */ ?>
				<tr>
					<td colspan="2">
						<?php
						if(isset($manage_project)){
							?>
							<input type="hidden" name="channel_hash" value="<?php print "$project[channel_hash]";?>">
							<input type="hidden" name="project_update" id="project_update" value="yes">
							<input type="hidden" name="project_hash" value="<?php print "$project[project_hash]";?>">
							<input type="hidden" name="step" value="100">
							<input type="hidden" name="woosea_page" value="analytics">
							<input type="submit" id="savebutton" value="Save">
							<?php
						} else {
						?>
							<input type="hidden" name="channel_hash" value="<?php print "$project[channel_hash]";?>">
							<input type="hidden" name="project_hash" value="<?php print "$project[project_hash]";?>">
							<input type="hidden" name="step" value="101">
							<input type="hidden" name="woosea_page" value="analytics">
							<input type="submit" id="savebutton" value="Generate Product Feed">
						<?php
						}
						?>
					</td>
				</tr>
				</table>
<h3>Envie o URL do seu feed para <a href="mailto:info@trataki.com">info@trataki.com</a> e aguarde 24/48h pela sincronização.</h3>
				</form>
			</tbody>
		</div>
	</div>

