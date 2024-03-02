<?php
    function bubbleSort1(&$array)
    {
    $j = sizeof($array);
    for($i = 0; $i < $j; $i++)
        {for ($k = 0; $k < $j - $i - 1; $k++)
            {if ($array[$k] < $array[$k+1])
                {$l = $array[$k];
                $array[$k] = $array[$k+1];
                $array[$k+1] = $l;
                }
            }
        }
    }

    $array = array(23, 32, 54, 112);
    $len = sizeof($array);
    bubbleSort1($array);
    echo "Sorted array"."<br> <br>"."[[23, 32, 54, 112]"."<br> <br>"."[24, 61, 12, 87]"."<br> <br>"."[49, 60, 90, 75]]"."<br> <br>"." \n: ";
    for ($i = 0; $i < $len; $i++)
    echo $array[$i]." ";

    $array = array(24, 61, 12, 87);
    $len = sizeof($array);
    bubbleSort1($array);
    echo "<br> <br>"."  \n  ";
    for ($i = 0; $i < $len; $i++)
    echo $array[$i]." ";

    $array = array(49, 60, 90, 75);
    $len = sizeof($array);
    bubbleSort1($array);
    echo "<br> <br>"."  \n  ";
    for ($i = 0; $i < $len; $i++)
    echo $array[$i]." ";

?>