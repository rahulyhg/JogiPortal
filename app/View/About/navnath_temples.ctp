<?php
echo $this->element('header');
echo $this->element('slider');
?>
<div class="mainContent">
	<div class="container">
		<div class="row">
			<div class="span9">
				<section class='sectionInfo infoBlock aboutus'>
					<h4>Navnath Temple</h4>
					<p>Navnath are nine great saints who spread Navnath Sampradaya, initiated by Lord Dattatreya, in the world. These nine saints are actually nine super-super human beings who with their honesty, selflessness, austerity, devotion for their teacher, Lord Dattatreya, and the mantra power defeated the deities like Lord Shiva, Lord Vishnu, Hanuman, Virbhadra, Indra (King of heaven), Goddess Chamunda, Vetal (King of ghosts), ashtabhairava, and others according to the book “Navnath Bhaktisar.” They had a weapon called “Vatakarshan Astra” which was invincible even for Gods.</p>
					<p>The Navnath Sampraday believes Rishi Dattatreya, an incarnation of the Hindu trinity Brahma, Vishnu and Shiva to be its first teacher. The nine teachers, collectively known as Navnaths, are considered representative of great teachers in this tradition or parampara.</p>
					<p>Name of Navnath are as follows.</br></br>
					1. Matsyendranath or Macchchendranath.<br>
					2. Gorakhnath or Gorakshnath.<br>
					3. Jalandernath or Jan Peer.<br>
					4. Kanifnath.<br>
					5. Gahininath also known as Gaibi Peer.<br>
					6. Nagesh Nath.<br>
					7. Charpatnath.<br>
					8. Bhartarinath.<br>
					9. Revananath.</p>
				</section>
				<section class='sectionInfo infoBlock'>						
					<div id="map"></div>
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
    echo $this->element('footer');
?>

<script type="text/javascript">
$(document).ready(function(e){	
	/// Function use to initialize google map
	googleInit = {
		init: function(ele,places){	
			var mapCanvas = ele;
			var mapOptions = {				
			    center: new google.maps.LatLng(27.7065562, 85.3103875),
			    zoom: 5,
			    mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			map = new google.maps.Map(mapCanvas,mapOptions);		   
			this.testMarker(places);
		},  
		// Function for adding a marker to the page.
		addMarker : function(location) {						
			new google.maps.Marker({
			    position: location,
			    map: map
			});
		},
		// Testing the addMarker function
		testMarker : function(places) {
			for(i=0;i<places.length;i++)	{
				console.log("testMarker"+places[i])
		    	CentralPark = new google.maps.LatLng(places[i].latitude, places[i].longitude);
		    	this.addMarker(CentralPark);
			}
		}	
	}

	var ele = document.getElementById('map');
	var placeArray  = [		
			{
				"latitude": 27.7065562,
				"longitude" : 85.3103875,
				"name": "matsyendranath" 
			},
		
			{
				"latitude": 26.7745026,
				"longitude" : 83.356899,
				"name": "Gorakhnath"  
			},	 
			{
				"latitude": 18.4141977,
				"longitude": 73.9524223,
				"name": "kanifnath"
			},
			{
				"latitude": 22.3364461,
				"longitude" : 69.0867779,
				"name": "NageshNath" 
			},
			{
				"latitude": 22.3364461,
				"longitude" : 69.0867779,
				"name": "NageshNath" 
			}
	];	
    googleInit.init(ele,placeArray);
});
</script>