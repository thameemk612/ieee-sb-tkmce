

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
          <h2 class="text-center mb-5 mt-5 head-font"><?=$story['story_title']?></h2>

            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                          <?php  if ($story['story_image_link']!=NULL){?>

                            <div class="feature-img">
                                <img class="img-fluid" src="<?php echo base_url();?>assets/upload/<?=$story['story_image_link']?>" alt="">
                            </div>
                          <?php } ?>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                
                                <ul class="blog_meta list">

                                    <li><i class="lnr lnr-calendar-full mr-2"></i><b style="opacity:.7;"><?=$story['story_date']?></b></li>
                                    <li><i class="lnr lnr-location"><b style="color:black;font-size:.8em;"></i><?=$story['venue']?></b></li>
                                    <li><i class="lnr lnr-tag"><b style="color:black;font-size:.7em;"></i><?=$story['category']?></b></li>

                                </ul>

                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details quotes">

                            <p class="excert text-justify head-font">
                              <?=$story['full_content']?>
                            </p>

                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-6">
                                  <?php  if ($story['story_image_link_2']!=NULL){?>
                                    <img class="img-fluid" src="<?php echo base_url();?>assets/upload/<?=$story['story_image_link_2']?>" alt="">
                                  <?php } ?>
                                </div>
                                <?php  if ($story['story_image_link_3']!=NULL){?>

                                <div class="col-6">
                                    <img class="img-fluid" src="<?php echo base_url();?>assets/upload/<?=$story['story_image_link_3']?>" alt="">
                                </div>
                              <?php } ?>
                            </div>
                            <div class="row mt-3">

                              <?php  if ($story['story_image_link_4']!=NULL){?>

                              <div class="col-6">
                                  <img class="img-fluid" src="<?php echo base_url();?>assets/upload/<?=$story['story_image_link_4']?>" alt="">
                              </div>
                            <?php } ?>
                            <?php  if ($story['story_image_link_5']!=NULL){?>

                            <div class="col-6">
                                <img class="img-fluid" src="<?php echo base_url();?>assets/upload/<?=$story['story_image_link_5']?>" alt="">
                            </div>
                          <?php } ?>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Latest Posts</h3>
                            <?php
                            $i=0;
                            foreach($pop_tags as $row){
                              if($i==4) break;
                              $i++;
                            ?>

                            <div class="media post_item">
                                <img height="60px" width="100px"  src="<?php echo base_url();?>assets/upload/<?=$row['story_image_link']?>" alt="post">
                                <div class="media-body">
                                    <a href="<?php echo base_url("stories/".$row['link'])?>"><h3 class="head-font"><?=$row['story_title'] ?></h3></a>
                                    <p><?=$row['story_date']?></p>
                                </div>
                            </div>
                          <?php } ?>

                            <div class="br"></div>
                        </aside>


                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                          Subscribe to our newsletter to get the most exclusive and latest updates on our  upcoming events

                            </p>


                            <form action="<?=base_url("Pages/news_letter")?>" method="post">

                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="email" class="form-control"  name="email" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <button type="submit" class="bbtns">Subcribe</button>
                            </div>
                          </form>
                            <!-- <p class="text-bottom">You can unsubscribe at any time</p> -->
                            <div class="br"></div>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
