<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ball = 'green';
    
    if ($ball == 'green') {
        $redbox = $ball;
    } elseif ($ball == 'yellow') {
        $yellowbox = $ball;
    } elseif ($ball == 'blue') {
        $bluebox = $ball;
    } elseif ($ball == 'green') {
        $greenbox = $ball;
    } elseif ($ball == 'purple') {
        $purplebox = $ball;
    } else {
        $colorlessbox = $ball;
    }

    echo "red box : $redbox <br>\n";
    echo "yellow box : $yellowbox <br>\n";
    echo "blue box : $bluebox <br>\n";
    echo "green box : $greenbox <br>\n";
    echo "purple box : $purplebox <br>\n";
    echo "colorless box : $colorlessbox <br>\n";
    ?> 
</body>
</html>