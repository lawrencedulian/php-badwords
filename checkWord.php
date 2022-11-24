<?php
$word = $_GET["word"];
$paragraph = $_GET["paragraph"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <p> <?php echo $paragraph ?> </p>
        <p> <?php echo "The Lenght of this paragraph is: " . strlen($paragraph) ?></p>
    </div>
   
  
</body>
</html>
