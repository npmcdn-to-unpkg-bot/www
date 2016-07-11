 <?php

/**
 * @file
 * NABC's theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<?php
 global $base_url;
 

 //echo "<pre>"; print_r($membership_plan); echo "</pre>"; die();
 if(!user_is_logged_in()){
	validate_paid_member_session();
	$node = node_load($_SESSION['valid_membership_nid']);
	//echo "<pre>"; print_r($node); echo "</pre>";
 }
 
 $membership_plan = '';
 if(isset($node->field_membership['und'])){
 $membership_plan = get_membership_data($node->field_membership['und'][0]['nid']);
 }
 //echo "<pre>"; print_r($node); echo "</pre>"; die();
?>
<div class="regi-bg1 text-center"><div class="reg_form_container col-sm-12 center-xs">
                <div class="heading-registration"><h4><span class="blacktext">Registered Member's Profile </span> #iNDULGE <span class="blacktext">@ NABC2017</span></h4></div>
                			<?php if(!user_is_logged_in()){?>
                    		<div class="col-sm-12 text-right"><a href="javascript:void(0);" onclick="javascript:goToByScroll('membership_upgrade');">Upgrade Membership &nbsp;<i class="fa fa-arrow-circle-up"></i></a> <a href="<?php print url('book-hotel'); ?>">Book Hotel &nbsp;<i class="fa fa-bed"></i></a> <a href="<?php print url('member/logout'); ?>">Logout &nbsp;<i class="fa fa-lock"></i></a></div>
                            <?php } ?>
                            <div class="step" id="step1">
                                <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                <h5 class="form-heading" id="step3-form-heading">Personal Information</h5>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_membership_type_data">Membership Type</label>
                                            <span class="field_data" id="field_membership_type_data"><?php print isset($membership_plan->title) ? $membership_plan->title : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_membership_type_data">Membership Number</label>
                                            <span class="field_data" id="field_membership_type_data"><?php print isset($node->field_membership_number['und']) ? $node->field_membership_number['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_member_title_data">Title</label>
                                            <span class="field_data" id="field_member_title_data"><?php print isset($node->field_member_title['und']) ? $node->field_member_title['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_first_name_data">First Name</label>
                                            <span class="field_data" id="field_first_name_data"><?php print isset($node->field_first_name['und']) ? $node->field_first_name['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_middle_name_data">Middle Name</label>
                                            <span class="field_data" id="field_middle_name_data"><?php print isset($node->field_middle_name['und']) ? $node->field_middle_name['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_last_name_data">Last Name</label>
                                            <span class="field_data" id="field_last_name_data"><?php print isset($node->field_last_name['und']) ? $node->field_last_name['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_address_data">Address 1</label>
                                            <span class="field_data" id="field_address_data"><?php print isset($node->field_address['und']) ? $node->field_address['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_address_1_data">Address 2</label>
                                            <span class="field_data" id="field_address_1_data"><?php print isset($node->field_address_1['und']) ? $node->field_address_1['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_city_data">City</label>
                                            <span class="field_data" id="field_city_data"><?php print isset($node->field_city['und']) ? $node->field_city['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_state_data">State</label>
                                            <span class="field_data" id="field_state_data"><?php if($node->field_country['und'][0]['iso2'] == 'US') { print isset($node->field_state['und']) ? $node->field_state['und'][0]['value'] : '';} else { print isset($node->field_state_others['und']) ? $node->field_state_others['und'][0]['value'] : ''; }?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_country_data">Country</label>
                                            <span class="field_data" id="field_country_data"><?php print isset($node->field_country['und']) ? $node->field_country['und'][0]['iso2'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-3 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_zip_code_data">Zip Code</label>
                                            <span class="field_data" id="field_zip_code_data"><?php print isset($node->field_zip_code['und']) ? $node->field_zip_code['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                 <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_mobile_phone_data">Contact Number</label>
                                            <span class="field_data" id="field_mobile_phone_data"><?php print isset($node->field_mobile_phone['und']) ? $node->field_mobile_phone['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_email_data">Email</label>
                                            <span class="field_data" id="field_email_data"><?php print isset($node->field_email_address['und']) ? $node->field_email_address['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_alumni_univ_data">Alumni</label>
                                            <span class="field_data" id="field_alumni_univ_data"><?php if(isset($node->field_alumni_univ['und'][0]['node'])) { print $node->field_alumni_univ['und'][0]['node']->title; } else{
											 if(isset($node->field_alumni_univ['und'][0]['nid'])){
											 	$alumni_univ = node_load($node->field_alumni_univ['und'][0]['nid']);
											 	 print $alumni_univ->title;
												}
											else{
													print "Not Applicable";
												}	
											 }
											 ?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_alumni_year_data">Graduation Year</label>
                                            <span class="field_data" id="field_alumni_year_data"><?php print isset($node->field_alumni_year['und']) ? date('Y',strtotime($node->field_alumni_year['und'][0]['value'])) : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_sunday_night_show_data">Sunday Night Show</label>
                                            <span class="field_data" id="field_sunday_night_show_data"><?php print isset($node->field_sunday_night_show['und']) ? $node->field_sunday_night_show['und'][0]['value'] : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <?php if(isset($node->field_first_name_additional_1['und'])) {?>
                                <div class="col-sm-12 center-xs wow fadeInLeft animated" id="additional_members">
                                    <div id="additional-members-wrapper-data" class="additional-members-wrapper"> <h5 class="form-heading" id="step2a-form-heading">Additional Member Information</h5></div>
                                       <?php for($k=1;$k<=7;$k++){
									   $field_first_name_additional = 'field_first_name_additional_'.$k;
									   $field_last_name_additional = 'field_last_name_additional_'.$k;
									   $field_relation_additional = 'field_relation_additional_'.$k;
									   $field_alumni_univ_additional = 'field_alumni_univ_additional_'.$k;
									   $field_sunday_ns_additional = 'field_sunday_ns_additional_'.$k;
									   ?>
										   <?php if(isset($node->{$field_first_name_additional}['und'])) {?>
                                           <fieldset id="field-additional-members-member-<?php print $k;?>">
                                            <div class="fieldset-wrapper">
                                                <div class="col-sm-2 center-xs wow fadeInLeft animated">
                                                    <div class="form-group">
                                                     <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                                        <div id="additional_member" class="additional_member form-wrapper">
                                                        <div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-<?php print $k;?>-field-first-name-add-on">
      <label for="field-additional-members-member-<?php print $k;?>-field-first-name-add-on">First Name <?php print $k;?> </label>
      <span class="field_data" id="field-additional-members-member-<?php print $k;?>-field-first-name-add-on_data"><?php print isset($node->{$field_first_name_additional}['und']) ? $node->{$field_first_name_additional}['und'][0]['value'] : '';?></span>
    </div>
    </div>
                                                     </div>   
                                                     </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 center-xs wow fadeInLeft animated">
                                                    <div class="form-group">
                                                     <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                                        <div id="additional_member" class="additional_member form-wrapper">
                                                        <div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-<?php print $k;?>-field-last-name-add-on">
      <label for="field-additional-members-member-<?php print $k;?>-field-last-name-add-on">Last Name <?php print $k;?> </label>
      <span class="field_data" id="field-additional-members-member-<?php print $k;?>-field-last-name-add-on_data"><?php print isset($node->{$field_last_name_additional}['und']) ? $node->{$field_last_name_additional}['und'][0]['value'] : '';?></span>
    </div>
    </div>
                                                     </div>   
                                                     </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 center-xs wow fadeInLeft animated">
                                                    <div class="form-group">
                                                     <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                                        <div id="additional_member" class="additional_member form-wrapper">
                                                        <div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-<?php print $k;?>-field-first-name-add-on">
      <label for="field-additional-members-member-<?php print $k;?>-field-relation-add-on">Relation <?php print $k;?> </label>
      <span class="field_data" id="additional-members-member-<?php print $k;?>-field-relation-add-on_data"><?php print isset($node->{$field_relation_additional}['und']) ? $node->{$field_relation_additional}['und'][0]['value'] : '';?></span>
    </div>
    </div>
                                                     </div>   
                                                     </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 center-xs wow fadeInLeft animated">
                                                    <div class="form-group">
                                                     <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                                        <div id="additional_member" class="additional_member form-wrapper">
                                                        <div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-<?php print $k;?>-field-alumni-add-on">
                                                          <label for="field-additional-members-member-<?php print $k;?>-field-alumni-add-on">Alumni <?php print $k;?> </label>
                                                          <span class="field_data" id="field-additional-members-member-<?php print $k;?>-field-alumni-add-on">
											 <?php if(isset($node->{$field_alumni_univ_additional}['und'][0]['node'])) { 
											  print $node->{$field_alumni_univ_additional}['und'][0]['node']->title; } 
											  else{
											 if(isset($node->{$field_alumni_univ_additional}['und'][0]['nid'])){
											 	$alumni_univ_add_on = node_load($node->{$field_alumni_univ_additional}['und'][0]['nid']);
											 	 print $alumni_univ_add_on->title;
												}
											else{
													print "Not Applicable";
												}	
											 }
											 
											 ?>
	  														</span>
                                                        </div>
                                                        </div>
                                                     </div>   
                                                     </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 center-xs wow fadeInLeft animated">
                                                    <div class="form-group">
                                                     <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                                        <div id="additional_member" class="additional_member form-wrapper">
                                                        <div class="form-group"><div class="form-item form-type-textfield form-item-field-additional-members-member-<?php print $k;?>-field-alumni-add-on">
      <label for="field-additional-members-member-<?php print $k;?>-field-sunday-night-show-add-on">Sunday Night Show <?php print $k;?></label>
      <span class="field_data" id="field-additional-members-member-<?php print $k;?>-field-sunday-night-show-add-on"><?php print isset($node->{$field_sunday_ns_additional}['und']) ? ucfirst($node->{$field_sunday_ns_additional}['und'][0]['value']) : '';?></span>
    </div>
    </div>
                                                     </div>   
                                                     </div>
                                                    </div>
                                                </div>
                                            </div>
                                           </fieldset>
                                           <?php } ?>
                                       <?php } ?>
                                </div>
								<?php }?>
                                <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                <h5 class="form-heading">Other Event Participation</h5>
                                </div>
                                <?php if(isset($node->field_business_forums['und'])){ ?>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_business_forums_data">Business Forum</label>
                                            <span class="field_data" id="field_business_forums_data">
                                            <?php 
											$html_business_forum = '';
											foreach($node->field_business_forums['und'] as $business_forum_node){
												if(isset($business_forum_node['node'])) { 
												  $html_business_forum .= $business_forum_node['node']->title; 
												  } 
												  else{
													 if(isset($business_forum_node['nid'])){
														$business_forums = node_load($business_forum_node['nid']);
													    $html_business_forum .= $business_forums->title.',' ;
													 }	
												 }
											}
											print ($html_business_forum != '' && count($node->field_business_forums['und']) > 1) ? substr($html_business_forum,0,strlen($html_business_forum)-1) : $html_business_forum;
											
                                            ?>
                                            </span>
                                        </div>                 
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if(isset($node->field_tourism['und'])){ ?>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_tourism_data">Tourism</label>
                                            <span class="field_data" id="field_tourism_data">
											<?php 
											$html_tourism = '';
											foreach($node->field_tourism['und'] as $tourism_node){
												if(isset($tourism_node['node'])) { 
												  $html_tourism .= $tourism_node['node']->title.','; 
												  } 
												  else{
													 if(isset($tourism_node['nid'])){
														$tourisms = node_load($tourism_node['nid']);
													    $html_tourism .= $tourisms->title.',' ;
													 }	
												 }
											}
											print ($html_tourism != '') ? substr($html_tourism,0,strlen($html_tourism)-1) : '';
											
                                            ?>
                                            </span>
                                        </div>                 
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if(isset($node->field_attend_reunion['und'])){ ?>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_attend_reunion_data">Attend Re-Union</label>
                                            <span class="field_data" id="field_attend_reunion_data"><?php print isset($node->field_attend_reunion['und']) ? $node->field_attend_reunion['und'][0]['value'] : 'Not Applicable';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if(isset($node->field_meal_plan['und'])){ ?>                               
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_meal_plan_data">Meal Plan</label>
                                            <span class="field_data" id="field_meal_plan_data"><?php if(isset($node->field_meal_plan['und'][0]['node'])) { print $node->field_meal_plan['und'][0]['node']->title; } else{
											 if(isset($node->field_meal_plan['und'][0]['nid'])){
											 	$meal_plan = node_load($node->field_meal_plan['und'][0]['nid']);
											 	 print $meal_plan->title;
												}
											else{
													print "Not Applicable";
												}	
											 }
											 ?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <?php } ?>
                                <?php if(isset($node->field_hotel['und'])){ ?>                               
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_hotel_data">Hotel</label>
                                            <span class="field_data" id="field_hotel_data"><?php if(isset($node->field_hotel['und'][0]['node'])) { print $node->field_hotel['und'][0]['node']->title; } else{
											 if(isset($node->field_hotel['und'][0]['nid'])){
											 	$hotel = node_load($node->field_hotel['und'][0]['nid']);
											 	 print $hotel->title;
												}
											else{
													print "Not Applicable";
												}	
											 }
											 ?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                <h5 class="form-heading">Payment Details</h5>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_payment_status_data">Payment Status</label>
                                            <span class="field_data" id="field_payment_status_data"><?php print isset($node->field_payment_status['und']) ? $node->field_payment_status['und'][0]['value'] : 'Pending';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_paypal_payment_status_data">Paypal Payment Status</label>
                                            <span class="field_data" id="field_paypal_payment_status_data"><?php print isset($node->field_paypal_payment_status['und']) ? $node->field_paypal_payment_status['und'][0]['value'] : 'Pending';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_payment_transaction_number_data">Paypal Transaction ID</label>
                                            <span class="field_data" id="field_payment_transaction_number_data"><?php print isset($node->field_payment_transaction_number['und']) ? $node->field_payment_transaction_number['und'][0]['value'] : 'Not Applicable';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_paypal_email_address_data">Paypal Email Address</label>
                                            <span class="field_data" id="field_paypal_email_address_data"><?php print isset($node->field_paypal_email_address['und']) ? $node->field_paypal_email_address['und'][0]['value'] : 'Pending';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_payment_date_data">Payment Date</label>
                                            <span class="field_data" id="field_payment_date_data"><?php print isset($node->field_payment_date['und']) ? $node->field_payment_date['und'][0]['value'] : 'Pending';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_payment_date_data">Registration Date</label>
                                            <span class="field_data" id="field_payment_date_data"><?php print isset($node->created) ? date('D, F d, Y H:i:s',$node->created) : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-6 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item">
                                            <label for="field_paypal_payer_id_data">Paypal Payer ID</label>
                                            <span class="field_data" id="field_paypal_payer_id_data"><?php print isset($node->field_paypal_payer_id['und']) ? $node->field_paypal_payer_id['und'][0]['value'] : 'Pending';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div class="col-sm-12 center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item total_price">
                                            <label for="field_total_price_data">Total Amount Paid</label>
                                            <span class="field_data" id="field_total_price_data">$<?php print isset($node->field_amount_paid['und']) ? number_format($node->field_amount_paid['und'][0]['value'],2) : '';?></span>
                                        </div>                 
                                    </div>
                                </div>
                                <div id="membership_upgrade" class="col-sm-12 <?php /*col-sm-6 col-md-offset-3*/?> center-xs wow fadeInLeft animated">
                                    <div class="form-group">                 
                                        <div class="form-item total_price">
                                            <label for="field_total_price_data" style="color:#FF0000; font-size:14px;">
                 <b style="color:#000000;">Important Note:</b> For membership upgradation, please check back after July, 7th 2016 . We are upgrading the flow for better performance. Sorry for the inconvenience.
             </label>
                                            <a href="javascript: alert('Coming Soon!');" class="btn btn-primary disabled">Upgrade Membership</a>
                                        </div>                 
                                    </div>
                                </div>
                            </div> 
                        <div class="clear" style="clear:both"></div>
                    </div></div>
<script type="application/javascript">
function goToByScroll(id){
      // Remove "link" from the ID
    id = id.replace("link", "");
      // Scroll
    jQuery('html,body').animate({
        scrollTop: jQuery("#"+id).offset().top},
        'slow');
}
</script>                    