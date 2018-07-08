
<?php 
//https://graph.facebook.com/regalo.gr/feed?access_token=EAAVVt9KK5qsBAPVA8LyytrQUoCsnBFqZA8kDHkAZC7MYnMfg0pbiKbO0bZCGIldnjZAGB4VKkKOSVnvbwOWphedozpXT9fp1n8SOtQ4lHsVTAFjyZAcFwrO4F505BqrCFZBpZBDwwbgaRgnjBdZBZAdl0FYZAZAmjTq6ic7auMZCp4SpjQZDZD&fields=id,message,picture,link,name,description,type,icon,created_time,from,object_id&limit=10
## FACEBOOK -> STATUS UPDATE FEED COMPONENTS
$fb_page_id = "304186900110454";
$profile_photo_src = "https://graph.facebook.com/{$fb_page_id}/picture?type=square";
$access_token = "EAAFAhc112MYBAG0LkTYEl9rHDiZAhecRLwZAMysaLTjhO8FnZCIoABBtHxd7UWkw3FdMPVQ1aZAdAGZC99bUlGyS8k0BXcPbKWG1TJzqSoAg3nPxe9sSPZB4RMTyuEZAaXNLM8BMtD8DOO1RCUpBZCDtiub3ie8rC3vlbBhFn38BoAZDZD";

$fields = "id,message,picture,link,name,description,type,icon,created_time,from,object_id";
$limit = 3;


#$json_link = "https://graph.facebook.com/{$fb_page_id}/feed?access_token={$access_token}&fields={$fields}&limit=3";
#$json = file_get_contents($json_link);
#$obj = json_decode($json);

curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/{$fb_page_id}/feed?access_token={$access_token}&fields={$fields}&limit=3");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$item = curl_exec($ch);
$obj = json_decode($item);
?>

<?php
$z=1;			 
foreach($obj->data as $feed){
	// picture from the link
	if (isset($feed->picture)) {
	$picture = $feed->picture;
	$picture_url_arr = explode('&url=', $picture);
	$picture_url = urldecode($picture_url_arr[0]);
	}
	
    curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/{$post_id}/likes?summary=true&access_token={$access_token}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $like = curl_exec($ch);
    $likes = json_decode($like);
	
    curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/{$post_id}/comments?summary=true&access_token={$access_token}");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $comment = curl_exec($ch);
    $comments = json_decode($comment);
	
	// link posted
	if (isset($feed->link)) {
	$link = $feed->link;
	}
	// name or title of the link posted
	#$name = $feed->name;
	$description = "";
	#$description = $feed->description;
	#$type = $feed->type;
 
	// when it was posted
	$created_time = $feed->created_time;
	$converted_date_time = date( 'Y-m-d H:i:s', strtotime($created_time));
	$ago_value = time_elapsed_string($converted_date_time);
 
	// from
	$page_name = $feed->from->name;
	$page_id = $feed->from->id;
	if (isset($feed->object_id)) {
		$object_id = $feed->object_id;
	} else {
		$object_id = $feed->from->id;
	}
	
	// useful for photo
	
	
	// user's custom message
	$message="No message content, <a href='https://www.facebook.com/{$post_id}' target='_blank'>click here</a> to view the post";
	if (isset($feed->message)) {
		if(strlen($feed->message) > 300){
		   $message =  substr($feed->message, 0, 300).'...';
		}
		else {
			$message = $feed->message;
		}
	}
	?>
	<div class="col-sm-4 col-md-4 col-xs-12" style="padding-top: 20px; padding-bottom: 10px; background-color: white;">
		<div class="post-thumb" style="">
			<a href="https://www.facebook.com/<?php echo $page_id;?>" target="_blank"><img class="img-responsive" src="<?php 
											echo "https://graph.facebook.com/" .$object_id. "/picture"; 
											if ($object_id === $feed->from->id) {echo "?type=large";}
											?>" alt="" style="height: 300px; margin: 0 auto;"></a> 
			<div class="post-meta">
			<?php if (isset($picture)) {?>
				<span style="color: white;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><i class="fa fa-comments-o"></i> <?php echo $comments->summary->total_count; ?> Comments</span><br>
				<span style="color: white;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><i class="fa fa-heart"></i> <?php echo $likes->summary->total_count; ?> Likes</span> 
			<?php }?>
			</div>
		</div>
		<div class="entry-header text-center" style="height: 30px;color: black">
			<span class="date">Posted <?php echo $ago_value;?></span>
			<span class="category">as a <strong style="color:#8E205D;"><?php echo $feed->type; ?></strong></span>
		</div>
		
		<div class="entry-content text-center" style="color: black; max-height: 230px;">
			<p><?php if (isset($feed->message)) { echo $message; } else { echo "No Message Content";}?></p>
		</div>
		<div class="text-center" style="height: 50px;">
            <button type="submit" class="btn-submit">Read More <i class="fa fa-facebook" style="color: blue;text-size:20px;" aria-hidden="true"></i></button>
		</div>
	</div>   
	<!-- /Status -->	
<?php $message = "";?>
<?php }?>