<?php
  
	// get the three messurements from the textfields
	$aEdge = $_POST['aEdge'];

	// calculate the pay
  $area = (($b1Side + $b2Side) * $height) / 2;
?>
<?php echo "<h3>Results:</h3>
  The area of your trapezoid is " . round($area, 2) . "cm<sup>2</sup>."
?>