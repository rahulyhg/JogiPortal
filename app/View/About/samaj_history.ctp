
<?php
echo $this->element('header');
echo $this->element('slider');
?>

<div class="mainContent">
		<div class="container">
			<div class="row">
				<div class="span9">
					<section class='sectionInfo infoBlock aboutus'>						
						<p>he Jogi are a Hindu community, found in North India and Sindh, Pakistan, with smaller numbers in the southern Indian states of Maharashtra, Karnataka, Andhra Pradesh, Tamil Nadu, Himachal Pradesh and Kerala.

Jogi is a colloquial term for the "yogi", which refers to the people who practiced Yoga as part of their daily rituals. Over the time, this led to the formation of a community, and subsequently was formed into a caste.</p>	

					</section>

					<section class='sectionInfo infoBlock aboutus'>
						<h4>History & Origin</h4>
						<p>The Jogi are followers of yoga and worshippers of the Hindu god Shiva.As followers of the yoga, they traditionally wear saffron-colored clothing. The community once comprised mendicants only, but now are outnumbered by those who have taken to cultivation. They and their descendents form a caste with two sub-groups, the Kanphata and Augur. In North India, they speak Hindi and its various dialects.</p><p>

The term Jogi now consists of three distinct classes of persons. One is purely religious mendicants of the various Jogi orders, the second includes various people who live by fortune telling, practising exorcisms and divination. And finally, there are a number of endogamous castes.</p>	

					</section>
					

				</div>
				<div class="span3">
                <div class="donateBox txtCenter">
                        <a href='donate.html'>
                            <img src="<?php echo $this->webroot; ?>images/advt-banner1.jpg" />
                        </a>
                    </div>
                    <div class="socialShareBox">
                        <p><b>Like us</b></p>
                            <a href="#"><i class="fa fa-facebook-official"></i></a>
                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                    </div>
                    <div class="advtWrapper">
                        <a href="#">
                            <img src="<?php echo $this->webroot; ?>images/advertising.jpg" />
                        </a>
                    </div>
                    <div class="advtWrapper">
                        <img src="<?php echo $this->webroot; ?>images/advt.jpg" />
                    </div>
                    <div class="advtWrapper">
                        <img src="<?php echo $this->webroot; ?>images/advt.jpg" />
                    </div>
            </div>
			</div>
		</div>
	</div>

	<?php 
	echo $this->element('ourSupporter');
	echo $this->element('footer');
	?>