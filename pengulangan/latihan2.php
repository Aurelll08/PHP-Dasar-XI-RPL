<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>pengulangan 2</title>
</head>
<body>
     <h1>pengulangan</h1>
     <h2>for</h2>
     <?php 
        for ($i = 1; $i <= 5; $i++) { 
        	echo "halo unaa <br>";
        }

      ?>

      <h2>while</h2>
      <?php 
         $i = 6;
         while ($i <= 5) {
         	echo "haloo unaa <br>";
         	$i++;
         }
       ?>

       <h2>do while</h2>
       <?php 
       	$i = 6;
       	do {
       		echo "heloo unaa <br>";
       		$i++;
       	} while ($i <= 5);
        ?>
</body>
</html>