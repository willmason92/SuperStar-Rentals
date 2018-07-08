<?php 
#https://graph.facebook.com/304186900110454/ratings?access_token=EAAFAhc112MYBAKGKLAtzzsnNLfwLME96QBd586mIgvOCALOqIzrqZBT14wqtqZB4sI2NG7kmWH9FY7BnZBIE7ZAJ8iKyp04vLt9sESNTbjMesj4gji0iRZAtfHRJIkiMEaNHozBwojrxk2zTxZAx7CMkBEkg1ePPz21dFkfTgNxgZDZD?limit=10
#
#$fb_page_id = "304186900110454";
#$profile_photo_src = "https://graph.facebook.com/{$fb_page_id}/picture?type=square";
#$access_token = "EAAFAhc112MYBAG0LkTYEl9rHDiZAhecRLwZAMysaLTjhO8FnZCIoABBtHxd7UWkw3FdMPVQ1aZAdAGZC99bUlGyS8k0BXcPbKWG1TJzqSoAg3nPxe9sSPZB4RMTyuEZAaXNLM8BMtD8DOO1RCUpBZCDtiub3ie8rC3vlbBhFn38BoAZDZD";

$ch = curl_init();

if (isset($_POST['submit'])) {
	$name 		= @trim(stripslashes($_POST['name'])); 
	$email 		= @trim(stripslashes($_POST['email'])); 
	$tel 		= @trim(stripslashes($_POST['tel'])); 
	$bike 		= @trim(stripslashes($_POST['bike'])); 
	$date 		= @trim(stripslashes($_POST['date'])); 
	$days 		= @trim(stripslashes($_POST['days'])); 
	$message 	= @trim(stripslashes($_POST['message'])); 

	$to   		= 'info@superstarrentals.com'; #'info@superstarrentals.com';//replace with your email
	$subject = "Booking Enquiry - System Message";
	$body = "Hi James,<br>";
	$body.= "This is a message from your system!<br><br>";
	$body.= "Name: "	.$name."<br>";
	$body.= "Email: "	.$email."<br>";
	$body.= "Tel: "	.$tel."<br>";
	$body.= "Bike: "	.$bike."<br>";
	$body.= "Date: "	.$date."<br>";
	$body.= "Days: "	.$days."<br>";
	$body.= "Message: ".$message."<br><br>";
	$body.= "Thanks,<br><br>";
	$body.= "System Message";
	#echo $body;



$headers  = "From: {$name} < {$email} >\n";
$headers .= "X-Sender: {$name} < {$email} >\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1\n"; // Urgent message!
$headers .= "Return-Path: info@superstarrentals.com\n"; // Return path for errors
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\n";

	if (mail($to, $subject, $body, $headers)) {
	} else {
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta name="description" content="Bike Rental Phuket">
  <meta name="author" content="Will Mason - TechOwl">
  <title>Super Star Bikes, Phuket.</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">


<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso th{font-family: Arial, Helvetica, sans-serif; color: black}.asteriskField{color: red;}</style>

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/">
  
    <style type="text/css">
      body.bg  div[lang=en] {
        display: none;
      }
      body.en  div[lang=bg] {
        display: none;
      }
	  body.bg  li a[lang=en] {
        display: none;
      }
      body.en  li a[lang=bg] {
        display: none;
      }
    </style>
</head><!--/head-->

<body class="en">

  <!--.preloader
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  .preloader-->

  <header id="home">
	<div class="main-nav" id="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">
					<img class="img-responsive" style="max-height: 55px; margin: 0 auto padding: 10px;" src="images/super.jpg" alt="Super star rentals" />
				</a>  
				<a class="navbar-brand" style="color:white; font-size: 22px; color: yellow; margin-top:12px;">
					Rentals
				</a>                    
			</div><!-- nav header -->
			<div class="collapse navbar-collapse">
			
				<ul class="nav navbar-nav navbar-right">                 
					<!--<li><a onclick="document.body.className='en'"><img src="images/uk.png" style="max-height:20px; border-radius:2px;"></a></li>
					<li><a onclick="document.body.className='bg'"><img src="images/bg.png"
					<li class="scroll active"><a href="#home" lang="bg">У дома</a></li> style="max-height:20px; border-radius:2px;"></a></li>-->
					<li class="scroll active"><a href="#home" lang="en">Home</a></li>
					<li class="scroll"><a href="#about" lang="en">About</a></li> 
					<li class="scroll"><a href="#bikes" lang="en">Bikes</a></li>                           
					<li class="scroll"><a href="#enquiry" lang="en">Enquiry</a></li>                           
					<li class="scroll"><a href="#blog" lang="en">News</a></li>
					<li class="scroll"><a href="#twitter" lang="en">Reviews</a></li>
					<li class="scroll"><a href="#contact" lang="en">Contact</a></li>       
					      
				</ul>
			</div>
		</div><!-- container -->
    </div><!--/#main-nav-->
	
	    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/image2.jpg); background-position: center; ">
          <div class="caption">
		  <div style="display: inline;">
            <h1 class="animated fadeInLeftBig h1img"><span>Welcome to </span><img class="img-responsive" src="images/super.jpg" alt="logo" style="border-radius: 20px ; display: inline; vertical-align: middle; margin-top: 10px;"></h1>
			</div>
			<h3 class="animated fadeInRightBig" style="color: white;"><span style="color:#F1F817">Explore</span> the island of Phuket by bike</h3>
            <a data-scroll class="btn btn-start animated fadeInUpBig scroll" href="#bikes">View Bikes</a>
          </div>o
        </div>
        <div class="item" style="background-image: url(images/image16.jpg);">
          <div class="caption">
            <h1 class="animated fadeInLeftBig h1img"><span>Welcome to </span><img class="img-responsive" src="images/super.jpg" alt="logo" style="border-radius: 20px ; display: inline; vertical-align: middle; margin-top: 10px;"></h1>
            <p class="animated fadeInRightBig">Offering the best rates<span style='color: #5cd65c'> in Phuket</span></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig scroll" href="#bikes">View Bikes</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/buddha-bg.png);">
        <div class="caption">
            
            <h1 class="animated fadeInLeftBig h1img"><span>Welcome to </span><img class="img-responsive" src="images/super.jpg" alt="logo" style="border-radius: 20px ; display: inline; vertical-align: middle; margin-top: 10px;"></h1>
            <p class="animated fadeInRightBig">Offering bike rentals in Phuket</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig scroll" href="#bikes">View Bikes</a>
          </div>
        </div>
      </div>
      <!--<a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left" style="margin-top: 10px;"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right" style="margin-top: 10px;"></i></a>-->

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
	
  </header><!--/#home-->
  
   <section id="about" class="parallax">
	<div class="container" style="color: black;">
		<div class="row">
			<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp">
			</div>
			
			<div class="container-fluid">
				<div class="row">
					
					<div class="col-sm-7" lang="en" style="font-family: Trebuchet MS;">
						<center><h1 style="color: black;font-family: Trebuchet MS;"><small style="font-family: Trebuchet MS;">Welcome to the beautiful island of</small> <b style="font-family: Trebuchet MS;">Phuket</b>  </h1></center>
						<p style="font-family: Trebuchet MS;">
						Welcome to Super Star Phuket! We offer motorbike hire in Phuket. We offer the best customer service and make hiring a bike hassle free!
						<br>We offer a collection and delivery service anywhere in Phuket and have a wide selection of bikes to suit your individual needs.  <br>
                          <br>Transport can be expensive in Phuket so a bike is the cheapest option but also gives you the freedom to explore in your own time!
                         <br>Make a booking enquiry using the form below and one of our team will be in touch shortly!<br>
                        </p>
					</div>
					<div class="col-sm-5">
						<img src="images/biketest.jpg" class="img-responsive" style="border-radius: 4px;">
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--/#twitter-->
<br></br>
<section id="" class="parallax" style="background-color: #8E8361;">
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h2 style="color: #FDEF04;padding: 20px;"><small style="color: white;">Explore the beauty of </small>Phuket<small style="color: white;"> and experience the </small>freedom<small style="color: white;"> to not miss a thing!</small></h2>
		</div>
	</div>
</div>
</section>


   <section id="bikes" class="parallax">
	<div class="container" style="color: black;">
		<div class="row">
			<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp">
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
					<h1 class="text-center" style="color: black;">Our Bikes</h1>
					<hr>
					</div>
					<div class="col-sm-5" lang="en">
						<img src="images/Honda-PCX150.jpg" class="img-responsive" style="border-radius: 4px;">
						
					</div>
					<div class="col-sm-7" lang="en">
						<center><h1 style="color: black;">  </h1></center>
						<h1 style="color: black;">Honda PCX-150</h1>
						<p>150cc Bike, perfect for enjoyable rides around the beautiful island of Phuket. With an assortment of activities available on the island, the Honda PCX-150 is the go-to bike for travellers.</p>
						<h3 style="color: black;">Prices: <small>200 THB - 600 THB / Day</small></h3>
						<h3><small>Bikes available for daily, weekly or monthly bookings, please inquire to find out more!</small></h3>
						<button type="submit" class="btn btn-primary"><a href="#enquiry" class="scroll" style="color:white;">Booking Enquiry</a></button>
						
					</div>
				</div>
				<hr>
				
				<div class="row">
					
					<div class="col-sm-5" lang="en">
						<center><h1 style="color: black;">  </h1></center>
						<img src="images/Genuine-Thailand-Honda-Click-125i-Scooter.jpg" class="img-responsive" style="border-radius: 4px;">
						
					</div>
					<div class="col-sm-7" lang="en">
						<center><h1 style="color: black;">  </h1></center>
						<h1 style="color: black;">Honda Click 125cc</h1>
						<p>The Honda Click 125cc Bike, perfect for enjoyable rides around the beautiful island of Phuket. With an assortment of activities available on the island, the Honda Click 125cc is the go-to bike for travellers.</p>
						<h3 style="color: black;">Prices: <small>200 THB - 600 THB / Day</small></h3>
						<h3><small>Bikes available for daily, weekly or monthly bookings, please inquire to find out more!</small></h3>
						<button type="submit" class="btn btn-primary"><a href="#enquiry" class="scroll" style="color:white;">Booking Enquiry</a></button>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--/#twitter-->
<br></br>

<section id="enquiry" style="padding:0;">
	<div class="bootstrap-iso" style="background-color: #1d2089; color: white; padding: 10px;">
	<div class="container-fluid">
		<div class="row">
			<div class="heading text-left col-sm-5 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms" lang="en">
				<center><h1 style="color: white;">Rental Enquiry</h1>
				<div class="line" style="color: white ;">
                        <hr>
                    </div>
				<h4 style="color:white"><p>If you would like to make an enquiry complete your details and we will be in touch shortly to discuss your rental. </p>
				<p></p> 
				<p>We offer delivery and collection services from your hotel.</p>
				<p>Thank you for choosing Super Star Rentals - we look forward to recieving your enquiry!</p></h3></center>
				<center><img class="img-responsive" src="images/image13.jpg" style="max-height: 250px; border-radius: 25px;"></center>
			</div>
			<br></br>
            <div class="col-sm-7">
			
              <form id="main-contact-form" name="contact-form" method="post" action="<?php $_SERVER['http_host']?>">
                <div class="row  wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                  <div class="col-sm-6">
                    <div class="form-group">
					  <div lang="en">
                        <input type="text" name="name" class="form-control" placeholder="Full Name" required="required">
					  </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
					  <div lang="en">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
					  </div>
                    </div>
                  </div>
                </div>
				<div class="row  wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                  <div class="col-sm-6">
                    <div class="form-group">
					  <div lang="en">
                        <input type="text" name="tel" class="form-control" placeholder="Contact Number" required="required">
					  </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
					  <div lang="en">
					    <select name="bike" class="form-control" id="payment">
							<option value="">Select Bike</option>
							<option value="Honda PCX Motorbike">Honda PCX Motorbike</option>
							<option value="Honda 125cc Click Scooter">Honda 125 Click Scooter</option>
						  </select>
					  </div>
                    </div>
                  </div>
                   
                </div>
				
				
				<div class="row  wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" id="date" name="date" class="form-control" placeholder="Preferred Date">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
					  <div lang="en">
					    <select name="days" class="form-control" id="payment">
							<option value=""># Days</option>
							<?php for( $i=1; $i<=101; $i++ ) { ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php ; } ?>
						  </select>
					  </div>
                    </div>
                  </div>
                </div>
				
                <div class="form-group" lang="en">
                  <textarea name="message" id="message" class="form-control" rows="2" placeholder="Message" value=""></textarea>
                </div>                        
                <div class="form-group" lang="en">
                  <button type="submit" name="submit" class="btn-submit" style="color:white;">Send Now</button>
                </div>
              </form> 
            </div><!-- row -->
		</div> 
	</div>

    <div class="contact-form wow fadeIn" data-wow-duration="500ms" data-wow-delay="600ms">
          <div class="row">
	     </div><!-- container fluid -->
		 </div>
	<div id="portfolio-single-wrap">
		<div id="portfolio-single">
		</div>
	</div><!-- /#portfolio-single-wrap -->
</section><!--/#portfolio-->


    <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="100ms">
          <h2 style="colour:white;">News Feed</h2>
          <p style="color:white;">Look out for our new products & recent news!</p>
        </div>
      </div>
      <div class="blog-posts">
        <div class="row">


<?php 

## FACEBOOK -> STATUS UPDATE FEED COMPONENTS
$fb_page_id = "304186900110454";
$profile_photo_src = "https://graph.facebook.com/{$fb_page_id}/picture?type=square";
$access_token = "EAAFAhc112MYBAG0LkTYEl9rHDiZAhecRLwZAMysaLTjhO8FnZCIoABBtHxd7UWkw3FdMPVQ1aZAdAGZC99bUlGyS8k0BXcPbKWG1TJzqSoAg3nPxe9sSPZB4RMTyuEZAaXNLM8BMtD8DOO1RCUpBZCDtiub3ie8rC3vlbBhFn38BoAZDZD";

$fields = "id,message,picture,link,name,description,type,icon,created_time,from,object_id";
$limit = 3;

curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/{$fb_page_id}/feed?access_token={$access_token}&fields={$fields}&limit=3");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$fb = curl_exec($ch);
$obj = json_decode($fb);
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
	
	$post_id = $feed->id;

	curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/{$post_id}/likes?summary=true&access_token={$access_token}");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$fb = curl_exec($ch);
	$likes = json_decode($fb);
	
	
	curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/{$post_id}/comments?summary=true&access_token={$access_token}");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$fb = curl_exec($ch);
	$comments = json_decode($fb);
	
	// link posted
	if (isset($feed->link)) {
	$link = $feed->link;
	}

	// clean description
	$description = "";

 
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
#print_r($feed->message);
	// user's custom message
	//if (isset($feed->message)) {
		if(strlen($feed->message) > 300){
		   $message =  substr($feed->message, 0, 300).'...';
		}
		else {
			$message = $feed->message;
		}
	//} else {
	//	$message="No message content, <a href='https://www.facebook.com/{$post_id}' target='_blank'>click here</a> to view the post";
	//}
	?>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="<?php echo "https://graph.facebook.com/" .$object_id. "/picture"; 
											if ($object_id === $feed->from->id) {echo "?type=large";}
											?>" alt="" style="height: 300px;"></a> 
              <div class="post-meta" style="margin: 0 auto;">
                <span style="background-color: #8E8361; padding:2px; border-radius: 3px;"><i class="fa fa-comments-o"></i> <?php echo $comments->summary->total_count; ?> Comments</span>
                <span style="background-color: #8E8361; padding:2px; border-radius: 3px;"><i class="fa fa-heart"></i> <?php echo $likes->summary->total_count; ?> Likes</span> 
              </div>
              <div class="post-icon">
                <i class="fa fa-facebook"></i>
              </div>
            </div>
            <div class="entry-header" style="height: 150px; padding-top: 5px;">
              <p><?php if (isset($message)) { echo $message; } else { echo "No Message Content";}?></p>
              <span class="date"><?php echo $ago_value;?></span>
              <span class="cetagory">As a <strong><?php echo $feed->type; ?></strong></span>
            </div>
          </div>

		<?php } ?>     

        </div><!-- /row -->              
      </div>
    </div>
  </section><!--/#blog-->

  <section id="twitter" class="white" style="padding-top:100px; padding-bottom:100px;">
    <div>
    <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left" style=""></i></a>
    <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right" style=""></i></a>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="color: black">
                        
                            <?php 
                            
                            #$request_url ="https://graph.facebook.com/{$fb_page_id}/ratings?access_token={$access_token}&limit=10";
                            #$requests = file_get_contents($request_url,false,$context);
                            #$fb_response = json_decode($requests);
                            $access_token="EAAFAhc112MYBAHXSRRD77Ot5rH0MGFQBZAMACgh1H6gZBn878HIUEaPBDzbCJxqxZCZAECOTHaCTtJvPIiUIZAleV2cs3Y5SmJn3ZCX59nuKQeBkppVFdkZASj2DYhVejcHHBIfUGfMAO0EDSYv5aKNzhyYOdOfLC9V9VgbSMMrFwZDZD";
                            curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/{$fb_page_id}/ratings?access_token={$access_token}&limit=10");
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            $fb = curl_exec($ch);
                            $fb_response = json_decode($fb);

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
                                        $review_text=NULL;
                                        if (isset($item->review_text)) {
                                            if(strlen($item->review_text) > 140){
                                               $review_text =  substr($item->review_text, 0, 140).'...<br><a href="https://www.facebook.com/'.$object_id.'" target="_blank">(read more)</a>';
                                            } else {
												$review_text=$item->review_text;
											}
                                        }
                                    ?>
    <div class="row" style="background-color: #13212E; padding-top: 10px; opacity: 0.85; border-radius: 4px; color: white;">
                                    <div class="col-sm-3 col-xs-12 col-sm-offset-2">
                                    <a href='<?php echo $reviewer_page; ?>' target='_blank'>
                                        <img src='<?php echo $reviewer_photo_src; ?>' style='margin: 0 auto;'>
                                    </a>
                                    <a href='<?php echo $reviewer_page; ?>' target='_blank'>
                                        <p><span style="color: white;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><?php echo $item->reviewer->name; ?> posted <?php echo $ago_value;?></span></p>
                                    </a>
                                        <h1 style="color: white;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
                                            <div id="stars-existing" class="starrr"  style="color: gold;" data-rating='<?php echo $item->rating; ?>'></div>
                                            <?php echo $item->rating; ?> Star Review
                                        </h1>
                                    </div>
                                    <div class="col-sm-5 col-xs-12">
                                    <h3 style="color: white;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Review Text:</h3>
                                    <p><span style="color: white;text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;"><?php if(isset($review_text)) { echo $review_text;} else { echo "They didn't leave review text, they gave a ".$item->rating." star review, though";} ?></span></p>
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


<section id="portfolio" style="background-color: #8e8361;opacity: 0.9; color: white;">
	<div class="container">
		<div class="row">
			<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms" lang="en">
				<h1 style="color: white;">Places to Visit In Phuket</h1>
				<div class="line" style="color: white ;">
                        <hr>
                    </div>
				<p style="color:white; font-size: 16px;">Welcome to the beautiful Thai island of Phuket. The island is host to beautiful beaches and scenic viewpoints, with a multitude of events, tours &amp; trips. With the West of the island housing world-class beaches to watch the sunset and accomodating roads for a comfortable ride.</p>

			</div>
		</div> 
	</div>
	<div class="container-fluid">
		<div class="row">
		
			<div class="col-sm-3">
				<div class="folio-item wow fadeInRightBig" data-wow-duration="500ms" data-wow-delay="100ms">
					<div class="folio-image">
						<img class="img-responsive" src="images/image8-sm.jpg" alt="">
					</div>
					<div class="overlay">
						<div class="overlay-content">
							<div class="overlay-text">
								<div class="folio-info">
									<h3>Temples</h3>
									<p>Lots to visit around Phuket</p>
								</div>
								<div class="folio-overview">
									<span class="folio-expand"><a href="images/image8-sm.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="folio-item wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="100ms">
					<div class="folio-image">
						<img class="img-responsive" src="images/image2-sm.jpg" alt="">
					</div>
					<div class="overlay">
						<div class="overlay-content">
							<div class="overlay-text">
								<div class="folio-info">
									<h3>Beautiful Beaches</h3>
									<p>All Around The Island</p>
								</div>
								<div class="folio-overview">
									<span class="folio-expand"><a href="images/image2-sm.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="folio-item wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="100ms">
					<div class="folio-image">
						<img class="img-responsive" src="images/image3-sm.jpg" alt="">
					</div>
					<div class="overlay">
						<div class="overlay-content">
							<div class="overlay-text">
								<div class="folio-info">
									<h3>Ride Into Phuket Town</h3>
									<p>Shopping Or Sightseeing</p>
								</div>
								<div class="folio-overview">
									<span class="folio-expand"><a href="images/image3-sm.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="folio-item wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="100ms">
					<div class="folio-image">
						<img class="img-responsive" src="images/image4-sm.jpg" alt="">
					</div>
					<div class="overlay">
						<div class="overlay-content">
							<div class="overlay-text">
								<div class="folio-info">
									<h3>Views Of The Moutains</h3>
									<p>All Across The Island</p>
								</div>
								<div class="folio-overview">
									<span class="folio-expand"><a href="images/image4-sm.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="folio-item wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="100ms">
					<div class="folio-image">
						<img class="img-responsive" src="images/image6-sm.jpg" alt="">
					</div>
					<div class="overlay">
						<div class="overlay-content">
							<div class="overlay-text">
								<div class="folio-info">
									<h3>View Points </h3>
									<p>See Across Phuket - Monkey Hill</p>
								</div>
								<div class="folio-overview">
									<span class="folio-expand"><a href="images/image6-sm.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="folio-item wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="100ms">
					<div class="folio-image">
						<img class="img-responsive" src="images/viewpoint.jpg" alt="">
					</div>
					<div class="overlay">
						<div class="overlay-content">
							<div class="overlay-text">
								<div class="folio-info">
									<h3>Explore The Nature And Sights</h3>
									<p>Karon View Point</p>
								</div>
								<div class="folio-overview">
									<span class="folio-expand"><a href="images/viewpoint.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="folio-item wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="100ms">
					<div class="folio-image">
						<img class="img-responsive" src="images/image11-sm.jpg" alt="">
					</div>
					<div class="overlay">
						<div class="overlay-content">
							<div class="overlay-text">
								<div class="folio-info">
									<h3>Feed The Elephants</h3>
									<p>Near Big Budda</p>
								</div>
								<div class="folio-overview">
									<span class="folio-expand"><a href="images/image11-sm.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-3">
				<div class="folio-item wow fadeInLeftBig" data-wow-duration="500ms" data-wow-delay="100ms">
					<div class="folio-image">
						<img class="img-responsive" src="images/image7-sm.jpg" alt="">
					</div>
					<div class="overlay">
						<div class="overlay-content">
							<div class="overlay-text">
								<div class="folio-info">
									<h3>Monkey Hill</h3>
									<p>See And Feed The Monkeys</p>
								</div>
								<div class="folio-overview">
									<span class="folio-expand"><a href="images/image7-sm.jpg" data-lightbox="portfolio"><i class="fa fa-search-plus"></i></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div><!-- row -->
	</div><!-- container fluid -->
	<div id="portfolio-single-wrap">
		<div id="portfolio-single">
		</div>
	</div><!-- /#portfolio-single-wrap -->
</section><!--/#portfolio-->
  <section id="contact" style="background-color: #8e8361;opacity: 0.9;">
    <div id="contact-us" class="parallax">
	<br></br>
	<br></br>
      <div class="container" style="background-color: #8e8361; padding-top:-20px; border-radius: 5px; opacity: 0.9;">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms" lang="en">
            <h2>Contact Us</h2>
            <p>If you would like to send us a message we will be in touch shortly - we look forward to hearing from you!</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="500ms" data-wow-delay="600ms">
          <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
                </div>                        
                <div class="form-group">
                  <button type="submit" name="submit" class="btn-submit">Send Now</button>
                </div>
              </form>   
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
                <p> </p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span>Wichit Songkram Road, Phuket, Thailand.</li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> 063 062 3748 / 099 363 2211 </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:info@superstarrentals.com">info@superstarrentals.com</a></li>
                  <li><i class="fa fa-globe"></i> <span> Website:</span> <a href="#">www.superstarrentals.com</a></li>
				  <li><a class="facebook" href="#">
				  <i class="fa fa-facebook"></i></a>    <a class="facebook" href="#"> <i class="fa fa-instagram"></i></a></li>
                </ul>
				<center><img class="img-responsive" src="images/image18-sm.jpg" style="max-height: 250px; border-radius: 25px;"></center>
              </div>                            
            </div>
          </div>

        </div>
        
        <br>

		  <div class="row">
			  <div class="col-md-12">
			  <div style="width: 100%"><iframe width="100%" height="350" src="https://maps.google.com/maps?width=100%&amp;height=350&amp;hl=en&amp;coord=7.907672, 98.348248&amp;q=Wichit%20Songkram%20Road%2C%20Phuket%2C%20Thailand+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=17&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Create Google Map</a></iframe>
			  </div><br />
			  </div>
		  </div>
        </div>
      </div>
    </div>        
  </section><!--/#contact-->
  
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="#"><img class="img-responsive" src="images/super.jpg" alt="" style="border-radius 20px ; max-height: 90px;"></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom" style="background-color: #1D2089; color:#D3CF0D;">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2018 Super Star Rentals</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.techowl.co.uk/">TechOwl</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
</body>
</html>
<?php
// to get 'time ago' text
function time_elapsed_string($datetime, $full = false) {
 
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
 
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
 
    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }
 
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}
?>