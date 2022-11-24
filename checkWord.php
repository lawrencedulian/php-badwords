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
   
    <div>
        <h2>Censured Word </h2>
        <p> <?php $bad_word = str_replace($word, "***", $paragraph) ?></p>
        <p> <?php echo $bad_word ?> </p>
        <p> <?php echo "The Lenght of this paragraph is: " . strlen($bad_word) ?></p>
    </div>
</body>
</html>
