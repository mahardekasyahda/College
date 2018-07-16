<div class="row">
	<div  class="col-lg-4 col-md-4 col-sm-6 hidden-xs ads">
		<?php 
		$ad1 = grab_ads(1);
		echo $ad1[0]['value'];
		?>
	</div>
	<div class="col-lg-4 col-md-4 ads col-sm-6 hidden-xs">
	<?php 
		$ad2 = grab_ads(2);
		echo $ad2[0]['value'];
		?>
	</div>
	<div class="col-lg-4 col-md-4 ads col-sm-12 hidden-xs">
	<?php 
		$ad3 = grab_ads(3);
		echo $ad3[0]['value'];
		?>
	</div>
</div>	
