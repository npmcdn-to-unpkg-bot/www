<?php
//echo "<pre>"; print_r($view->result); echo "</pre>"; die();
?>
                
                <!-- Owl Carousel -->
                <div class="owl-carousel text-left center-xs" data-items="1" data-nav="true" data-margin="0" data-sm-items="2" data-md-items="4" data-sm-stage-padding="0" data-sm-margin="30" data-autoplay="true">
                    <?php foreach($view->result as $result){?>    
                    <div class="owl-item">
                        <div class="post">
                        	<div class="img_overlay">
                                <div class="hovereffect">
                                	<?php if(isset($result->field_field_artist_celebraties_images[0])){ ?>
                                <img src="<?php print file_create_url($result->field_field_artist_celebraties_images[0]['rendered']['#item']['uri']); ?>" alt="<?php print $result->node_title;?>"/>
                                <div class="cel-intro">
									<?php if(isset($result->node_title)) {?> <div class="cel-name"><?php print $result->node_title;?></div><?php } ?>
                                    <?php if(isset($result->field_field_artist_celebraty_category['0'])){ ?><div class="cel-deg"><?php print $result->field_field_artist_celebraty_category['0']['rendered']['#markup'];?></div><?php } ?>                                
                                </div>
                               <?php } ?>
                                    <div class="overlay">
                                       <?php if(isset($result->field_body[0])){ ?><h2><?php print $result->field_body[0]['rendered']['#markup'];?></h2><?php } ?>
                                       <a class="info" href="<?php print url('program');?>">View More</a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <!-- END Owl Carousel -->