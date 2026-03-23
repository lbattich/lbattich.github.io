<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link href="style.css" rel="stylesheet" type="text/css">
  <title>E-Books - Lucas Battich</title>
</head>
<body>
	<div class="wrap">
		<p><span class="title">E-Books</span></p>
		<p class="white">by Lucas Battich</p>
		<div class="bubble">
          <?php
            $fileList = glob('*.pdf');
            foreach($fileList as $filename){
                if(is_file($filename)){
                  $ref = str_replace(" ", "%20", $filename);
                  $ref = str_replace("#", "%23", $ref);
                  echo "<p><a href='$ref'>" . $filename . "</a></p>";
                }   
            }
          ?>

    	</div>
       
	</div>
</body>
</html>