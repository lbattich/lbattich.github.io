<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link href="../babel.css" rel="stylesheet" type="text/css">
  <title>Library of Babel Volume Generator - Lucas Battich</title>
</head>
<body>
	<div class="wrap">
		<p><span class="title">Library of Babel Volume Archive</span></p>
		<p class="white">by Lucas Battich</p>
		<div class="bubble">
          <?php
          $dir = ".";
            $pattern = '/\.pdf$/';

            $directory=opendir(".");
            
            while ($name = readdir($directory)) {
                if (! preg_match($pattern,$name)) continue;
                $files[filemtime($name)] = $name;
            }
            closedir($directory);
                   
            $indexCount=count($files);
            krsort($files);
            foreach($files as $timekey => $file) {
                $ref = str_replace(" ","%20",$file);
                $ref = str_replace("#","%23",$ref);
                echo "<p><a href='$ref'>" . $file . "</a><br>Created on: " . gmdate("l jS \of F Y G:i:s \G\M\T", $timekey) . "</p>";
            }
          ?>

    	</div>
        <br>
        <button type="button" onclick="window.location.href='../'"><i>Go back to the Volume Generator</i></button><br>
        <br>
        <p class="little white">Lucas Battich 2015</p>
	</div>
</body>
</html>