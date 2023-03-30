<?php
  
	// get the three messurements from the textfields
	$aEdge = $_POST['aEdge'];

	// calculate the pay
  $surfaceArea = sqrt(3) * pow($aEdge, 2);
  $volume = pow($aEdge,3) / 6 * sqrt(2);
?>
<?php echo "<h3>Results:</h3>
  The surface area of your tetrahedron is " . round($surfaceArea, 2) . "cm<sup>2</sup>" .
  "<br>The volume of your tetrahedron is " . round($volume, 2) . "cm<sup>3</sup>."
?>