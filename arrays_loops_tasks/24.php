<?php
    /* Вам нужно разработать программу, которая считала бы количество вхождений какой нибуть выбранной
    вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза */
    $str = "1333215564300875";
    $key = 0;
    $num = 1;
    for ($i = 0; $i <strlen($str) ; $i++) {
        if ($str[$i]==$num) {
            $key++;
        }
    }
    echo $key;
?>