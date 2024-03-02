<?php
    $paragraf1 = "Hello, my name is Eleanor. I am 13 years old. Everyone has a family and I have also. I love my family very much. I live with my family. Today I will share something about my family. There are 4 people in total in our family. My parents, my sister, and me. We are a very small family.";
    $paragraf2 = " My father is an engineer and my mother is a doctor, but after their work, they spend so much time with us. They both love us a lot. They work really hard to make our future better. It is a very happy family. If we face any bad time, my parents handle it with care.";

    /* p0203 opsi a */
    $story = $paragraf1 . $paragraf2;
    echo $story, "<br> <br>";

    /* p0203 opsi b */
    $rep1 = str_replace("13", "thirteen", $story);
    $rep2 = str_replace("4", "four", $rep1);
    echo $rep2, "<br> <br>";

    /* p0203 opsi c */
    echo "Jumlah karakter yang ada dalam paragraf di atas sebelum di replace adalah " . strlen($story) . "<br> <br>";
    echo "Jumlah karakter yang ada dalam paragraf di atas setelah di replace adalah " . strlen($rep2) . "<br> <br>";

    /* p0203 opsi d */
    echo "Jumlah kata yang ada dalam paragraf di atas sebelum di replace adalah " . str_word_count($story) . "<br> <br>";
    echo "Jumlah kata yang ada dalam paragraf di atas setelah di replace adalah " . str_word_count($rep2);
?>