<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $scramble_arr = [5,3,1,4,2];

        for($x = 0; $x < count($scramble_arr); $x++) {
            for($y = 0; $y < count($scramble_arr); $y++) {
                $numx = 0;
                if($scramble_arr[$x] < $scramble_arr[$y]) {
                    $numx = $scramble_arr[$x];
                    $scramble_arr[$x] = $scramble_arr[$y];
                    $scramble_arr[$y] = $numx;
                }
            }
        }
        echo '<pre>';var_dump($scramble_arr);echo '</pre>';
        /* added a comment */
    ?>
</body>
</html>
