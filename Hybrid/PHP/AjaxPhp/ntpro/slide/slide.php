
		
		
		<link rel="stylesheet" href="unslider.css">
		
		<meta name="viewport" content="width=device-width">

	
		<div class="banner">
			<ul>
				<li style="background-image: url('img/68.jpg');">
					<div class="caption">
						<h3>On Demand Routine Maintenance</h3>						
						<a class="btn" href="products.html">Read more</a>
					</div>
				</li>
				
				<li style="background-image: url('img/sho2p.jpg');">
					<div class="caption">
						<h3>Onsite support and online support</h3>
						<a class="btn" href="products.html">Read more</a>
					</div>	
				</li>
				
				<li style="background-image: url('img/shop3.jpg');">
					<div class="caption">
						<h3>On Demand Routine Maintenance</h3>
						<a class="btn" href="products.html">Read more</a>
					</div>	
				</li>
			</ul>
		</div>


		<script src='jquery.js'></script>			
		<script src="unslider.min.js"></script>
		<script>
			if(window.chrome) {
				$('.banner li').css('background-size', '100% 100%');
			}
			
			$('.banner').unslider({
				fluid: true,
				dots: true,
				speed: 500
			});
		</script>
	