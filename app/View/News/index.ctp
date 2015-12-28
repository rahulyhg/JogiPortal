
<?php
echo $this->element('header');
echo $this->element('slider');
?>

<div class="mainContent">
		<div class="container">
			<div class="row">
				<div class="span9">
					
					<section class='sectionInfo homeNews'>
						<h4>Latest News / Events</h4>
						<ul>
							<li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. 
    Sed arcu. Cras consequat.
							<a href="#">download PDF</a></li>
    						<li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu 
   erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
   							<li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique 
    cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>

						</ul>
					</section>
				</div>
				<div class="span3">
					<div class="donateBox txtCenter">
						<a href='donate.html'>
							<img src="images/advt-banner1.jpg" />
						</a>
					</div>
					<div class="socialShareBox">
						<p><b>Like us</b></p>
							<a href="#"><i class="fa fa-facebook-official"></i></a>
							<a href="#"><i class="fa fa-twitter-square"></i></a>
					</div>
					<div class="advtWrapper">
						<a href="#">
							<img src="images/advertising.jpg" />
						</a>
					</div>
					<div class="advtWrapper">
						<img src="images/advt.jpg" />
					</div>
					<div class="advtWrapper">
						<img src="images/advt.jpg" />
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
	echo $this->element('ourSupporter'); 
	echo $this->element('footer');
?>