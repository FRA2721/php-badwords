<!-- php block code -->
<?php
// original paragraph
$paragraph = $_GET["text"];
// original paragraph length
$paragraphLength = strlen($paragraph);

// formatted paragraph 
$formattedParagraph = str_replace($_GET["bad-word"], "(***)", $paragraph);
// formatted paragraph length
$formattedParagraphLength = strlen($formattedParagraph);
?>
<!-- /php block code -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- /css -->

    <!-- title -->
    <title>PHP Badwords Response</title>
    <!-- /title -->

</head>

<body>

    <!-- original paragraph section -->
    <h2>Original paragraph:</h2>
    <p><?php echo $paragraph?></p>

    <br>

    <h3>Length for original paragraph:</h3>
    <p><?php echo $paragraphLength?></p>
    <!-- /original paragraph section -->

    <!-- formatted paragraph section -->
    <h2>Formatted paragraph:</h2>
    <p><?php echo $formattedParagraph?></p>

    <br>

    <h3>Length for formatted paragraph:</h3>
    <p><?php echo $formattedParagraphLength?></p>
    <!-- /formatted paragraph section -->

    <a href="index.php">HOME</a> 

</body>
</html>