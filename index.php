<?php

    global $arrFast, $arrManual;

    require_once __DIR__ . "/tasks/task_1.php";
    require_once __DIR__ . "/tasks/task_2.php";
    require_once __DIR__ . "/tasks/task_3.php";
    require_once __DIR__ . "/tasks/task_4.php";
    require_once __DIR__ . "/tasks/task_5.php";
    require_once __DIR__ . "/tasks/task_6.php";
    require_once __DIR__ . "/tasks/task_7.php";

    echo "<br>";

    echo "********************************TASK 1********************************";

    echo "<br>";
    echo reverse(2876491204);
    echo "<br>";
    echo reverse(5);
    echo "<br><br>";
    echo reverseEasy(2876491204);
    echo "<br>";
    echo reverseEasy(5);
    echo "<br><br>";
    echo reverseInt(2876491204);
    echo "<br>";
    echo reverseInt(5);
    echo "<br>";

    echo "********************************TASK 2********************************";

    echo "<br>";
    echo palindrome(1221);
    echo "<br>";
    echo palindrome(1231);
    echo "<br>";

    echo "********************************TASK 3********************************";

    echo "<br>";
    echo RomanNumerals("MCMXC");
    echo "</br>";
    echo RomanNumerals("VIIII");
    echo "</br>";
    echo RomanNumerals("MCMLXXX");
    echo "</br>";
    echo RomanNumerals("VII");
    echo "</br>";
    echo RomanNumerals("MMXII");
    echo "</br>";
    echo RomanNumerals("CMXCIX");
    echo "</br>";
    echo RomanNumerals("MCMLX");
    echo "</br>";
    echo RomanNumerals("MCMILX");
    echo "</br>";
    echo RomanNumerals("MCMLIX");
    echo "<br>";

    echo "********************************TASK 4********************************";

    echo "<br>";
    echo "<br>Total number of steps for this array is " . steps([1,3,7,2,9,1,1,9,8,2,4,7,7,1,2,9,1,7,9,2]) . "!";
    echo "<br><br>";
    echo "<br>Total number of steps for this array is " . steps([1,2,7,2,8,1,1,9,8,2,3,7,7,1,2,8,1,7,9]) . "!";
    echo "<br><br>";
    echo "<br>Total number of steps for this array is " . steps([1,2,7,2,8,1,1,9,8,2,3,7,7]) . "!";
    echo "<br><br>";
    echo "<br>Total number of steps for this array is " . steps([3,4,8,9,6,1,0]) . "!";
    echo "<br><br>";

    echo "********************************TASK 5********************************";

    echo "<br>";
    echo validBrackets("(Aleksandar)");
    echo "<br>";
    echo validBrackets("(Aleksandar})}");
    echo "<br>";
    echo validBrackets("[Jovana]{}");
    echo "<br>";
    echo validBrackets("[Jovana]{]");
    echo "<br>";
    echo validBrackets("[]]]{}");
    echo "<br>";

    echo "********************************TASK 6********************************";

    echo "<br>";
    echo "SHORT SORT<br>";
    echo sortArr($arrFast);
    echo "<br><br>";
    echo "MANUAL SORT<br>";
    echo sortManual($arrManual);

    echo "<br>";

    echo "********************************TASK 7********************************";

    echo "<br>";
    echo brackets("(Aleksandar(");
    echo "<br>";
    echo brackets("oop(Aleksandar)");
    echo "<br>";
    echo brackets("(Aleksandar)((oop(");
    echo "<br>";
    echo brackets("(Aleksandar)oopAcademy(Quantox(Backend)oop");
    echo "<br>";
    echo brackets("(php)oopAcademy(QuantoxTechnology)technology(Backend)");