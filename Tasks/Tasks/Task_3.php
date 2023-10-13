<?php

    // Napisati funkciju koja pretvara rimski broj u ceo broj (npr. III u 3, IV u 4, IX u 9)


    namespace Tasks;

    class Task_3 {

        public static function RomanNumerals($r)
        {

            $r = (string)$r;

            if (preg_match("/[^ivxlcdmIVXLCDM]/", $r) == true) {
                return "Not Roman numerals!";
            }

            if (str_contains($r, "IIII")) {
                return "Not allowed!";
            }

            $n = [];

            for ($i = 0; $i < mb_strlen($r); $i++) {
                if ($r[$i] == "M" || $r[$i] == "m") {
                    $n[] = 1000;
                } elseif ($r[$i] == "D" || $r[$i] == "d") {
                    $n[] = 500;
                } elseif ($r[$i] == "C" || $r[$i] == "c") {
                    $n[] = 100;
                } elseif ($r[$i] == "L" || $r[$i] == "l") {
                    $n[] = 50;
                } elseif ($r[$i] == "X" || $r[$i] == "x") {
                    $n[] = 10;
                } elseif ($r[$i] == "V" || $r[$i] == "v") {
                    $n[] = 5;
                } elseif ($r[$i] == "I" || $r[$i] == "i") {
                    $n[] = 1;
                }
            }

            $a = 0;

            for ($i = 0; $i < count($n); $i++) {

                if ($n[$i] >= $n[$i + 1]) {
                    $a += $n[$i];
                } else {
                    $a -= $n[$i];
                }

            }

            return $a;

        }

    }