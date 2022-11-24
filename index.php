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
    <title>PHP Badwords Request</title>
    <!-- /title -->

</head>

<body>

    <h1>Bad Words Replacer</h1>

    <!-- container -->
    <div class="container">
        <form action="response.php" method="GET">

            <!-- use input -->
            <label for="text">
                <input type="text" name="text" id="text" placeholder="Type a text...">
            </label>

            <label for="bad-word">
                <input type="text" name="bad-word" id="bad-word" placeholder="Type a word that you want to censor:">
            </label>
            <!-- /user input -->

            <!-- send user data -->
            <button type="check">RESPONSE</button>
            <!-- /send user data -->
            
        </form>
    </div>
    <!-- /container -->

</body>

</html>