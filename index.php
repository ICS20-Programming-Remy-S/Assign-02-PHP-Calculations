<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Remy Skelton">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Surface area and volue of a tetrahedron</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Area of a trapezoid</h1>";
			echo "<h3>Please enter your trapezoid information</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="aEdge">A Edge of the tetrahedron:</label>
        <input type="number" id="aEdge" placeholder="A Edge side in cm" step=".01" name="aEdge"><br><br>
        <input type="submit" value="calculate">
		</form>

			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The Surface area of your tetrahedron is" + $$surfaceArea.tofixed(2) + (cm<sup>2</sup>)
        The volume of your tetrahedron is" + $$volume.tofixed(2) + (cm<sup>3</sup>)
	    </iframe>
        <h3>The tetrahedron is an interesting shape that has been used in many different ways. But the most famous way is how it is used in one of the seven wonders of the world. The wonder of the world that we can see it used in is the great pyramid of Giza, and the pyramid is still admired by all.</h3>
    <h1>
    <img src="./images/Tetrahedron.svg" width="300" height="300">
    </h1>
	</body>
</html>