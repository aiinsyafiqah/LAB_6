<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>

<body>
    <?php function calculateArea($length, $width){
        return $length * $width;
    }

    $length = 8;
    $width = 4; 

    $area = calculateArea($width, $length);

    echo "<strong> The area of a rectangle with width of $width and length of $length is $area</strong>"
?>

</body>