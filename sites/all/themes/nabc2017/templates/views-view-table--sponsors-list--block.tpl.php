<?php

//echo "<pre>"; print_r($view->result); echo "</pre>"; die();

?>

                

                <!-- Owl Carousel -->

                <div class="owl-carousel sponsor text-left center-xs" data-items="1" data-nav="true" data-margin="0" data-sm-items="2" data-md-items="5" data-sm-stage-padding="0" data-sm-margin="30" data-autoplay="true">

                    <?php foreach($view->result as $result){?>    

                    <div class="owl-item">

                        <div class="">

                            <div class="">

                               <?php if(isset($result->field_field_sponsor_logo[0])){ ?>

                                <img src="<?php print image_style_url('sponsor_logo_front',$result->field_field_sponsor_logo[0]['rendered']['#item']['uri']); ?>" alt="<?php print $result->node_title;?>"/>

                               <?php } ?>
								<div class="cel-intro sponsor">
									<?php if(isset($result->node_title)) {?> <div class="cel-name"><?php print $result->node_title;?></div><?php } ?>
                                    <?php if(isset($result->field_field_sponsor_category['0'])){ ?><div class="cel-deg"><?php print $result->field_field_sponsor_category['0']['rendered']['#markup'];?></div><?php } ?>                                
                                </div>
                            </div>

                            

                        </div>

                    </div>

                    <?php } ?>

                </div>

                <!-- END Owl Carousel -->