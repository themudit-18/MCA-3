<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function fact($n){
        if ($n<=1) {
            return 1;
        }
        else{
            return $n * fact($n-1);
        }
    }

    $n = 5;
    $result = fact($n);
    echo "factorial of $n = $result";
    ?>
</body>
</html>