<?php

    require_once './vendor/autoload.php';

    use Tasks\Task_1;
    use Tasks\Task_2;
    use Tasks\Task_3;
    use Tasks\Task_4;
    use Tasks\Task_5;
    use Tasks\Task_6;
    use Tasks\Task_7;

    echo "<br>";

    echo "********************************TASK 1********************************";

    echo "<br>";
    echo Task_1::reverse(2876491204);
    echo "<br>";
    echo Task_1::reverse(5);
    echo "<br><br>";
    echo Task_1::reverseEasy(2876491204);
    echo "<br>";
    echo Task_1::reverseEasy(5);
    echo "<br><br>";
    echo Task_1::reverseInt(2876491204);
    echo "<br>";
    echo Task_1::reverseInt(5);
    echo "<br>";
    echo "********************************TASK 2********************************";

    echo "<br>";
    echo Task_2::palindrome(1221);
    echo "<br>";
    echo Task_2::palindrome(1231);
    echo "<br>";

    echo "********************************TASK 3********************************";

    echo "<br>";
    echo Task_3::RomanNumerals("MCMXC");
    echo "</br>";
    echo Task_3::RomanNumerals("VIIII");
    echo "</br>";
    echo Task_3::RomanNumerals("MCMLXXX");
    echo "</br>";
    echo Task_3::RomanNumerals("VII");
    echo "</br>";
    echo Task_3::RomanNumerals("MMXII");
    echo "</br>";
    echo Task_3::RomanNumerals("CMXCIX");
    echo "</br>";
    echo Task_3::RomanNumerals("MCMLX");
    echo "</br>";
    echo Task_3::RomanNumerals("MCMILX");
    echo "</br>";
    echo Task_3::RomanNumerals("MCMLIX");
    echo "<br>";

    echo "********************************TASK 4********************************";

    echo "<br>";
    echo "<br>Total number of steps for this array is " . Task_4::steps([1,3,7,2,9,1,1,9,8,2,4,7,7,1,2,9,1,7,9,2]) . "!";
    echo "<br><br>";
    echo "<br>Total number of steps for this array is " . Task_4::steps([1,2,7,2,8,1,1,9,8,2,3,7,7,1,2,8,1,7,9]) . "!";
    echo "<br><br>";
    echo "<br>Total number of steps for this array is " . Task_4::steps([1,2,7,2,8,1,1,9,8,2,3,7,7]) . "!";
    echo "<br><br>";
    echo "<br>Total number of steps for this array is " . Task_4::steps([3,4,8,9,6,1,0]) . "!";
    echo "<br><br>";

    echo "********************************TASK 5********************************";

    echo "<br>";
    echo Task_5::validBrackets("(Aleksandar)");
    echo "<br>";
    echo Task_5::validBrackets("(Aleksandar})}");
    echo "<br>";
    echo Task_5::validBrackets("[Jovana]{}");
    echo "<br>";
    echo Task_5::validBrackets("[Jovana]{]");
    echo "<br>";
    echo Task_5::validBrackets("[]]]{}");
    echo "<br>";

    echo "********************************TASK 6********************************";

    $arr = new Task_6();

    echo "<br>";
    echo "SHORT SORT<br>";
    echo Task_6::sortArr($arr -> getArrMerge());
    echo "<br><br>";
    echo "MANUAL SORT<br>";
    echo Task_6::sortManual($arr -> getArrMerge());

    echo "<br>";

    echo "********************************TASK 7********************************";

    echo "<br>";
    echo Task_7::brackets("(Aleksandar(");
    echo "<br>";
    echo Task_7::brackets("oop(Aleksandar)");
    echo "<br>";
    echo Task_7::brackets("(Aleksandar)((oop(");
    echo "<br>";
    echo Task_7::brackets("(Aleksandar)oopAcademy(Quantox(Backend)oop");
    echo "<br>";
    echo Task_7::brackets("(php)oopAcademy(QuantoxTechnology)technology(Backend)");