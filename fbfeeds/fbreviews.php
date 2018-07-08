<section id="twitter" class="white">
	<div>
	<a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left" style=""></i></a>
	<a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right" style=""></i></a>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="twitter-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" style="color: black">
						
							<?php 
							$fb_page_id = "304186900110454";
							$access_token = "EAAFAhc112MYBAG0LkTYEl9rHDiZAhecRLwZAMysaLTjhO8FnZCIoABBtHxd7UWkw3FdMPVQ1aZAdAGZC99bUlGyS8k0BXcPbKWG1TJzqSoAg3nPxe9sSPZB4RMTyuEZAaXNLM8BMtD8DOO1RCUpBZCDtiub3ie8rC3vlbBhFn38BoAZDZD";
							
							
                            curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/{$fb_page_id}/ratings?access_token={$access_token}&limit=10");
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            $fb = curl_exec($ch);
                            $fb_response = json_decode($fb);

							#print_r($fb_response);
							$z = 1;
							?>
							<!-- ACTIVE REVIEW -->
							<?php foreach($fb_response->data as $item){ ?>
<div class="item<?php if ($z==1) { echo " active"; } else { echo ""; }?>">
									<?php 
										$z = 2; 
										
										// Grab Reviewer Photo
										$object_id = $item->reviewer->id;
										$reviewer_photo_src = "https://graph.facebook.com/{$object_id}/picture?type=square";
										$reviewer_page = "https://www.facebook.com/{$object_id}";
										// when it was posted
										$created_time = $item->created_time;
										$converted_date_time = date( 'Y-m-d H:i:s', strtotime($created_time));
										$ago_value = time_elapsed_string($converted_date_time);
										
										if (isset($item->review_text)) {
											if(strlen($item->review_text) > 140){
											   $review_text =  substr($item->review_text, 0, 140).'...<br><a href="https://www.facebook.com/'.$object_id.'" target="_blank">(read more)</a>';
											}
										}
									?>
	<div class="row" style="background-color: #13212E; padding-top: 10px; opacity: 0.85; border-radius: 4px;">
									<div class="col-sm-3 col-xs-12 col-sm-offset-2">
									<a href='<?php echo $reviewer_page; ?>' target='_blank'>
										<img src='<?php echo $reviewer_photo_src; ?>' style='margin: 0 auto;'>
									</a>
									<a href='<?php echo $reviewer_page; ?>' target='_blank'>
										<p style="color: black;"><span><?php echo $item->reviewer->name; ?> posted <?php echo $ago_value;?></span></p>
									</a>
										<h1>
											<div id="stars-existing" class="starrr"  style="color: gold;" data-rating='<?php echo $item->rating; ?>'></div>
											<?php echo $item->rating; ?> Star Review
										</h1>
									</div>
									<div class="col-sm-5 col-xs-12">
									<h3 style="color: white;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Review Text:</h3>
									<p style="color: white;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><span><?php if(isset($review_text)) { echo $review_text;} else { echo "They didn't leave review text, they gave a ".$item->rating." star review, though";} ?></span></p>
									</div>
								</div>
							</div>
							<?php } ?>
		

						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section><!--/#twitter-->
<!-- /REVIEWS SECTION --> 
