<?php /*Error Page Message Region Starts*/?>
  <?php if (form_get_errors()): ?>
  <div id="customerror" class="customerrormsg">
  <?php //print getFormErrors(); ?>
  </div>	
  <?php endif; ?>
  <?php
  //echo "<pre>"; print_r(node_load(14)); echo "</pre>"; die();
  ?>
<div class="reg_form_container col-sm-12 center-xs">
<form class="register_frm form-horizontal" enctype="multipart/form-data" action="<?php print $form['#action'];?>" method="<?php print $form['#method'];?>" id="<?php print $form['#id'];?>" accept-charset="UTF-8">
		<div class="step" id="step1">
		<?php print render($form['field_membership_type']);?>
		<?php print render($form['field_first_name']);?>
        <?php print render($form['field_middle_name']);?>
        <?php print render($form['field_last_name']);?>
        <?php print render($form['field_country_of_origin']);?>
		<?php print render($form['field_address']);?>
        <?php print render($form['field_address_1']);?>
		<?php print render($form['field_country']);?>
        <?php print render($form['field_city']);?>
        <?php print render($form['field_state']);?>
        <?php print render($form['field_state_others']);?>
        <?php print render($form['field_zip_code']);?>
        <?php print render($form['field_evening_phone']);?>
        <?php print render($form['field_mobile_phone']);?>
		<?php print render($form['field_email']);?>
        <?php print render($form['field_alumni_univ']);?>
        <?php print render($form['field_alumni_year']);?>
		<input type="button" class="btn btn-default" onclick="javascript:reg_goto('step2');" name="gotobtn1" id="gotobtn1" value="Proceed" />
        </div>
        <div class="step" id="step2" style="display:none;">
        <?php print render($form['field_business_forums']);?>  
        <?php print render($form['field_cruise']);?>   
        <?php print render($form['field_meal_plan']);?>
        <?php print render($form['field_sunday_night_show']);?>
        <?php print render($form['field_additional_members']);?>    
        <div class="form-group">
        	<div class="total_price_container" id="total_price_container"><span>Amount to Pay</span> <span class="total_price" id="total_price">$0.00</span></div>
        </div>
        <div class="form-group">        
      		<div class="col-sm-offset-2 col-sm-10">
        <?php /*?><input type="button" class="btn btn-default" onclick="javascript:reg_goto('step1');" name="backbtn1" id="backbtn1" value="Previous" /><?php */?> <?php print render($form['actions']);?>
        	</div>
        </div>
        </div>
		<?php print render($form['form_id']);?>
		<?php print render($form['form_token']);?>
		<?php print render($form['form_build_id']);?>
	</form>   
</div>      
<script type="application/javascript">
function reg_goto(step){
	jQuery(".step").each(function(){
		jQuery(this).hide();
	});
	jQuery("#"+step).show();
	
}

function update_total_price(){
    $membership_price = get_membership_price();
    $total_price = $membership_price;
    
    jQuery('#total_price').text('$'+$total_price);
}

function get_membership_price(){
   var membership_id = jQuery('#field_membership_type').val();
   
   //alert(membership_id);
   if(membership_id == ''){
        return '0.00';
   }
   else{
   membership_array = membership_id.split('|');
   return membership_array[1];
   }
}
</script>   