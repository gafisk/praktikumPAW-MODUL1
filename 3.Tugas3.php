<?php
$a = "Galih";
$b = "Restu";
function localVar()
{
    $x = 5;
    echo "Local Variable: $x <br>";
}

function globalVar()
{
    global $a, $b;
    $b = $a . " " . $b;
}
localVar();
echo "Local Variable: $x";
echo "Eror karena di akses di luar func <br>";

globalVar();
echo "<br> Global Variable : $b";