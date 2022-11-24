<!-- php block code -->
<?php
// get requests
$paragraph = $_GET["text"];

// input request length
$paragraphLength = strlen($paragraph);
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

    <a href="index.php">HOME</a> 

</body>
</html>