<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="images/favicon.png" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="css/commoncss.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/animate.css" />
<link rel="stylesheet" type="text/css" href="css/hover.css" />
<link href="css/timer.css" rel="stylesheet">
<title>Vertical Video Firesale</title>

</head>

<body>
<?php
error_reporting(0);

$fh = fopen('images/data.txt','r');
$time = '';
$coupan = '';
$coupanVolume = '';
while ($line = fgets($fh)) {
   $line = explode('##',$line);
   $key = trim($line[0]);
   $value = trim($line[1]);
   if($key == 'time'){$time = $value; }
   if($key == 'coupan'){$coupan = $value; }
   if($key == 'coupanVolume'){$coupanVolume = $value; }
}
fclose($fh);

?>
<!--/*==========Fix Header===========*/-->

<!--<div class="top-timer fix">
	<div class="container">
    	<div class="row">
        	
           <div class="col-md-5 col-sm-5 col-xs-12 pad0">               
                 <p class="lh130 fm17 fs10 fx9 text-center wt600 hidden-xs black">                
                Use this Coupon code 
                <span class="red brush3 wt700 fm20 fs17 fx10 pad0"> "POLLSALE$2OFF"
                </span> to get  <br>$2  Discount on <span class="blue">Unlimited Sites License</span> 
                </p>                  
            </div>
        	
            <div class="col-md-4 col-sm-5 col-xs-12  hidden-xs">
            <div id="countdown" data-wow-delay=".3s" data-date="<?php echo $time; ?>"></div>
            </div>
            
            <div class="col-md-3 col-sm-2  col-sm-2">
            <a href="#buyNow">
            <div class="buybtn text-center">
            <span class="wt600 fm22 fs17 fx16">Buy Now</span>
            </div>
            </a>
            </div>
        </div>
	</div>
</div>-->




<section class="banner">
    <div class="container mycontainer">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    <img src="images/logo.png" width="250"  class="img-responsive  logoheight animated zoomIn">
                    </div>
					 
           <div class="col-md-8 col-sm-8 col-xs-12 fm20 fs16 fx15 wt300 banner-link white hidden-xs text-right p0 poppins">



			<!--<a href="#feature">Features </a> |--> <a href="#demo">Demo</a> 

      		<a class="whitetext scaleimg  buybutton" href="#buyNow">

            Buy Now</a>
			</div></div>    

<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 spacer3">	


	
<h2 class="fm20 fs40 fx12 wt500 line160 white text-center strips">
How To Make Vertical Ads Your Biggest Client-Grabbing Money Machine? </h2></div></div></div>			


<div class="container spacer2">
<div class="row">
<div class="col-md-12 col-md-offset-0 col-sm-12 col-xs-12">
<h2 class="fm36 fs40 fx12 wt300 line150 white text-center poppins">
Unlock PLR Rights To<span class="wt700"> Massive Collection Of Jaw-Dropping & Attention-Grabbing</span> Royalty-Free, <i><span class="wt700 c1">5000+ HD Quality, Vertical Video Templates In Super HOT* Niches</span></i> - <span class="wt700">Garner Millions</span> Of Views On <span class="wt700"><u>Social Feeds & Lock-In Huge Profits!</u> </span></h2>



</div>

<div style="clear:both;"></div>

<!--<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 spacer2">		
<h2 class="fm21 fs40 fx12 wt400 line160 white text-center">
Huge Money-Making Opportunity with our PLR License!
</h2></div>--></div></div>

	<div class="container">
    <div class="row">
    <div class="col-md-12  col-sm-12 col-xs-12">


    <div class="col-md-7 col-sm-12 col-xs-12 spacer8">
	<img src="images/product.png"   class="img-responsive center-block">
	<!--<div class="myvideo3A">
	<div class="myvideo3-box">
    <div class="demovideo">
    <iframe src="https://player.vimeo.com/video/?autoplay=1&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    </div>	
	</div></div>-->
	
	</div>
	
	
	
<div class="col-md-5  col-sm-12 col-xs-12 bulletboxed spacer4">


<ul class="orangeArrow-listing fm17 fs16 fx14 white wt400 line80 opensans spacer1" id="feature">
<li>Save BIG - <span class="wt600">$348</span> and more annually over <span class="wt600">vertical video sites</span></li><hr>
<li>Save Thousands in <span class="wt600">creating vertical videos</span></li><hr>
<li>Royalty Free, Full HD <span class="wt600">1080p videos 4k videos </span></li><hr>
<li>5000 Vertical videos <span class="wt600">perfectly crafted for social feeds and websites</span></li><hr>
<li>PLR included to sell them</li><hr>
<li>Easily charge between <span class="wt600">$50 to $150 per video!</span></li><hr>
<li>Use them to <span class="wt600">upscale your own business and boost ROI!</span>
</li>
</ul>
</div>
	</div>	
	</div>
	</div></section>
	
<div class="section12a">
<div class="container mycontainer">
<div class="row">


<div class="col-md-12 col-sm-12 col-xs-12">			
<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 spacer2 poppins">
<p class="lh130 fm26 fs20 fx10 text-center black wt500 spacer3">                
                Grab this insane offer at the dirt-cheap price now.
                </p>
</div>

<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 spacer2 poppins">
<a href="#buyNow">
    <div class="buybtn text-center shine poppins">
    <span class="wt600 fm26 fs24 fx10">Get instant access to Vertical Video Firesale NOW!!</span><br>
    </div>
    </a>
<br>
<p class="fm20 fs12 fx10 black wt500 text-center spacer1">( Private Label Rights option included)</p>


</div>	

<div class="col-md-1 col-sm-12 col-xs-12">
</div>

<!--<div class="col-md-5 col-md-offset-0 col-sm-12 col-xs-12 spacer2">
<h1 class="fm24 fs20 fx10 lh150 text-center margin0 helv white wt600 exactlybg poppins">
 THE PRICE GOES UP IN
</h1><br/>
<div class="spacer2" id="countdown2" data-wow-delay=".3s" data-date="<?php echo $time; ?>">
</div>	
</div>-->

<div class="col-md-12 col-sm-12  col-xs-12  spacer4 clear">
<img src="images/buycart1.png" width="500"  class="img-responsive center-block">
</div>
</div>


</div></div></div>




<section class="background3 spacer6">
<div class="container ">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm40 fs20 fx14 line170 white poppins text-center wt800">
Our clients Are Already banking profits<br> with this stunning package….
</p></div>		
</div></div></section>

<section class="section12a">
<div class="container mycontainer">
<div class="row">
<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
<img src="images/z1.jpg"   class="img-responsive center-block">
</div>
<div class="col-md-8 col-md-offset-2  col-sm-12 col-xs-12 spacer4">
<img src="images/z2.jpg"   class="img-responsive center-block">
</div></div></div></section>



<div class="section12">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12 spacer12">
<p class="fm44 fs20 fx14 line170 white poppins text-center wt800">
PLR products can fill your <br><span class="yellow">pockets with cash!!</span>
</p></div></div></div></div>



<div class="whitesection">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<p class="fm30 fs20 fx14 line170 black poppins text-center wt600">
Our Stunning vertical video bundle can make you income like this…


<img src="images/moneysrn.png"   class="img-responsive center-block">
</p>


<p class="fm30 fs20 fx14 line170 black poppins text-center wt600">
Our members are delighted with Top Quality Material We create ...</p>
<p class="fm30 fs20 fx14 line170 black poppins text-center wt600">
And They Absolutely Love it!
Join our group of Smart Marketers who are already making big!</p>



</div>


<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 spacer2 poppins">
<p class="lh130 fm26 fs20 fx10 text-center black wt500 spacer3">                
                Grab this insane offer at the dirt-cheap price now.
                </p>
</div>

<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 spacer2 poppins">
<a href="#buyNow">
    <div class="buybtn text-center shine poppins">
    <span class="wt600 fm26 fs24 fx10">Get instant access to Vertical Video Firesale NOW!!</span><br>
    </div>
    </a>
<br>
<p class="fm20 fs12 fx10 black wt500 text-center spacer1">( Private Label Rights option included)</p>


</div>	

<div class="col-md-12 col-sm-12  col-xs-12  spacer4 clear">
<img src="images/buycart1.png" width="500"  class="img-responsive center-block">
</div>

</div></div></div>







<img src="images/stat.jpg"  class="img-responsive center-block">

























<!--<section class="whitesection">
<div class="container">   
<div class="row">
<div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 spacer2">		
<h2 class="fm50 fs18 fx30 line170 red text-center poppins wt700 ">
And Many More... </h2></div>  


<div class="col-md-12 col-sm-12 col-xs-12 fm18 fs20 fx16 spacer2">
<div class="col-md-4 col-sm-12 col-xs-12 fm18 fs20 fx16">
<ul class="cuttingedge-listing text-left line170 wt600 black fm22 fs15 fx15">				 				 
<li>Art
<li>Boy
<li>Computer
<li>Couples
<li>Crime
<li>Earth
</div>

<div class="col-md-4 col-sm-12 col-xs-12 fm18 fs20 fx16">
<ul class="cuttingedge-listing text-left line170 wt600 black fm22 fs15 fx15">				 				 
<li>Farmer
<li>Fear
<li>Fireworks
<li>Flag
<li>Flowers
<li>Game
</div>

<div class="col-md-4 col-sm-12 col-xs-12 fm18 fs20 fx16">
<ul class="cuttingedge-listing text-left line170 wt600 black fm22 fs15 fx15">				 				 
<li>Girls
<li>People
<li>Smoke
<li>Space
<li>Town
<li>Vehicles
</div>-->

</div></div></section>









<!--<div class="sectionz">
 <div class="container">
        <div class="section-title spacer6">
            <h2 class="fm20 fs15 fx14 line160 wt500">What Experts Are Saying About<br>
"Vertical Video Firesale with PLR" Offer...</h2>
           
        </div>
    </div>

    <div class="testimonials-carousel-wrap spacer3">
        <div class="listing-carousel-button listing-carousel-button-next"><i class="fa fa-caret-right" style="color: #fff"></i></div>
        <div class="listing-carousel-button listing-carousel-button-prev"><i class="fa fa-caret-left" style="color: #fff"></i></div>
        <div class="testimonials-carousel">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="img/21.jpg"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                            <div class="testimonials-text">
                                <div class="listing-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <!--<a href="#" class="text-link"></a>-->
                                <!--<div class="testimonials-avatar">
                                    <h3>John Doe</h3>
                                    <h4>Owner</h4>
                                </div>
                            </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                        </div>
                    </div>

                    <!--second--->
                    <!--<div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="img/3.jpg"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                            <div class="testimonials-text">
                                <div class="listing-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <!--<a href="#" class="text-link"></a>-->
                                <!--<div class="testimonials-avatar">
                                    <h3>Doe Boe</h3>
                                    <h4>Director</h4>
                                </div>
                            </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                        </div>
                    </div>
                    <!--third-->

                    <!--<div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="img/4.jpg"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                            <div class="testimonials-text">
                                <div class="listing-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                               <!-- <a href="#" class="text-link"></a>-->
                                <!--<div class="testimonials-avatar">
                                    <h3>Boe Doe</h3>
                                    <h4>Developer</h4>
                                </div>
                            </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                        </div>
                    </div>

                    <!--fourth-->
                    <!--<div class="swiper-slide">
                        <div class="testi-item">
                            <div class="testi-avatar"><img src="img/6.jpg"></div>
                            <div class="testimonials-text-before"><i class="fa fa-quote-right"></i></div>
                            <div class="testimonials-text">
                                <div class="listing-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <!--<a href="#" class="text-link"></a>-->
                                <!--<div class="testimonials-avatar">
                                    <h3>Doe John</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                            <div class="testimonials-text-after"><i class="fa fa-quote-left"></i></div> 
                        </div>
                    </div>
                    <!--testi end-->

                <!--</div>
            </div>
        </div>

        <div class="tc-pagination"></div>
    </div>
</div>



<!--<div class="section7x">
<div class="container mycontainer">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<p class="text-center fm40 fs15 fx14 line140 white poppins wt600">What Experts Are Saying About <br>"Massive Media Blowout with PLR" Offer...</p>
</div>
</div>
</div>
</div>


<section class="sectionte">
<div class="container spacer4">    
    <div class="row">
 				 <div class="col-md-6 col-sm-12 col-xs-12 spacer2">
                <div class="testi-block1">
				<img src="images/yellow-ico1.png"  class="img-responsive"><br>
                    <p class="fm16 fs20 fx14 line170 wt400  text-center poppins">
                    Literally miraculous product in terms of quantity and quality. Over 1 Million+ Media Assets with PLR… That’s huge guys! And the visuals are absolutely stunning. It’s rare to find something so valuable at this low one-time price. And by providing PLR license with complete sales tools they have made it a total no-brainer for making huge bucks online. Highly Recommended!
                    </p>
                    <div style="clear:both;"></div><br><br>
					<img src="images/yellow-ico2.png" class="yellowin2"><br>
              </div>
			  
			  <div class="testimonial">
			  <div class="pic">
                        <img src="images/testimonials/Sam.png" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="wt700">Sam Arief</h4>
                    </div>
			  
			  
		</div></div>
		
		
        <div class="col-md-6 col-sm-6 col-xs-12 spacer2">
                <div class="testi-block1">
                    <img src="images/yellow-ico1.png"  class="img-responsive"><br>
					<p class="fm16 fs20 fx14 line170 wt400  text-center poppins">
                    I highly recommend this power-packed 1 Million+ media assets package to any marketer who is looking forward to saving thousands of dollars on visuals while simultaneously generating outstanding profits. As the name itself suggests, this is a massive collective, and with PLR and all the sales modules, it can be a great source of your income online. Grab it guys! 

                    </p>
					<div style="clear:both;"></div><br><br>
					<img src="images/yellow-ico2.png" class="yellowin2"><br>
					</div>
					
              <div class="testimonial">
			  <div class="pic">
                        <img src="images/testimonials/Maghfur.png" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="wt700">Maghfur Amin</h4>                        
                    </div>
				</div>
		</div>
	</div>
			
			
    <div class="row spacer4">
 				 <div class="col-md-6 col-sm-12 col-xs-12 spacer2">
                <div class="testi-block1">
				<img src="images/yellow-ico1.png"  class="img-responsive"><br>
                    <p class="fm16 fs20 fx14 line170 wt400  text-center poppins">
                    Firelaunchers always provide top-notch PLR offers and this Massive Media Blowout package is no exception. With 1 Million+ media assets including high-quality videos, audios, images, animated avatars, graphics, logos, etc. they have packed so much value in one bundle. But the best part is- they are providing everything with PLR and DFY sales stuff at this ridiculously low one-time price which makes it Perfect for Everyone. Go for it guys before the price increases!


                    </p>
					<div style="clear:both;"></div><br><br>
                    
					<img src="images/yellow-ico2.png" class="yellowin2"><br>
              </div>
			  
			  <div class="testimonial">
			  <div class="pic">
                        <img src="images/testimonials/Arif.png" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="wt700">Arif Chandra</h4>
                    </div>
			  
			  
		</div></div>
		
		
        <div class="col-md-6 col-sm-6 col-xs-12 spacer2">
                <div class="testi-block1">
                    <img src="images/yellow-ico1.png"  class="img-responsive"><br>
					<p class="fm16 fs20 fx14 line170 wt400  text-center poppins">
                    Oh my, this Massive Media Blowout package literally blew my mind. Your stuff is astounding – 1 Million+ media assets including videos, images, graphics, characters - all are killer. But the focal points are amazing sales modules and Private Label Rights licenses. A perfect product to sell and bank big profits while establishing yourself as an authority online.



                    </p>
					<div style="clear:both;"></div><br><br>
					<img src="images/yellow-ico2.png" class="yellowin2"><br>
					</div>
					
              <div class="testimonial">
			  <div class="pic">
                        <img src="images/testimonials/Maftuch.png" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="wt700">Maftuch Junaidy Mhirda
</h4>                        
                    </div>
				</div>
		</div>
	</div>
			
			
			
	  <div class="row spacer4">
 				 <div class="col-md-6 col-sm-12 col-xs-12 spacer2">
                <div class="testi-block1">
				<img src="images/yellow-ico1.png"  class="img-responsive"><br>
                    <p class="fm16 fs20 fx14 line170 wt400  text-center poppins">
                    Incredible package guys! I always love your stuff but this time you seriously have gone the extra mile with 1 Million+ media assets. Everything is perfect – videos, audio, graphics, images, animations, logos, and PLR license. With all the sales modules, anyone can put it to great use for making fast bucks online. I have never seen a package so incredible with such a big PLR opportunity at this low price. 
                    </p>
                    <div style="clear:both;"></div><br><br>
					<img src="images/yellow-ico2.png" class="yellowin2"><br>
              </div>
			  
			  <div class="testimonial">
			  <div class="pic">
                        <img src="images/testimonials/Deni.PNG" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="wt700">Deni Iskander</h4>
                    </div>
			  
			  
		</div></div>
		
		
        <div class="col-md-6 col-sm-6 col-xs-12 spacer2">
                <div class="testi-block1">
                    <img src="images/yellow-ico1.png"  class="img-responsive"><br>
					<p class="fm16 fs20 fx14 line170 wt400  text-center poppins">
                    For somebody like me who uses visual assets all the time, this ‘Massive Media Blowout’ offer is a godsend. I am in love with all the media files of this package, but most importantly, they are even giving PLR license and DFY sales modules with it as well, which makes it an excellent source of income in times like these. Seize the opportunity without delay!

</p><div style="clear:both;"></div><br><br>
					<img src="images/yellow-ico2.png" class="yellowin2"><br>
					</div>
					
              <div class="testimonial">
			  <div class="pic">
                        <img src="images/testimonials/Anugerah.png" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="wt700">Anugerah Syaifullah
</h4>                        
                    </div>
				</div>
		</div>
	</div>
    
    
    
    
  
 <div class="row spacer4">
 				 <div class="col-md-6 col-sm-12 col-xs-12 spacer2">
                <div class="testi-block1">
				<img src="images/yellow-ico1.png"  class="img-responsive"><br>
                    <p class="fm16 fs20 fx14 line170 wt400  text-center poppins">
                    Brilliant Package! Firelaunchers made it much easier to find high-quality visuals for your offers and also make some good bucks online from selling it with a PLR license. This massive PLR opportunity with all the sales modules will set you up for long-term success in just minutes. I'll be recommending this to everyone with a 10/10.
                    </p>
                    <div style="clear:both;"></div><br><br>
					<img src="images/yellow-ico2.png" class="yellowin2"><br>
              </div>
			  
			  <div class="testimonial">
			  <div class="pic">
                        <img src="images/testimonials/Bayu.png" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="wt700">Bayu Tara Wijaya</h4>
                    </div>
			  
			  
		</div></div>
		
		
        <div class="col-md-6 col-sm-6 col-xs-12 spacer2">
                <div class="testi-block1">
                    <img src="images/yellow-ico1.png"  class="img-responsive"><br>
					<p class="fm16 fs20 fx14 line170 wt400  text-center poppins">
                    You’ve nailed it, guys! This is a one-of-a-kind media assets collection with 1 Million+ visual assets including thousands of videos, audios, images, graphics, animations, etc. But the catch here is PLR license with DFY sales stuff. Many can bring incredible profits from selling it further. Thanks for the hard work guys!</p>
					<div style="clear:both;"></div><br><br>
					<img src="images/yellow-ico2.png" class="yellowin2"><br>
					</div>
					
              <div class="testimonial">
			  <div class="pic">
                        <img src="images/testimonials/Arifianto.png" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="wt700">Arifianto Rahardi
</h4>                        
                    </div>
				</div>
		</div>
	</div>
 

    
	
<div class="row spacer4">
 				 <div class="col-md-6 col-sm-12 col-xs-12 spacer2">
                <div class="testi-block1">
				<img src="images/yellow-ico1.png"  class="img-responsive">
                    <p class="fm15 fs20 fx14 line170 wt400  text-center poppins">
                    	Excellent visuals and everything is of high quality. You have included some very captivating videos, audios, images, animations, avatars for almost every niche on the planet. The best part is, it’s even coming with a PLR license. That’s very rare to find such a package with such an extensive PLR license and with all the sales modules along with it, anyone can put it to great use to make a fortune online. Kudos Firelaunchers!
                    </p>
					
                    <div style="clear:both;"></div><br><br>
					<img src="images/yellow-ico2.png" class="yellowin2"><br>
              </div>
			  
			  <div class="testimonial">
			  <div class="pic">
                        <img src="images/testimonials/Ilham.PNG" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="wt700">Ilham Zulkarnain</h4>
                    </div>
			  
			  
		</div></div>
		
		
        <div class="col-md-6 col-sm-6 col-xs-12 spacer2">
                <div class="testi-block1">
                    <img src="images/yellow-ico1.png"  class="img-responsive"><br>
					<p class="fm16 fs20 fx14 line170 wt400  text-center poppins">
                    I really love the new package Firelaunchers are offering. Their product quality always amazes me and this new ‘Massive Media Blowout’ offer really awestruck me. With all the modules, they are even providing Private Label Rights. What better way to strike it rich online than selling a top-notch visual product. Highly recommended to every marketer out there!</p>
					<div style="clear:both;"></div><br><br>
					<img src="images/yellow-ico2.png" class="yellowin2"><br>
					</div>
					
              <div class="testimonial">
			  <div class="pic">
                        <img src="images/testimonials/Simran.PNG" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4 class="wt700">Simran Pall</h4>                        
                    </div>
				</div>
		</div>
	</div>
	</div>
</section>-->




<!--<div class="section12">
<div class="container democontainer">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 spacer8">
<p class="fm36 fs32 fx15 line150 text-center wt800 y2 ">So Far, You Have Been Excluded From The Never-Ending <br>PLR Profits… But Not Anymore!!!</p></div>

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-7 col-sm-12 col-xs-12 fm18 fs20 fx16 spacer4">
<ul class="orangeArrow-listing text-left line170 wt400 white fm20 fs15 fx15">				 				 
<li>You don’t need to <b>extract time from your busy schedule to slave over sales pages, product, and promo materials!</b>
<li>You don’t have to <b>trouble your mind thinking about how to generate profits!</b>
<li>You don’t need to <b>hire an expert to do the profitable work for you!</b>
<li>You don’t need to <b>increase the bar of your responsibilities by doing it yourself!</b>
<li>You don’t need to <b>acquire any technical/editing skills!</b>
<li>You don’t need <b>expensive cameras or fancy studios!</b>
<li>You don’t have <b>to wait for good results and ROI!</b>
</li>
</ul>
</div>

<div class="col-md-5 col-sm-12 col-xs-12 spacer4">
<img src="images/men.png"   class="center-block img-responsive">
</div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm26 fs32 fx15 line150 text-center wt600 white">And The Best Part Is… You Can Fix Its Cost As Much<br> You Want And Keep 100% Of The All The Profits You Make!</p>
</div>
</div></div></div>-->












<div class="section12a">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12 spacer2">
<p class="fm40 fs20 fx14 line170 black poppins text-center wt800">
"One-third of the most-viewed Instagram<br> Stories are from businesses"
</p></div>


<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<p class="fm25 fs20 fx14 line170 black poppins text-center wt400">
Since Vertical Videos Gained Popularity WithPeople, Marketers Have <br>Moved Onto This Content, Especially To Leverage Social Media Platforms.
</p></div>
<img src="images/img12.png" class="img-responsive center-block">
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<p class="fm40 fs20 fx14 line170 black poppins text-center wt400">
You Can be one of them too…
</p></div>
</div></div><br><br><br></div>




<!--/*==========Section 10===========*/-->




<img src="images/img4.jpg" class="img-responsive center-block">

<div class="section12a">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm50 fs20 fx14 line170 black poppins text-center wt500 spacer1">
Tiktok's Total Ad Revenues This Year Will <br><span class="red wt700">Top $11 Billion, More Than Triple</span> <br>Its Ad Earnings From 2020"
</p>

<p class="fm24 fs20 fx14 line170 black poppins text-right wt500 spacer2">
Source - Insider Intelligence
</p>

</div></div></div></div>


<div class="background3">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm40 fs20 fx14 line170 white poppins text-center wt800 spacer1">
The Big Social Platforms Are Embracing It!</span>
</p></div></div></div></div>


<div class="section12a">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm28 fs20 fx14 line170 black poppins text-left wt500 spacer1">
Social behemoths like IGTV, Facebook, YouTube, TikTok & Snapchat are investing strongly in the vertical video syndrome...
</p></div>

<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<ul class="cuttingedge-listing text-left line170 wt400 black fm21 fs15 fx15">				 				 
<li>Snapchat Records <b>10 Billion Plus Vertical Video Views Per Day.</b>
<li>Facebook Will Be Able To <b>Earn $9.6 Billion For Video Advertising Alone.</b>
<li>Instagram Reported ARevenue <b>Estimated To $24 Billion In 2020.</b>

</li></ul></div>

<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm35 fs20 fx14 line170 red poppins text-center wt500 spacer1">
See what the experts have to say..
</p></div>


<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<img src="images/Chris.png" class="img-responsive center-block">

</div>
</div></div></div>

<div class="background3">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm40 fs20 fx14 line170 white poppins text-center wt800 spacer1">
Huge Brands Are Also Investing heavily <br>in Vertical Video Marketing!!</span>
</p></div>
</div></div></div>



<div class="whitesection">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm50 fs20 fx14 line170 wt600 red text-center poppins">
As seen on the feeds of </p>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-6 col-sm-12 col-xs-12">
<img src="images/m1.jpg" class="img-responsive center-block"></div>
<div class="col-md-6 col-sm-12 col-xs-12">
<img src="images/m2.jpg" class="img-responsive center-block">
</div></div>

<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<img src="images/logos.png" class="img-responsive center-block">
</div>

<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm30 fs20 fx14 line170 wt500 black text-center poppins">
Don’t wait – Go vertical!<br><br>
If brands are spending heavily on Instagram and other mobile-first apps, <br>this gives a compelling reason for companies to go vertical!
</p></div>

</div></div></div>


<div class="background3">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm35 fs20 fx14 line170 white poppins text-center wt800">
Even Though you know the benefits of Using <br>vertical Videos...There is a problem...<br><span class="yellow">They are expensive & time consuming..</span>
</p></div>



</div></div></div>



<div class="section12a spacer-6">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<p class="fm22 fs16 fx15 line180 wt400 black poppins">For many businesses creating vertical videos can seem like a daunting endeavour.
Also, a lot of time and effort goes into producing vertical video content and publishing it to your target market.<br><br>
There are TWO options for ever marketer…
</p>
</div>
<div class="col-md-5 col-sm-12 col-xs-12 spacer4">
<p class="fm34 fs16 fx15 line180 wt600 black poppins" ><span class="yellowcircle">Option 1: </span><br><br> Shooting Own Videos 
</p>
<p class="fm22 fs16 fx15 line180 wt400 black poppins spacer4">You need expensive equipment and spend time and money neglecting important aspects of your business. Most Probably, you can’t afford that.
</p>
</div>
<div class="col-md-7 col-sm-12 col-xs-12">
<img src="images/img1.png" class="img-responsive center-block">
</div>
</div>
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<p class="fm34 fs16 fx15 line180 wt600 black poppins text-center"><span class="yellowcircle">Option 2: </span>&nbsp;&nbsp; Buying Videos from Popular Video Sites
</p>
</div>



<div class="col-md-12 col-sm-12 col-xs-12 spacer6">
<p class="fm22 fs16 fx15 line180 wt400 black poppins">Now that seems like a good option. You can buy your video from popular sites. BUT do you have any idea what they are charging?... ‘But they charge no less than $180-$348 Annual subscription for vertical video templates in any niche…
</p></div>


<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-6 col-sm-12 col-xs-12 spacer4">
<img src="images/sc7.png"  class="img-responsive center-block">
</div>
<div class="col-md-6 col-sm-12 col-xs-12 spacer4">
<img src="images/sc8.png"  class="img-responsive center-block">
</div></div>

<div class="col-md-12 col-sm-12 col-xs-12 spacer2">

<p class="fm22 fs16 fx15 line180 wt400 black poppins">Way too much right???<br><br>
With our product, you don’t pay anywhere near this…Just a fraction of investment – <br><br>

<b class="red">$11.95 for Personal Use & $13.95 For PLR – Pay Once for Lifetime Use!</b><br>
Vs<br>
<b>$180-$348 or more Annually</b><br><br>
So, which is a better deal?<br> Our’s…1/5th the price of what you pay outside!<br>
Save huge in developmental costs ..& make cool income…<br>
<b>Since more and more businesses are looking for this content, this is the right chance to make money selling them.</b><br>
So, Here we are with the right kind of help….

</p>
</div></div></div>


<div class="section12">
<div class="container ">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 spacer10">
<div class="col-md-7 col-sm-12 col-xs-12 spacer4">
<p class="fm34 fs32 fx15 line150 text-left wt700 y2 spacer6">We present you an excellent opportunity To make crazy profits selling our 5000 Vertical videos …and fill your PayPal accounts with cash!</p>
<p class="fm22 fs32 fx15 line150 text-left wt400 white spacer6">
In a matter of minutes, you can have your vertical videos ready to be sold to hundreds or even thousands of people.<br><br>
Yes! It sounds crazy but you can actually make 5 Or 6 Figures selling videos that are easy to create.
</p>
</div>
<div class="col-md-5 col-sm-12  col-xs-12 spacer4">
<img src="images/o1.png"  class="img-responsive center-block">
</div>
</div>
</div></div></div>




<div class="section20">
<div class="container">


<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12 spacer2">



<div class="col-md-4 col-md-offset-4 col-sm-12 col-xs-12 spacer6">



<img src="images/owner.png" width="260" class="img-responsive center-block">	
<p class="text-center  fm40 fs20 fx18  line140 wt500  spacer2 black">
Dear marketer, <br></p>
</div>




<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<h2 class="fm22 fs20 fx18 line170 black wt400 text-left">
After the incredible success of our previous Firesale offers, we are really excited to present another Supreme, Premium and Royalty-FreeVertical  Video Bundle. <br><br>
Get your hands on this <b>Goldmine of 50004K, 1080p HD Quality Vertical Videos at a price much lower than what expected to be paid for a SINGLE ONE...</b><br><br>
All video templates belong to the Most in Demand Niches, and <b>they are 100% Royalty-Free, means you don't need to worry about Copyright Issues Ever.</b><br><br>
</h2></div>



<div style="clear:both;"></div><br>
</div></div></div></div>


<section class="banner spacer10" style="background-color:#fff !important;">
    <div class="container">
        <div class="row">       
          		   

          <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 spacer2">		
<h2 class="fm100 fs18 fx30 line170 neon text-center poppins wt700 ">
Introducing...</h2></div>  


<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
<img src="images/product.png" width="900" class="img-responsive center-block">



<p class="fm30 fs20 fx15 line160 wt600 black text-center poppins whitebg">
<br><br><br>
Huge Bundle of 5000, 4K, 1080p HD Quality <br>Vertical Video templates in 9 Niches!!</b>
</p>
</div></div></div></section>
			
	
			

<div class="whitesection spacer2">
<div class="container mycontainer">
<div class="row">

<img src="images/arrow.png" class="img-responsive center-block">

<!--<div class="col-md-12 col-sm-12 col-xs-12 spacer4">			
<p class="text-center fm42  fs24 fx15 line140 wt400 black poppins">
<span class="red wt700">The Best Part is –</span> You are Even Getting Full Private<br> Label Rights with this Complete Package!!!
</p>
</div>

<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 spacer4">			
<p class="text-left fm22  fs24 fx15 line140 wt400 black poppins">
That means not only you can use these videos to grow your business, but you can also rebrand them to sell.<br><br>
Our PLR License presents an Incredible Money-Making opportunity selling vertical videos to this wildly hungry niche of buyers and making game-changing income.

</p>
</div>


	<div class="col-md-12 col-sm-12 col-xs-12">
            <img src="images/img.png"   class="center-block img-responsive spacer4">
            </div>-->

<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 spacer4">			
<p class="text-center fm42  fs24 fx15 line140 wt400 black poppins">
Our Templates Are designed In <span class="wt700">Super-Hot, Profitable niches</span> – Take a Look...

</p>
</div>

</div></div></div>






<section class="section12a">
<div class="container">   
<div class="row">
<div class="col-md-4 col-md-offset-4  col-sm-12 col-xs-12" id="demo">
<p class="fm50 fs12 fx10 line160 wt700 black text-center poppins greenheadbg1">		
Fitness </p></div>
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728795562?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div>
</div></div></div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728795625?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728795668?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div></div></div>




<div class="col-md-4 col-md-offset-4  col-sm-12 col-xs-12 spacer6">
<p class="fm50 fs12 fx10 line160 wt700 black text-center poppins greenheadbg1">		
Nature  </p></div>
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728796917?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div>
</div></div></div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728796954?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728797117?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div></div></div>




<div class="col-md-4 col-md-offset-4  col-sm-12 col-xs-12 spacer6">
<p class="fm50 fs12 fx10 line160 wt700 black text-center poppins greenheadbg1">		
Animals  </p></div>
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728797812?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div>
</div></div></div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728797893?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728797940?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div></div></div>
</div></div></section>


<section class="section12a">
<div class="container">   
<div class="row">
<div class="col-md-4 col-md-offset-4  col-sm-12 col-xs-12 spacer6">
<p class="fm50 fs12 fx10 line160 wt700 black text-center poppins greenheadbg1">		
Food  </p></div>
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728798332?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div>
</div></div></div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728798369?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728798420?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div></div></div>



<div class="col-md-4 col-md-offset-4  col-sm-12 col-xs-12 spacer6">
<p class="fm50 fs12 fx10 line160 wt700 black text-center poppins greenheadbg1">		
Travel  </p></div>
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728799724?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div>
</div></div></div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728799821?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728799997?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div></div></div>



<div class="col-md-4 col-md-offset-4  col-sm-12 col-xs-12 spacer6">
<p class="fm50 fs12 fx10 line160 wt700 black text-center poppins greenheadbg1">		
Fireworks  </p></div>
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728801174?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div>
</div></div></div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728801233?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728801350?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div></div></div>
</div></div></section>


<section class="section12a">
<div class="container">   
<div class="row">
<div class="col-md-4 col-md-offset-4  col-sm-12 col-xs-12 spacer6" id="demo">
<p class="fm50 fs12 fx10 line160 wt700 black text-center poppins greenheadbg1">		
Music   </p></div>
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728800649?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div>
</div></div></div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728800714?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728800796?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div></div></div>




<div class="col-md-4 col-md-offset-4  col-sm-12 col-xs-12 spacer6" id="demo">
<p class="fm50 fs12 fx10 line160 wt700 black text-center poppins greenheadbg1">		
Celebration    </p></div>
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728798845?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div>
</div></div></div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728798938?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728798877?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div></div></div>



<div class="col-md-4 col-md-offset-4  col-sm-12 col-xs-12 spacer6">
<p class="fm50 fs12 fx10 line160 wt700 black text-center poppins greenheadbg1">		
Money    </p></div>
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728800248?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div>
</div></div></div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728800317?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="myvideo3A">
	<div class="myvideo3-box">
 <div class="demovideo1">
        <object data="https://player.vimeo.com/video/728800389?h=940b4172dd&autoplay=0&loop=1" width="640" height="1138" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></object></div></div>
</div></div></div></div></div></section>



<div style="clear:both;"></div><br><br><br><br>

<img src="images/img.png" class="img-responsive center-block">
<!--<div class="background3">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm32 fs20 fx14 line170 white poppins text-center wt800">
Types of Videos You can Create To Boost<br> Your Video Marketing Strategy.
</p></div></div></div></div>-->



<section class="section12a">
    <div class="container">
      <div class="row">	
<div class="col-md-12 col-sm-12 col-xs-12">



<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Sales Videos</i></p></div></div>

<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Explainer Videos</i></p></div></div>

<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Comparison Videos</i></p></div></div>
</div>


<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Quote Videos</i></p></div></div>

<div class="col-md-4 col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Top Ten Videos</i></p></div></div>

<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Lyric Videos</i></p></div></div></div>


<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Stats Videos</i></p></div></div>

<div class="col-md-4 col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Animated Stories</i></p></div></div>

<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Special Offer Videos</i></p></div></div>
</div>



<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>YouTube Vlogging Videos</i></p></div></div>

<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Promotional Intros</i></p></div></div>

<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Product Demonstrations</i></p></div></div></div>

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Facebook Ads Videos</i></p></div></div>

<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Call To Action Videos</i></p></div></div>

<div class="col-md-4  col-sm-12 col-xs-12 xsmt5">
<div class="purple popup">
<p class="text-center fm22 fs24 fx15 line150 wt500 white poppins">
<i>Tutorial Videos</i></p></div></div></div>


</div></div></div></section>


<section class="section12a">
<div class="container">   
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm50 fs12 fx10 line160 wt700 red text-center poppins ">		
True High-quality Royalty Free Videos</p></div>

<div class="col-md-12 col-sm-12 col-xs-12  spacer2">
<p class="fm24 fs20 fx14 line190 wt400 black text-left poppins spacer2">
Many video bundles promise you to provide HD videos, but they are only in 480p. <br>
The Vertical video bundle will deliver you true HD quality, 4k, 1080p for every single video you get inside. <br>
With Royalty Free feature, there is no worrying about copyright issues ever. <br>
Selling these would fetch you more income!
</p></div>

<div class="col-md-12 col-sm-12 col-xs-12  spacer6">
<p class="fm50 fs12 fx10 line160 wt700 red text-center poppins ">		
5000 Video Templates </p></div>

<div class="col-md-12 col-sm-12 col-xs-12  spacer2">
<p class="fm24 fs20 fx14 line170 wt400 black text-left poppins spacer2">
Instantly create Stunning vertical videos& Ads for your social feeds from a vast library of 5000 video templates in multiple niches.
</p></div>


<div class="col-md-12 col-sm-12 col-xs-12  spacer6">
<p class="fm50 fs12 fx10 line160 wt700 red text-center poppins ">		
9 Hot Niches To choose from </p></div>

<div class="col-md-12 col-sm-12 col-xs-12  spacer2">
<p class="fm24 fs20 fx14 line170 wt400 black text-left poppins spacer2">
We have covered almost all the in demand and evergreen 9 niches that can be used/sold like hot cakes to brands and businesses.<br><br>
<b>Share Your Videos On Facebook/YouTube/Instagram/TikTok/Snapchat</b><br><br>
Use Vertical videos & Ads on social media platforms for tremendous results – spike up conversions, get more traffic, leads and sales.<br><br>
Just share them and skyrocket your income…

</p></div></div></div></section>


<section class="section7-B">
<div class="container">   
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">			
<p class="text-center fm52 fs24 fx15 line140 wt400 white poppins">
<span class="yellow wt700">The Best Part is –</span><br> Getting Full Private Label Rightswith this Complete Package!!!
</p>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 spacer4">			
<p class="text-center fm27  fs24 fx15 line140 wt400 white poppins">
That means not only you can use these videos to grow your business, but you can also rebrand them to sell & generate multiple income streams

</p>
</div>

</div></div></section>


<div class="whitesection" style="background-color:#fff7f7;">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<p class="fm54 fs32 fx15 line150 text-center wt700  red"><u>Easily Charge $50- $150 per video...</u></p>
</div>

<div class="col-md-12 col-sm-12 col-xs-12 spacer2">
<p class="fm26 fs32 fx15 line150 text-left wt400 black">
Creators are making Hundreds of dollars over and over again selling vertical videos to thousands of businesses who are looking for HQ vertical videos..
</p>


</div>

<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<div class="col-md-6 col-sm-12 col-xs-12">
<img src="images/sc1.png" width="500"  class="img-responsive center-block">
</div>

<div class="col-md-6 col-sm-12 col-xs-12 spacer8">
<img src="images/sc3.png" width="500"  class="img-responsive center-block">
</div></div>


<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-6 col-sm-12 col-xs-12">
<img src="images/sc2.png" width="500"  class="img-responsive center-block">
</div>

<div class="col-md-6 col-sm-12 col-xs-12">
<img src="images/sc4.png" width="500"  class="img-responsive center-block">
</div></div>

<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-6 col-sm-12 col-xs-12">
<img src="images/sc5.png" width="500"  class="img-responsive center-block">
</div>

<div class="col-md-6 col-sm-12 col-xs-12">
<img src="images/sc6.png" width="500"  class="img-responsive center-block">
</div></div>



<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<p class="fm22 fs32 fx15 line150 text-left wt600 black">
You can decide what to charge for 1,10,20,30, 500 - any number of videos….and make limitless income….
</p>

<p class="fm22 fs32 fx15 line150 text-left wt400 black spacer3">
Even a meagre price of $50 per video can make you an income of $500 -$1000 a month.
</p>

<p class="fm22 fs32 fx15 line150 text-left wt600 black spacer3">
Imagine doing it for 5000 videos...$250,000 and more!!!
</p>

<p class="fm22 fs32 fx15 line150 text-left wt400 black spacer3">
This can be your life changing income helping you to live the life of your dreams.
</p>

</div>




</div></div></div>

<div class="background3">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm32 fs20 fx14 line170 white poppins text-center wt800">
This package is For Anyone Looking To <span class="yellow">Make QUICK<br> Profits Selling vertical Videos</span> To Businesses!
</p></div></div></div></div>


<div class="whitesection">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="niche">
<img src="images/l1.png" class="img-responsive center-block">
<p class="fm22 fs20 fx14 line170 black poppins text-center wt600 spacer4">
Local Marketers
</p>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="niche">
<img src="images/l2.png" class="img-responsive center-block" width="250">
<p class="fm22 fs20 fx14 line170 black poppins text-center wt600 spacer4">
Marketing Agencies
</p>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="niche">
<img src="images/l3.png" class="img-responsive center-block" width="230">
<p class="fm22 fs20 fx14 line170 black poppins text-center wt600 spacer4">
Fiverr professionals
</p>
</div>
</div>

</div>

<div class="col-md-12 col-sm-12 col-xs-12 spacer6">
<div class="col-md-4 col-sm-12 col-xs-12">
<div class="niche">
<img src="images/l4.png" class="img-responsive center-block" width="250">
<p class="fm22 fs20 fx14 line170 black poppins text-center wt600 spacer4">
Advertisers
</p>
</div></div>


<div class="col-md-4 col-sm-12 col-xs-12">
<div class="niche">
<img src="images/l5.png" class="img-responsive center-block" width="240">
<p class="fm22 fs20 fx14 line170 black poppins text-center wt600 spacer4">
Social Media Marketers
</p>
</div>
</div>

<div class="col-md-4 col-sm-12 col-xs-12">
<div class="niche">
<img src="images/l6.png" class="img-responsive center-block">
<p class="fm22 fs20 fx14 line170 black poppins text-center wt600 spacer4">
Product creators
</p>
</div>
</div>
</div>


<div class="col-md-12 col-sm-12 col-xs-12 spacer6">
<div class="col-md-4 col-md-offset-2 col-sm-12 col-xs-12">
<div class="niche">
<img src="images/l7.png" class="img-responsive center-block">
<p class="fm22 fs20 fx14 line170 black poppins text-center wt600 spacer4">
Online & Offline Businesses
</p>
</div></div>


<div class="col-md-4 col-sm-12 col-xs-12">
<div class="niche">
<img src="images/l8.png" class="img-responsive center-block">
<p class="fm22 fs20 fx14 line170 black poppins text-center wt600 spacer4">
Ecom Store Owners
</p>
</div>
</div>
</div>

<div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 spacer4">			
<p class="text-center fm34  fs24 fx15 line140 wt600 red poppins">
Literally, ANY BUSINESS–</p>

<p class="text-center fm28  fs24 fx15 line170 wt400 black poppins spacer3">
Vertical Videos Can Ramp up Your sales & traffic on<br> Facebook, IGTV, TikTok, Snapchat & YouTube!


</p>
</div>

</div></div></div>

<div class="background3">
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm32 fs20 fx14 line180 white poppins text-center wt800 spacer1">
SOME of The MANY Ways Vertical Video Firesale<br> Will <span class="yellow">Boost Your Income & Business...</span>
</p></div></div></div></div>


<div class="section17a">
<div class="container mycontainer">
<div class="row">



<div class="col-md-6 col-sm-12 col-xs-12">
<ul class="cuttingedge-listing text-left line170 wt400 black fm21 fs15 fx15">				 				 
<li>Rebrand them to sell them to <b>others for insane profits</b>
<li>Generate an <b>additional <!--passive--> income stream</b> with your marketing on YouTube.
<li>Use them as <b>promotional videos/Video Ads on Facebook and drive tons of traffic.</b>
<li>Create an <b>engaging Instagram video and attract more clients.</b>
<li>Use them for <b>video Ads in various projects</b> of your own or your client's
<li>Perform video marketing on <b>Snapchat to get free viral traffic</b>
<li>Bundle it with your other <b>products and sell a bigger package</b> for even bigger profits
<li>Create a demo website and charge <b>monthly subscription amount to access these videos</b>
</li></ul>


</div>
</div></div></div>

<div class="section12a">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12  col-sm-offset-0 col-xs-offset-0 padding0 mt1">

<div class="col-md-12 col-sm-12 col-xs-12 spacer1">
<p class="fm32 fs20 fx14 line170 black poppins text-center wt500">
And So Much More...<br>
The potential is unlimited with this bundle…
</p>
</div>

<div style="clear:both;"></div><br><br>

<div class="col-md-4 col-md-offset-2 col-sm-12 col-xs-12 black">

<div class="tablebox1">



<div class="myfeatures fm22 fs20 fx16 wt700 text-center lh130">

<img src="images/favicon.png"  class="img-responsive center-block spacer2" width="80">


<div class="fm28 fs24 fx20 text-center wt600 black spacer6"> Buy <br>Vertical Video Firesale</div>


<div class="fm24 fs24 fx20 text-center wt600 white basicbox"> Personal Use</div>

</div>

<div style="float:left; width: 100%;">



</div>
<div style="clear:both;"></div><br><br>
<div class="myfeature last fm22 fs20 fx16  wt700 text-center lh130">


<a href="https://warriorplus.com/o2/buy/w0sf4d/vmcbt2/dlw61s"><img src="https://warriorplus.com/o2/btn/cn100011111/w0sf4d/vmcbt2/314973"border="0" 
class="img-responsive center-block"></a>



<img src="images/buycart1.png"  class="img-responsive center-block spacer2">
<div style="clear:both;"></div><br><br>

</div>
</div>
</div>



<div class="col-md-4 col-md-offset-0 col-sm-12 col-xs-12 black">

<div class="tablebox1">

<div class="myfeatures1 fm22 fs20 fx16 wt700 text-center lh130">
<img src="images/best-deal.png" class="img-responsive mb-20 tags cta-box">
<img src="images/favicon.png"  class="img-responsive center-block spacer2" width="80">


<div class="fm28 fs24 fx20 text-center wt600 white spacer2"> Buy <br>Vertical Video Firesale</div>



<div class="fm24 fs24 fx20 text-center wt600 white basicbox"> Private labal Right</div>

</div>

<div style="float:left; width: 100%;">



</div>
<div style="clear:both;"></div><br><br>
<div class="myfeature last fm22 fs20 fx16  wt700 text-center lh130">


<a href="https://warriorplus.com/o2/buy/w0sf4d/vmcbt2/d4jwy6"><img src="https://warriorplus.com/o2/btn/cn100011111/w0sf4d/vmcbt2/314971" border="0" 
class="img-responsive center-block"></a>

<img src="images/buycart1.png"  class="img-responsive center-block spacer2">
<div style="clear:both;"></div><br><br>

</div>
</div>
</div>
</div>



</div></div>
<div style="clear:both;"></div><br><br>
</div>







<div class="section7-B">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="col-md-8 col-sm-8 col-xs-12">
<h5 class="fm36 fs22 fx16 line130 wt700 text-left yellow">You Are Completely At Zero-Risk With Our Product.


</h5>
<p class="fm22 fs22 fx14 line170 wt400 xsst3 white spacer4">
Our Awesome Vertical Video Firesale Comes With A Special 30 Day 100% Money Back Policy!
<br><br>
If At Any Time Within 30 Days Of Purchasing, You Are Not 100% Satisfied, You May Return It To Us For A Refund. No Questions Asked. Your Satisfaction Is Our Primary Concern.
</p>
</div>


<div class="col-md-4 col-sm-4 col-xs-12">
<img src="images/money.png" class="img-responsive center-block xsst3"></div>
</div>
</div>
</div>
</div>




<section class="section12a">
    <div class="container">
        <div class="row">
		
<div class="col-md-12 col-sm-12 col-xs-12">
<p class="fm40 fs20 fx14 line170 red poppins text-center wt800 spacer1">
So What are you Waiting For ?... <br>Get Instant Access Right NOW!</span>
</p></div>		
		
            
<div class="col-md-12 col-sm-12 col-xs-12 spacer4">
<p class="fm32 fs20 fx14 line170 wt600 black text-left poppins spacer4">
Ditch your steady paycheck - Sell This HQ vertical Video Bundle& Pocket handsome income!</p>

<p class="fm22 fs20 fx14 line170 wt400 black text-left poppins spacer4">
This Captivating, Royalty Free, 5000+, HD Quality Video Package is Perfect-Fit for anything you choose them for….</p>

<p class="fm22 fs20 fx14 line170 wt400 black text-left poppins spacer2">
Turn your social media feeds & Ads into a powerhouse of subscribers, leads, sales...& quadruple your profits.
</p>

<p class="fm22 fs20 fx14 line170 wt400 black text-left poppins spacer2">
It’s the best alternative to 'money-sucking' video sites or saving your hundreds of dollars and precious working hours.
</p>

<p class="fm22 fs20 fx14 line170 wt400 black text-left poppins spacer2">
Not to mention, we are providing this whole package with Private Label Rights that too at this <br><b>ONE-TIME RIDICULOUSLY LOW PRICE.</b> <br><br>
<b>So hurry!</b>
</p>

<p class="fm26 fs20 fx14 line170 wt600 black text-center poppins spacer2">
Grab this insane offer at the dirt-cheap price now. 
</p>

</div>


         

<div class="col-md-12 col-sm-12 col-xs-12  col-sm-offset-0 col-xs-offset-0 padding0 mt1 spacer4" id="buyNow">

<div class="col-md-4 col-md-offset-2 col-sm-12 col-xs-12 black">

<div class="tablebox1">



<div class="myfeatures fm22 fs20 fx16 wt700 text-center lh130">

<img src="images/favicon.png"  class="img-responsive center-block spacer2" width="80">


<div class="fm28 fs24 fx20 text-center wt600 black spacer6"> Buy <br>Vertical Video Firesale</div>


<div class="fm24 fs24 fx20 text-center wt600 white basicbox"> Personal Use</div>

</div>

<div style="float:left; width: 100%;">



</div>
<div style="clear:both;"></div><br><br>
<div class="myfeature last fm22 fs20 fx16  wt700 text-center lh130">


<a href="https://warriorplus.com/o2/buy/w0sf4d/vmcbt2/dlw61s"><img src="https://warriorplus.com/o2/btn/cn100011111/w0sf4d/vmcbt2/314973"border="0" 
class="img-responsive center-block"></a>



<img src="images/buycart1.png"  class="img-responsive center-block spacer2">
<div style="clear:both;"></div><br><br>

</div>
</div>
</div>



<div class="col-md-4 col-md-offset-0 col-sm-12 col-xs-12 black">

<div class="tablebox1">

<div class="myfeatures1 fm22 fs20 fx16 wt700 text-center lh130">
<img src="images/best-deal.png" class="img-responsive mb-20 tags cta-box">
<img src="images/favicon.png"  class="img-responsive center-block spacer2" width="80">


<div class="fm28 fs24 fx20 text-center wt600 white spacer2"> Buy <br>Vertical Video Firesale</div>



<div class="fm24 fs24 fx20 text-center wt600 white basicbox"> Private labal Right</div>

</div>

<div style="float:left; width: 100%;">



</div>
<div style="clear:both;"></div><br><br>
<div class="myfeature last fm22 fs20 fx16  wt700 text-center lh130">


<a href="https://warriorplus.com/o2/buy/w0sf4d/vmcbt2/d4jwy6"><img src="https://warriorplus.com/o2/btn/cn100011111/w0sf4d/vmcbt2/314971" border="0" 
class="img-responsive center-block"></a>

<img src="images/buycart1.png"  class="img-responsive center-block spacer2">
<div style="clear:both;"></div><br><br>

</div>
</div>
</div>
</div>



            

<div class="col-xs-12 spacer6">
<p class="fm26 fs20 fx18 line150 wt400">

<span class="wt600 black">To Your Happiness & Prosperity,</span>

                </p>
            </div>

<div class="col-md-6 col-md-offset-3 col-sm-6 col-xs-12 xsst2">
<img src="images/owner.png" width="300" class="img-responsive center-block">
</div>
</div>
</div>
</section>






<div class="lightblock">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-6 col-xs-12">
<img src="images/logo.png" width="300" class="img-responsive center-block">
</div>

<div class="col-md-8 col-sm-12 col-xs-12 text-center whitetext spacer3">

<a href="http://firelaunchers.com/members-download/terms-conditions/" target="_blank">Terms & Conditions</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://firelaunchers.com/members-download/privacy-policy/" target="_blank">Privacy Policy</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://firelaunchers.com/members-download/anti-spam/" target="_blank">Anti Spam</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://firelaunchers.com/members-download/terms-conditions/" target="_blank">DMCA</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://firelaunchers.com/members-download/earning-disclaimer/" target="_blank">Disclaimer</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="https://firelaunchers.freshdesk.com/support/home" target="_blank">Support</a>
</div>

</div>
</div>
</div>


<div class="stickybar hidden-xs">

        

<div class="row">



       <div class="col-md-5 col-sm-5 col-xs-12">

		<div class="text-center white fl24 fm24 fs22 fx20 wt500"><span class="fl26 fm24 fs22 fx20 line150 wt700 yellow">Hurry...</span> Special Price is going <br>to Expire Soon...</div>
        </div>

		
		
		

		<div class="col-md-4 col-sm-3 col-xs-12">

          	
           <div class="white" id="countdown2" data-wow-delay=".3s" data-date="<?php echo $time; ?>"></div>
		   
		   </div>
		   
		  

        <div class="col-md-3 col-sm-4 col-xs-12 text-center spcaer4">

            <a href="#buyNow" class="stickybutton f22 fm18 fs18 fx16 wt600 spacer1"> Get Instant Access</a>

        </div>

    </div>

    </div>


<div class="stickybar visible-xs">

        

<div class="row">



       <div class="col-md-4 col-sm-5 col-xs-12">

<div class="text-center white fl24 fm24 fs22 fx20 wt500"><span class="fl26 fm24 fs22 fx20 line150 wt700 yellow">Hurry...</span> Special Price is going <br>to Expire Soon...</div>
        </div>

		
		
		

		<div class="col-md-4 col-sm-3 col-xs-12">

          	
           <div class="white" id="countdown2" data-wow-delay=".3s" data-date="<?php echo $time; ?>"></div>
		   
		   </div>
		   
		  

        <div class="col-md-4 col-sm-4 col-xs-12 text-center spcaer4">

            <a href="#buyNow" class="stickybutton f22 fm18 fs18 fx16 wt600 spacer1"> Get Instant Access</a>

        </div>

    </div>

    </div>

<div style="height:100px" class="hidden-xs"></div>
<div style="height:150px" class="visible-xs"></div>

<!-- Load Ouibounce from CDN -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.11/ouibounce.min.js"></script>



<!-- Ouibounce Modal -->
<div id="exitmodal" style="z-index:99999;">
<div class="underlay"></div>
<div class="modal popupbg">


<div class="modal-body">
<button type="button" class="close custom-close" onclick="document.getElementById('exitmodal').style.display = 'none';">&times;</button>
<div class="row spacer0">

<div class="col-md-12 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 xsst2">
<h2 class=" text-center fm36 fs36 fx26 line130 wt800 montser">
<span class="yellow">= = Before You Leave = =</span>
</h2>
</div> 
<div class="col-md-6 col-sm-6 col-xs-12 xsst4">
<img src="images/popupimg.png" width="200" class="center-block img-responsive" />
</div> 

<div class="col-md-6 col-sm-6 col-xs-12 xsst4">
<h2 class="fm36 fs36 fx25 neon"><strong>Grab this Animated Graphics Special pngt</strong></h2>
<p class="fm24 fs24 fx20 line150 xsst4 white">
Use these videos as you want</p>
</div>


<div class="formbg col-xs-12 col-xs-offset-0 xsst4">
<form action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">    
    <!-- Email field (required) -->
    <div class="col-md-7 col-sm-7 col-xs-12">
        <input type="text" name="email" placeholder="Email"/>
        <i class="glyicon-email glyphicon glyphicon-envelope mailicon"></i>
    </div>
    <!-- Campaign token -->
    <!-- Get the token at: https://app.getresponse.com/campaign_list.html -->
    <input type="hidden" name="campaign_token" value="4zxeB" />
    <!-- Thank you page (optional) -->
    <input type="hidden" name="thankyou_url" value="http://firelaunchers.com/offers/stock-video-plr-firesale-special-free-pngt/"/>
    <!-- Forward form data to your page (optional) -->
    <input type="hidden" name="forward_data" value="" />
    <!-- Subscriber button -->
    <div class="col-md-5 col-sm-5 col-xs-12 white text-center">
    <input type="submit" class="text-center wt600 fx18" value="Download Free pngt"/>
    </div>
</form>
</div>



  


</div><!--End Inner Body-->
</div><!--End Form Body-->


</div>
</div>


<!--
<script>
var _ouibounce = ouibounce(document.getElementById('exitmodal'),{
aggressive: true, //Making this true makes ouibounce not to obey "once per visitor" rule
});
</script>-->


<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script> 

<script src="js/jquery.countdown.min.js"></script>
    <script type="text/javascript">
    if ($('#countdown,#countdown1,#countdown2,#countdown3,#countdown4,#countdown5,#countdown6,#countdown7,#countdown8,#countdown9').length) { 
          $('#countdown,#countdown1,#countdown2,#countdown3,#countdown4,#countdown5,#countdown6,#countdown7,#countdown8,#countdown9').countdown({
            render: function(data) {
              if (data.years >= 1) {
                var $days = (data.years*365)+data.days;
              } else {
                var $days = data.days;
              }
              $(this.el).html(
                '<div class="day">' + this.leadingZeros($days) + ' <span>Days</span></div>'+
                '<div class="hour">' + this.leadingZeros(data.hours, 2) + ' <span>Hours</span></div>'+
                '<div class="min">' + this.leadingZeros(data.min, 2) + ' <span>Min</span></div>'+
                '<div class="sec">' + this.leadingZeros(data.sec, 2) + ' <span>Sec</span></div>'
              );
            }
          });
        }

    </script>
	
<script>
const accordion = document.getElementsByClassName
('contentBx');

for (i=0; i<accordion.length; i++){
accordion[i].addEventListener('click', function(){
	this.classList.toggle('active')
})
}
</script>	
	
	
	
	
<script  async src="js/scripts.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>	
	

<script>
$(function() {  

    jQuery.scrollSpeed(200, 1000);

});
</script>
</body>
</html>