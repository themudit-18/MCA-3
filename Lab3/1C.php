<?php
$n = 1;
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n."\t";
        $n = $n + 1;
    }
    echo "<br/>";
}
?>